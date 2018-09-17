	$(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			selectable: true,
			selectHelper: true,
			// rewrite the create function for this to manage free/busy time slots
//			select: function( startDate, endDate, allDay, jsEvent, view ){
//				var obj = $(this);
//				if( $('#quick-links').is(':visible') ){
//					$('#quick-links').slideUp('fast');
//				}else{
//					slidePanel( '#sidebar-right', 'right', obj, date, '', jsEvent, view );
//				}
//			},
			allDaySlot: false,
			editable: true,
			firstDay: 1,
			weekends: true,
			defaultView: 'agendaWeek',
			minTime: '7:30am',
			maxTime: '8:00pm',
			slotMinutes: 15,
			slotEventOverlap: true,
			/*mouseover event */
			eventMouseover:function (calEvent){
				$(this).popover({
					trigger:'hover',
					title: '<strong>' + calEvent.title + '</strong>',
					content:calStr(calEvent),
					html: true,
					placement: 'left',
					container:"body"
				});
				$(this).popover('show');
			},
			eventMouseout: function(calEvent){
				$(this).popover('hide');
			},
			/* select a date */
			dayClick: function(date, allDay, jsEvent, view) {
				var obj = $(this);
				if( $('#quick-links').is(':visible') ){
					$('#quick-links').slideUp('fast');
				}else{
					slidePanel( '#sidebar-right', 'right', obj, date, '', jsEvent, view );
				}
			},
			/* select an event */
			eventClick: function(calEvent, jsEvent, view) {
				var obj = $(this);
				obj.popover('hide');
				if( $('#quick-links').is(':visible') ){
					$('#quick-links').slideUp('fast');
				}else{
					slidePanel( '#sidebar-left', 'left', obj, '', calEvent, jsEvent, view );
				}
			},
			eventStartEditable: function(){
				$(this).popover('hide');
			},
			eventDrop: function(){
				$(this).popover('hide');
			},
			eventDragStart: function(calEvent){
				$(this).popover('hide');
			},
			eventDragStop: function(){
				$(this).popover('hide');
			},
			eventResize: function(){
				$(this).popover('hide');
			},
			eventResizeStart: function(calEvent){
				$(this).popover('hide');
			},
			eventResizeStop: function(){
				$(this).popover('hide');
			},
			//events: '../../../app/clients/json_appointments.php'
			// replace with localStorage data
			events: appointment_list
		});
		// deal with style adjustments
		$('span.fc-header-title').html("");
	});
