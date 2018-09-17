// global service | product items
	var invoice = [], http_host = window.location.hostname;
	/* remove an item from an array using the array index */
	Array.prototype.unset = function(value) {
		if(this.indexOf(value) != -1) { // Make sure the value exists
			this.splice(this.indexOf(value), 1);
		}
		// usage: arrayName.unset();
	}
	/************ patient search section ****************/
	function loadPatient( obj ){
		// display the patient json object
		console.log( obj );
		var el = '#tab-patient-c';
		$(el).data('object', obj);
		$(el+' li.list-group-item a.editable').attr('data-pk',obj.id);
		$(el+' img.avatar').attr('src', '//'+http_host+'/'+obj.avatar);
		// rewrite these to represent specific editable params
		$(el+' a.country').html( obj.country ).attr({'data-title':obj.country,'data-value':obj.country});
		$(el+' a.name').html( obj.name ).attr({'data-title':obj.name,'data-value':obj.name});
		$(el+' a.phone').html( obj.phone ).attr({'data-title':obj.phone,'data-value':obj.phone});
		$(el+' a.email').html( obj.email ).attr({'data-title':obj.email,'data-value':obj.email});
		$(el+' a.street').html( obj.street ).attr({'data-title':obj.street,'data-value':obj.street});
		$(el+' a.suite').html( obj.suite ).attr({'data-title':obj.suite,'data-value':obj.suite});
		$(el+' a.city').html( obj.city ).attr({'data-title':obj.city,'data-value':obj.city});
		$(el+' a.region').html( obj.region ).attr('data-original-title',obj.region);
		$(el+' a.country').html( obj.country ).attr('data-original-title',obj.country);
		$(el+' a.zipcode').html( obj.zipcode ).attr('data-original-title',obj.zipcode);
		$('a.editable').bind().editable();
		$(el+' input#search-patient').attr('value','');
		$(el+' button.btn-save').removeAttr('disabled');
		console.log( $(el).data('object') );
	}
	function modifyObjects(obj, key, oval, nval) {
		var objects = [];
		for (var i in obj) {
			if (!obj.hasOwnProperty(i)) continue;
			if (typeof obj[i] == 'object') {
				objects = objects.concat(modifyObjects(obj[i], key, oval, nval));
			} else if (i == key && obj[key] == oval) {
				obj[key] = nval;
			}
		}
		return obj;
	}
	function updateObject(obj, key, nval){
		var data = $(obj).data('object'),
			oval = data[key];
		if(key == 'name'){ $(obj+' input#search-patient').attr('value',nval); }
		modifyObjects(data, key, oval, nval);
	}
	/*******************************************************/
	/* reset create|edit appointment sliders */
	function resetProducts(){
		$('#product-details').data("item", null).html("").hide();
		$('#product-select').val('option:selected', "");
	}
	function resetTabs(el, dir){
		$(el).hide('slide', { direction: dir }, 500);
		$(el).find('ul.nav-tabs').each(function(index){
			$(el).find('ul.nav-tabs:eq('+index+') a:first').tab('show');
			$('div.notes-panel').hide();
			$('a.notes').removeClass('btn-danger').addClass('btn-success').text('Create');
			$('input[name="search-patient"]').attr('value','');
			$('#ico_debit').attr("checked", true);
			resetProducts();
		});
	}
	/************ calculate column totals ****************/
	function deleteProduct( i ){
		invoice.unset( invoice[i] );
		redrawInvoice();
	}
	function redrawInvoice(){
		var items = invoice, i, button, output, subtotals = 0.00, taxtotals = 0.00, totals = 0.00,
			product, cost, quantity, subtotal, taxtotal, total;
		// redraw the tbody id="rows"
		for ( i=0 ;i < items.length; i++){
			// redrawn output
//			console.log( items[i] );
			product = items[i].product,
			cost = items[i].price,
			quantity = items[i].quantity,
			subtotal = (parseFloat(cost).toFixed(2))*(Number(quantity)),
			taxtotal = items[i].taxtotal,
			total = items[i].total;
			subtotals += +subtotal;
			taxtotals += +taxtotal;
			totals += +total;
			// begin loop
			if( i > 0 ){ // product button
				button = '<a data-index="' +i+ '" href="javascript:void(0);" class="del-product btn btn-danger btn-sm"><i class="fa fa-times fa-1x"></i></a>';
			}else{ // service icon
				button = '<i class="fa fa-user-md"></i>';
			}
			output += '<tr><td>' +button+ '</td>' +
				'<td class="text-left"><small>' +product+ '</small></td>' +
				'<td class="text-right"><small>' +parseFloat(cost).toFixed(2)+ '</small></td>' +
				'<td class="text-right"><small>' +quantity+ '</small></td>' +
				'<td class="text-right"><small>' +parseFloat(subtotal).toFixed(2)+ '</small></td>' +
				'<td class="text-right"><small>' +parseFloat(taxtotal).toFixed(2)+ '</small></td>' +
				'<td class="text-right"><small>' +parseFloat(total).toFixed(2)+ '</small></td></tr>';
		}
		$("tbody#rows").html( output );
		$("#subtotal").html( '$' +parseFloat(subtotals).toFixed(2) );
		$("#taxtotal").html( '$' +parseFloat(taxtotals).toFixed(2) );
		$("#total, #pagetotal").html( '$' +parseFloat(totals).toFixed(2) );
	}
	/************ load the invoice ****************/
	function quickInvoice(obj){
//		console.log( obj );
		// define the cardholder name for the credit card form
		$('#ccModal #cc_cardholder').val( obj.title );
		var d = new Date(obj.start), date = d.toDateString(),
			taxrate = parseFloat(obj.tax).toFixed(2),
			qty = Number(1), cost = parseFloat(obj.cost).toFixed(2),
			qtytotal = (parseFloat(cost).toFixed(2))*qty,
			taxtotal = parseFloat((parseFloat(taxrate).toFixed(2))*(parseFloat(qtytotal).toFixed(2))).toFixed(2),
			subtotal = (Number(taxtotal)+Number(qtytotal)),
			invoice_number = $.now() + '-' + obj.practitioner_id + '-' + '0001',
			payment_type = '<img class="img-thumbnail cc-icons" src="//'+http_host+'/pub/img/' +$('input[name="payment_type"]:checked').data('type')+ '">';
			// insert invoice recipient
			output = '' +
			'<div class="col-md-12">' +
				'<div class="row">' +
					'<table id="invoice_header" class="quick-invoice table table-condensed">' +
						'<tr>' +
							'<td width="50%">' +
								'<div class="alert alert-info"><small>' +
									'<p><img src="//' + http_host + '/' +obj.clinic[0].logo+ '" class="img-invoice img-thumbnail img-responsive"></p>' +
									'<hr><address>' +
										obj.clinic[0].address+'<br>' +
										obj.clinic[0].region+', '+obj.clinic[0].state+' '+obj.clinic[0].zipcode+'<br>' +
										obj.clinic[0].phone+'<br>' + obj.clinic[0].email+'<br>' +
										obj.practitioner+' (#'+obj.practitioner_id+')' +
									'</address>' +
								'</small></div>' +
							'</td>' +
							'<td width="50%">' +
								'<div class="alert alert-success"><small>' +
									'<p>' +
									'<strong>Date: </strong>' +date+'<br>' +
									'<strong>Invoice: </strong>' +invoice_number +
									'</p><hr>' +
									'<address>' +
										'<strong>' + obj.title+'</strong><br>' + obj.address+'<br>' +
										obj.region+', '+obj.state+' '+obj.zipcode+'<br>' +
										obj.mobile+'<br>' + obj.email +
									'</address>' +
									'<hr><p class="text-center text-success" style="font-size:185%; font-style:italic"><strong>Total Due: ' +
									'<span id="pagetotal">$' +subtotal+ '</span></strong></p>' +
								'</small></div>' +
							'</td>' +
					'</table>' +
				'</div>' +
			// insert invoice particulars
				'<div class="row">' +
					'<table id="invoice-items" class="table table-condensed">' +
						// table header
						'<thead><tr><th></th>' +
							'<th class="text-left"><small>Item</small></th>' + '<th class="text-right"><small>Price</small></th>' +
							'<th class="text-right"><small>Qty</small></th>' + '<th class="text-right"><small>Sub-Total</small></th>' +
							'<th class="text-right"><small>Tax</small></th>' + '<th class="text-right"><small>Total</small></th>' +
						'</tr></thead>' +
						// service item
						'<tbody id="rows"><tr><td><i class="fa fa-user-md"></i></td>' +
							'<td class="text-left"><small><strong>' +obj.appointment+ '</strong></small></td>' + '<td class="text-right"><small>' +cost+ '</small></td>' +
							'<td class="text-right"><small>' +qty+ '</small></td>' + '<td class="calcsubtotal text-right"><small>' +qtytotal+ '</small></td>' +
							'<td class="calctax text-right"><small>' +taxtotal+ '</small></td>' + '<td class="calctotal text-right"><small>' +subtotal+ '</small></td>' +
						'</tr></tbody>' +
					'</table>' +
				'</div>' +
				'<div class="row">' +
					'<table id="invoice-results" class="table table-condensed">' +
						'<tr>' +
							'<td width=70%">' +
								'<p class="trailer">Our mission is to adjust the families of our community with integrity, joy, and devotion, ' +
								'in order to express and maintain their optimal health potential through the highest quality ' +
								'of natural chiropractic care -</p><p class="trailer">Our mission is to empower people to lead incredible lives ' +
								'through education, and motivation, so as to maximize life.</p>' +
							'</td>' +
							'<td width="30%">' +
								'<ul class="list-group">' +
									'<li class="list-group-item list-group-item-info clearfix"><strong><small>' +
										'<span class="pull-left">Sub-total:&nbsp;&nbsp;&nbsp;</span></strong>' +
										'<span id="subtotal" class="pull-right">$' +qtytotal+ '</span></small></li>' +
									'<li class="list-group-item list-group-item-warning clearfix"><strong><small>' +
										'<span class="pull-left">Tax:&nbsp;&nbsp;&nbsp;</span></strong>' +
										'<span id="taxtotal" class="pull-right">$' +taxtotal+ '</span></small></li>' +
									'<li class="list-group-item list-group-item-success clearfix"><strong><small>' +
										'<span class="pull-left">Total:&nbsp;&nbsp;&nbsp;</span></strong>' +
										'<span id="total" class="pull-right"><em>$' +subtotal+ '</em></span></small></li>' +
									'<li class="list-group-item list-group-item-default clearfix"><strong><small>' +
										'<span class="pull-left">Method:&nbsp;&nbsp;&nbsp;</span></strong>' +
										'<span id="paidby" class="pull-right">' +payment_type+ '</span></small></li>' +
								'</ul>' +
							'</td>' +
						'</tr>' +
					'</table>' +
				'</div>' +
			'</div>';
		// now bind the service to the first table row
		var serviceObj = $.parseJSON('{ "manufacturer": "'+obj.clinic[0].name+'", "product" : "'+obj.appointment+'", "price": "'+cost+'", "taxcode": "'+obj.tax+
				'", "taxtotal": "'+taxtotal+'", "subtotal": "'+subtotal+'", "quantity":'+qty+', "total": "'+subtotal+'" }');
		invoice.push( serviceObj );
		return output;
	}
	/************************************************/
	function numItems(){
		var i = 1, output = '';
		while (i <= 10){
			output += '<option value="' +
				i + '">' +
				i + '</option>';
			i++;
		}
		return output;
	}
	/************ recalculate product quick invoice ************/
	function invoiceCalculator( obj, qty ){
		// re-calculate the product insert costs
		var amount = qty.val(),
			subtotal = parseFloat( obj.price*Number(amount) ).toFixed(2),
			taxcode = parseFloat( obj.taxcode ).toFixed(2),
			taxtotal = parseFloat( subtotal*taxcode ).toFixed(2),
			total = parseFloat( Number(subtotal)+Number(taxtotal) ).toFixed(2),
			// bind the new totals to the product
			itemObject = $.parseJSON('{ "manufacturer": "'+obj.manufacturer+'", "product" : "'+obj.product+'", "price": "'+obj.price+'", "taxcode": "'+taxcode+
				'", "taxtotal": "'+taxtotal+'", "subtotal": "'+subtotal+'", "quantity":'+amount+', "total": "'+total+'" }');
			$("#product-details").data("items", itemObject);
		$("#product-calculator #product-subtotal").animate({ color: "green"}).html(subtotal).animate({ color: "black"},1000);
		$("#product-calculator #product-tax").animate({ color: "green"}).html(taxtotal).animate({ color: "black"},1000);
		$("#product-calculator #product-total").animate({ color: "green"}).html(total).animate({ color: "black"},1000);
	}
	/************ load quick invoice product ****************/
	function quickProduct(obj){
//		console.log( obj );
		var item = obj.text(),
			manufacturer = obj.parent().attr('label'),
			price = parseFloat( obj.val() ).toFixed(2),
			taxcode = parseFloat( obj.data('taxcode') ).toFixed(2),
			tax = parseFloat( price*taxcode ).toFixed(2),
			taxrate = Number(taxcode)*100,
			total = parseFloat( Number(tax)+Number(price)).toFixed(2),
			itemObject = $.parseJSON('{ "manufacturer": "'+manufacturer+'", "product" : "'+item+'", "price": "'+price+'", "taxcode": "'+taxcode+
				'", "taxtotal": "'+tax+'", "subtotal": "'+price+'", "quantity":1, "total": "'+total+'" }');
			output = '<div id="product-calculator" class="clearfix"><ul class="list-unstyled product-insert">' +
			'<li><strong>' + manufacturer + ':</strong> ' + item + '</li>' +
			'<li><strong>Price:</strong> <span id="product-price">' + price + '</span></li>' +
			'<li><span class="clearfix"><span class="pull-left"><strong>Quantity:</strong></span><span class="pull-right">' +
			'<select id="product-quantity" name="product-quantity" class="form-control input-sm" style="width: 60px;">' +
			numItems() + '</select></span></span></li>' +
			'<li><strong>Sub-Total: </strong>$ <span id="product-subtotal">' + price + '</span></li>' +
			'<li><strong>Tax: </strong>$ <span id="product-tax">' + tax + '</span> (' + taxrate + '%)</li>' +
			'<li><strong>Total: </strong>$ <span id="product-total">' + total + '</span></li>' +
			'</ul><p class="pull-right">' +
			'<button id="add-product" class="btn btn-success btn-sm" type="button"><i class="fa fa-plus"></i> <small> Insert </small></button> ' +
			'<a href="javascript:void(0);" id="cancel-product" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> <small> Cancel </small></a></p></div>';
			$("#product-details").data("items", itemObject);
			return output;
	}
	/************************************************/
	/* slide out the panels */
	function slidePanel( el, dir, obj, date, calEvent, jsEvent, view ){
		$('.settings').slideUp('fast');
		resetTabs( el, dir );
		var effect = 'slide',
			options = { direction: dir },
			duration = 500,
			dDate, dTime;
		// slide panel
		switch( dir ){
			case 'left':
				invoice = [];
				dDate = rtnDate( calEvent.start ),
				dTime = rtnTime( calEvent.start );
				newDir = 'right';
				// update the datepicker
				$('#edit_datepicker.input-group.date').data({ 'date': dDate })
					.datepicker('update', dDate)
					.children('input')
					.attr( 'value', dDate );
					// draw the invoice [ edit screen only ]
				$('#invoice-details').html( quickInvoice( calEvent ) );
			break;
			case 'right':
				dDate = rtnDate( date ),
				dTime = rtnTime( date );
				newDir = 'left';
				// update the datepicker
				$('#create_datepicker.input-group.date').data({ 'date': dDate })
					.datepicker('update', dDate)
					.children('input')
					.attr( 'value', dDate );
			break;
		}
		resetTabs('#sidebar-'+newDir, newDir);
		$( '#sidebar-'+dir+' input.set_clock' ).attr({ value: dTime});
		$('div'+el+'.sidebar').show(effect, options, duration);
	}
