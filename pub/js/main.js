/************************* GLOBAL VARIABLES *************************/
var patient_list = getLocalStorage('patient_list'),
	appointment_list = getLocalStorage('appointment_list'),
	product_list = getLocalStorage('product_list'),
	soapnote_list = getLocalStorage('soapnote_list'),
	city_list = getLocalStorage('city_list'),
	region_list = getLocalStorage('region_list'),
	country_list = getLocalStorage('country_list'),
	error_count = getLocalStorage('error_count');
	// redirect if there are less than 7 localStorage keys
	var size = 0, key = '', ttl_keys = 0;
	for (i=0; i<=localStorage.length-1; i++){
//		key += localStorage.key(i) + '\n';
		ttl_keys++
	}
/*********************** PARSE LOCALSTORAGE ***********************/
function getLocalStorage(item){
	var str = JSON.parse( localStorage.getItem(item) );
	return str;
}
//	console.log(key);
//	console.log(ttl_keys);
	if( ttl_keys < 7 ){ window.location.href = '../'; }
/*****************************************************************************/
/* reset forms */
function clear_form_elements(el) {
	$(el).find(':input').each(function() {
		switch(this.type) {
			case 'password':
			case 'select-multiple':
			case 'select-one':
			case 'text':
			case 'textarea':
				$(this).val('');
				break;
			case 'checkbox':
			case 'radio':
				this.checked = false;
		}
	});
}
/* global date variables */
function rtnDate(date){
	var d = new Date( date ),
		dYrs = d.getUTCFullYear(),
		dMns = (d.getUTCMonth()+1),
		dMns = ("0" + dMns).slice(-2),
 		dDts = d.getUTCDate(),
 		dDts = ("0" + dDts).slice(-2),
 		dDate = dMns+'-'+dDts+'-'+dYrs;
	return dDate;
}
function rtnTime(date){
	var d = new Date( date ),
		dHrs = d.getHours(),
		dHrs = ("0" + dHrs).slice(-2),
		dMin	= d.getMinutes(),
		dMin = ("0" + dMin).slice(-2),
		dSec	= d.getSeconds(),
		dSec = ("0" + dSec).slice(-2),
		dTime = dHrs + ':' + dMin + ':'  + dSec,
	/* convert 24 to 12 hour */
		H = +dTime.substr(0, 2), h = (H % 12) || 12, ampm = H < 12 ? " AM" : " PM",
		dTime = h + dTime.substr(2, 3) + ampm;
	return dTime;
}

/* calendar popover content */
function calStr(calEvent){
	 var calDetails = '<div class="sq-container">' +
			$.fullCalendar.formatDate(calEvent.start, 'ddd, MMM ddS - hh:mm tt') + '<br>' +
			'<span class="' + calEvent.doctor + '"></span> ' + calEvent.practitioner +'<br>' +
			'<span class="' + calEvent.type + '"></span> ' + calEvent.appointment +'<br>' +
			'<span class="' + calEvent.status + '"></span> ' + calEvent.statusName +'<hr>' +
			'<p>' + calEvent.details + '</p></div>';
	return calDetails;
}

$(window).load(function(){
	/* hide panels when scrolling starts */
	$(window).on('scrollstart', function(){
		$('div.sidebar').addClass('opacity-scroll');
	});
	/* show panels when scrolling stopped */
	$(window).on('scrollstop', function(e){
		$('div.sidebar').removeClass('opacity-scroll');
	});
});
/* jQuery document ready */
$(document).ready(function(){
	// cc modal before close
	$('#ccModal').on('hidden.bs.modal', function(e){
		$("#ico_debit").attr("checked", true);
		var el = '<img class="img-thumbnail" src="//'+http_host+'/pub/img/ico_debit.jpg">';
		$("#paidby, #cc_selected").html(el);
	});
	// bootstrap-datepicker
	$(".input-group.date").datepicker({
		autoclose: true,
		todayHighlight: true,
		dateFormat: 'mm-dd-yyyy'
	});
	// bootstrap-timepicker
	$('.set_clock').clockface({
		format: 'h:mm A'
	});
	/* tab before select event */
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var el = e.target; // target tab
//		e.relatedTarget; // previous tab
		if( $(el).attr('href').replace('#','') == 'tab-invoices' ){ resetProducts(); }
		if( $(el).data('ref') ){
			var ref = $(this).data('ref'),
				href = $(this).attr('href'),
				val = href.replace("#","");
			$('select' + ref + ' option[value="'+val+'"]').attr('selected', 'selected');
		}
	})
	/* disable page scrolling if in controller */
	$('.child-panel, #search-patients').mouseenter(function(){
		$('body').css('overflow', 'hidden');
	}).mouseleave(function(){
		$('body').css('overflow', 'auto');
	});
	/* slideUp the navigation if clicked outside of it */
	$(document).bind(click, function(e){
		// product insert select
		$('select[name="products"]').unbind('change').on("change", function(){
			var obj = $('option:selected', this);
			if(obj.val()){
				$("#product-details").html( quickProduct(obj) ).show();
			}else{
				resetProducts();
			}
		});
		// insert the product & clear the form
		$('button#add-product').unbind('click').on('click',function(){
			// add the product to invoice object
			invoice.push( $("#product-details").data("items") );
			// redraw the invoice
			redrawInvoice();
			// reset the product form
			resetProducts();
		});
		$("a.del-product").unbind('click').on('click',function(){
			var index = $(this).data('index');
			deleteProduct( index );
		});
		$("#cancel-product").unbind("click").on("click",function(e){
			e.preventDefault();
			resetProducts();
		});
		$('select[name="product-quantity"]').unbind('change').on('change', function(){
			var qty = $('option:selected', this),
				obj = $("#product-details").data("items");
			invoiceCalculator( obj, qty );
		});
		// payment type
		$('input[name="payment_type"]').unbind('change').on('change', function(){
			payment_type = '<img class="img-thumbnail" src="//'+http_host+'/pub/img/' +$(this).data('type')+ '">';
			$('span#paidby, label#cc_selected').html( payment_type );
			var cc_pattern, cc_payment;
			switch( $(this).data('type') ){
				case "ico_amex.jpg":
					cc_pattern = '[0-9]{4} *[0-9]{6} *[0-9]{5}';
					cc_payment = 'amex';
				break;
				default:
					if( $(this).data('type') == 'ico_visa.jpg' ){ cc_payment = 'visa'; }
					if( $(this).data('type') == 'ico_mc.jpg' ){ cc_payment = 'mc'; }
					cc_pattern = '[0-9]{13,16}';
			}
			$("#cc_payment").val( cc_payment );
			$("#cc_number").attr('pattern', cc_pattern);
		});
		// editable-x
		$.fn.editable.defaults.mode = 'inline';
		$('.text').editable({
			type: 'text',
			success: function(res,val){
				var obj = $(this).data('obj'),
					key = $(this).attr('id');
				 updateObject(obj, key, val);
			}
		});
		$('.city').editable({
			value: 'North Vancouver',
			source: city_list,
			success: function( res, val){
				console.log(val);
				var obj = $(this).data('obj'),
					key = $(this).attr('id');
				 updateObject(obj, key, val);
			}
		});
		$('.region').editable({
			value: 'BC',
			source: region_list,
			success: function( res, val){
				console.log(val);
				var obj = $(this).data('obj'),
					key = $(this).attr('id');
				 updateObject(obj, key, val);
			}
		});
		$('.country').editable({
			value: 'CA',
			source: country_list,
			success: function( res, val){
				console.log(val);
				var obj = $(this).data('obj'),
					key = $(this).attr('id');
				 updateObject(obj, key, val);
			}
		});
		/*-------------------------------*/
		var el = $(e.target);
		if ( !el.hasClass('menu') ){
			// close the menu panel
			if( $('#quick-links').is(':visible') ){
				$('#quick-links').slideUp('fast');
			}
		}else{
			// close the sidebar panels
			if( $('#sidebar-left').is(':visible') ){
				resetTabs('#sidebar-left','left');
			}
			if( $('#sidebar-right').is(':visible') ){
				resetTabs('#sidebar-right','right');
			}
		}
		// appointment notes and note button
		if( el.hasClass('notes') ){
			var elBtnText = el.context.innerText,
				elTarget = el.data('target');
			if( elBtnText == "Create" ){
				el.context.innerHTML = "Cancel";
				el.removeClass('btn-success').addClass('btn-danger');
				$(elTarget).slideDown('fast');
			}else{
				el.context.innerHTML = "Create";
				el.removeClass('btn-danger').addClass('btn-success');
				$(elTarget).slideUp('fast');
			}
		}
		// appointment slider
		if( el.hasClass('close-panel') ){
			var elTarget = el.data('target'),
				elDir = el.data('dir');
			resetTabs(elTarget, elDir);
		}
		// credit card modal
		if( el.hasClass('cc') ){
			var elTarget = el.data('target');
			$(elTarget).modal('show');
		}
	});
	/******************************************************/
// Set the tooltip
	var table = $("table"), ul = $("ul"), i = $('i.tt'), ahref = $('a.ctrl'), panel = $('.close-panel');
	// panel table popover
	table.on('mouseenter', 'td', function(){ $(this).popover('show'); });
	table.on('mouseleave', 'td', function(){ $(this).popover('hide'); });
	// panel list popover
	ul.on('mouseenter', 'li', function(){ $(this).popover('show'); });
	ul.on('mouseleave', 'li', function(){ $(this).popover('hide'); });
	// color code tooltip
	i.on('mouseenter', function(){ $(this).tooltip('show'); });
	i.on('mouseleave', function(){ $(this).tooltip('hide'); });
	// settings
    ahref.bind(click, function() {
    	$('.settings').slideUp('fast');
    	// if entire panel
    	if( $(this).children('i.chevron').hasClass('fa-chevron-up') == true ){
    		$(this).children('i.chevron').removeClass('fa-chevron-up')
    			.addClass('fa-chevron-down')
    			.attr({
    				"title":"maximize",
    				"data-original-title":"maximize"
    			});
    	}else{
    		$(this).children('i.chevron').removeClass('fa-chevron-down')
    			.addClass('fa-chevron-up')
    			.attr({
    				"title":"minimize",
    				"data-original-title":"minimize"
    			});
    	}
		// primary navigation
    	var id = $(this).data('id');
    	if( $(id).is(':visible') ){
    		$(id).slideUp('fast');
    	}else{
    		$(id).slideDown('fast');
    	}
    });
});
/***********************************************************************************/
// anonomous print function
/***********************************************************************
	1: first open a modal window
	2: load div content
	3: remove overflow-y hidden
	4: allow print of this div
***********************************************************************/
// print preview the invoice
$(function(e){
	$("#print-invoice").unbind('click').on('click',function(){
		var item = $("#invoice-details").html();
		$(".invoice-details").html('<div class="panel"><div class="panel-body">' +item+ '</div></div>');
		$("#myModal #invoice-items").removeClass('child-panel');
		$("#myModal #invoice_header").removeClass('quick-invoice');
		$("#myModal #invoice-items a.del-product").replaceWith('<i class="fa fa-shopping-cart"></i>');
	});
});
// print the invoice
$(function(e){
    $( ".print" ).unbind('click').attr( "href", "javascript:void(0)").on('click',function(e){
    	e.preventDefault();
    	// print the element content
    	$( "#myModal .invoice-details" ).printThis({
      		debug: true,				//show the iframe for debugging
      		importCSS: true,		//import page CSS
      		printContainer: true,	//grab outer container as well as the contents of the selector
      		// load the css
      		loadCSS: '//'+http_host+'/pub/css/main.css',
      		pageTitle: "Patient Invoice",	//add title to print page
      		removeInline: false,	//remove all inline styles from print elements
      		printDelay: 333,			//variable print delay
      		header: null				//prefix to html
		});
    // Cancel click event.
    return( false );
    });
});
// anonomous typeahead search patient
    $(function(){
      // applied typeahead to the text input box
      $('#multiple-datasets .typeahead').typeahead({
      	highlight: true,
      	hint: false,
        name: 'patients',
        cache: false,
        /****************************************************************
        	parse out the typeahead search by selecting db
        	results using the %<item to search> method
        	Then return the results accordingly, for the remote
        	method.
        	--
        	local is useful for a static json object file
        	In this example, I'm using a localStorage
        	"local" json file, generated via PHP
        	which allows me to populate the localStorage
        	with up to date information in real time
        ****************************************************************/
        //remote: '../app/clients/json_patients.php?q=%QUERY',
		//prefetch: '../pub/js/data/repos.json',
        local: patient_list,
        // template for each suggestion
        template: [
          '<div class="clearfix">',
          '<p class="repo-language pull-right">{{injury}}<p>',
          '<p class="repo-name"><span class="pull-left"><img src="../{{avatar}}" class="img-thumbnail img-responsive" style="width: 90px; margin-right:0.3em;">',
          '</span>{{name}}</p>',
          '<p class="repo-description">{{email}} - {{phone}}<br><i>{{description}}</i></p>',
          '</div><hr>'
        ].join(''),

        // template engine
        engine: Hogan,
        // selected
		updater: function ( value ) {
			console.log( value );
			return value;
		}
      }).on('typeahead:selected', function (obj, datum) {
//    	console.log(obj);
//	    console.log(datum);
	    // populate the patient tab
	    loadPatient(datum);
	    $(this).blur();
	});
});
// anonomous functions for select lists
$(function(e){
	$('select').on('change',function(e){
		// today's date
		var d = new Date(), dDay = d.getDay();
		e.preventDefault();
		var id = $(this).attr('id'),
			val = $('#' + id + ' option:selected').val(),
			div = 'div.' + id,
			labels = div + ' label',
			checkboxes = div + ' input[type=checkbox]';
			radio = div + ' input[type=radio]';
			input = div + ' input[type=number]';
			selects = div + ' select';
		switch( id ) {
			// existing appointment editing
			case "appt_repeating_edit":
				// manage the repeating appointment well
				if( val >= 2 ){ // enable well
					$(div).addClass('bg-white');
					$(labels).removeClass('repeat');
					if( val == 2 ){
						var dayValues = [''+dDay+''];
						$(checkboxes).prop('disabled', false).attr('checked', false).attr('type','radio');
						$(div).find(':radio[name="day"]').each(function (){
//							console.log( ($.inArray($(this).val(), '+dayValues+') != -1) );
							$(this).prop("checked", ($.inArray($(this).val(), dayValues) != -1));
						});
						$(selects).prop('disabled', false).attr('value',1);
						// change day label text
						$(labels+' span.day-title').text('Single Day');
					}else if( val == 3 ){
						var dayValues = ['1', '3', '5'];
						if( $(radio) ){ $(radio).attr('type','checkbox'); }
						$(checkboxes).prop('disabled', false).attr('checked', false);
						// populate all the previously selected days
						$(div).find(':checkbox[name="day"]').each(function () {
//							console.log( ($.inArray($(this).val(), dayValues) != -1) );
                    		$(this).prop("checked", ($.inArray($(this).val(), dayValues) != -1));
						});
						$(selects).prop('disabled', false).attr('value',2);
						// change day label text
						$(labels+' span.day-title').text('Multiple Days');
					}
					$(input).prop('disabled', false).attr('value', 1);
				}else{ // disable well
					$(div).removeClass('bg-white');
					if( $(radio) ){ $(radio).attr('type','checkbox').attr('checked',false).prop('disabled',true); }
					$(labels).addClass('repeat');
					$(checkboxes).prop('disabled', true).attr('type','checkbox').attr('checked', false);
					$(input).prop('disabled', true).attr('value', '');
					$(selects).prop('disabled', true).attr('value',0);
				}
			break;
			// new appointment creation
			case "appt_repeating_create":
				// manage the repeating appointment well
				if( val >= 2 ){ // enable well
					$(div).addClass('bg-white');
					$(labels).removeClass('repeat');
					if( val == 2 ){
						var dayValues = [''+dDay+''];
						$(checkboxes).prop('disabled', false).attr('checked', false).attr('type','radio');
						$(div).find(':radio[name="day"]').each(function (){
//							console.log( ($.inArray($(this).val(), '+dayValues+') != -1) );
							$(this).prop("checked", ($.inArray($(this).val(), dayValues) != -1));
						});
						$(selects).prop('disabled', false).attr('value',1);
						$(labels+' span.day-title').text('Single Day');
					}else if( val == 3 ){
						var dayValues = [''+dDay+''];
						if( $(radio) ){ $(radio).attr('type','checkbox'); }
						$(checkboxes).prop('disabled', false).attr('checked', false);
						// populate all the previously selected days
						$(div).find(':checkbox[name="day"]').each(function () {
//							console.log( ($.inArray($(this).val(), dayValues) != -1) );
                    		$(this).prop("checked", ($.inArray($(this).val(), dayValues) != -1));
						});
						$(selects).prop('disabled', false).attr('value',2);
						$(labels+' span.day-title').text('Multiple Days');
					}
					$(input).prop('disabled', false).attr('value', 1);
				}else{ // disable well
					$(div).removeClass('bg-white');
					if( $(radio) ){ $(radio).attr('type','checkbox').attr('checked',false).prop('disabled',true); }
					$(labels).addClass('repeat');
					$(checkboxes).prop('disabled', true).attr('type','checkbox').attr('checked', false);
					$(input).prop('disabled', true).attr('value', '');
					$(selects).prop('disabled', true).attr('value',0);
				}
			break;
		}
	});
});
/*****************************************************************************
 data-id="#patient-container" class="btn-save
*****************************************************************************/
 $(function(){
 	$('button.btn-save').unbind('click').on('click', function(e){
 		e.preventDefault();
 		var obj_id = $(this).data('id'),
 			obj = $( obj_id ).data('object');
 		console.log( obj_id );
 		console.log( obj );
 	});
 });
