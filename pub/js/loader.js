// global variables
var patient_list = JSON.parse(localStorage.getItem('patient_list')),
	appointment_list = JSON.parse(localStorage.getItem('appointment_list')),
	product_list = JSON.parse(localStorage.getItem('product_list')),
	soapnote_list = JSON.parse(localStorage.getItem('soapnote_list')),
	city_list = JSON.parse(localStorage.getItem('city_list')),
	region_list = JSON.parse(localStorage.getItem('region_list')),
	country_list = JSON.parse(localStorage.getItem('country_list')),
	error_count = JSON.parse(localStorage.getItem('error_count'));
// LOCAL STORAGE
if (Modernizr.localstorage) {
	getPatients( patient_list );
}
// set & retrieve errors
function setError(item, value){
	if(!error_count){ // error list is null
		error_count = [];
		var getErrors = '[{"datalist":"'+item+'", "error":"'+value+'"}]';
		localStorage.setItem("error_count", [getErrors] );
		error_count = JSON.parse( localStorage.getItem("error_count") );
		console.log(error_count);
	}else{
		if(error_count != null){
			error_count = JSON.parse( localStorage.getItem("error_count") );
			error_count.push( { "datalist":item, "error":value } );
			localStorage.setItem("error_count", JSON.stringify(error_count) );
			console.log( JSON.parse(localStorage.getItem('error_count')) );
		}
	}
	$('#loading-'+item).html(' &gt; '+item+' : <span class="error">FAIL</span>');
}
// get patient_list
function getPatients( patient_list ){
	if( !patient_list ){
		$.getJSON( '../app/clients/json_patients.php', function( data ) {
			var getPatients = JSON.stringify(data);
			localStorage.setItem( 'patient_list', getPatients );
			patient_list = JSON.parse(localStorage.getItem('patient_list'));
			if( patient_list != null ){
				$('#loading-patients').delay(3000,function(){
					$(this).html(' &gt;  Patients :   <span class="success">SUCCESS</span>' );
					getAppointments( appointment_list );
				});
			}else{
				setError("patients", 1);
				getAppointments( appointment_list );
			}
		});
	}else{
		patient_list = JSON.parse(localStorage.getItem('patient_list'));
		if( patient_list != null ){
			$('#loading-patients').delay(3000,function(){
				$(this).html(' &gt;  Patients :   <span class="success">SUCCESS</span>');
				getAppointments( appointment_list );
			});
		}else{
			setError("patients", 1);
			getAppointments( appointment_list );
		}
	}
}
// get appointment_list
function getAppointments( appointment_list ){
	if( !appointment_list ){
		$.getJSON( '../app/clients/json_appointments.php', function(data) {
			var getAppointments = JSON.stringify(data);
			localStorage.setItem( 'appointment_list', getAppointments );
			appointment_list = JSON.parse(localStorage.getItem('appointment_list'));
			if( appointment_list != null ){
				$('#loading-appointments').delay(3000,function(){
					$(this).html(' &gt;  Appointments :   <span class="success">SUCCESS</span>');
					getProducts( product_list );
				});
			}else{
				setError("appointments", 1);
				getProducts( product_list );
			}
		});
	}else{
		appointment_list = JSON.parse(localStorage.getItem('appointment_list'));
		if( appointment_list != null ){
			$('#loading-appointments').delay(3000,function(){
				$(this).html(' &gt;  Appointments :   <span class="success">SUCCESS</span>');
				getProducts( product_list );
			});
		}else{
			setError("appointments", 1);
			getProducts( product_list );
		}
	}
}
// get products_list
function getProducts( product_list ){
	if( !product_list ){
		$.getJSON( '../app/clients/json_products.php', function(data) {
			var getProducts = JSON.stringify(data);
			localStorage.setItem( 'product_list', getProducts );
			product_list = JSON.parse(localStorage.getItem('product_list'));
			if( product_list != null ){
				$('#loading-products').delay(3000,function(){
					$(this).html(' &gt;  Products :   <span class="success">SUCCESS</span>');
					getSoapNotes( soapnote_list );
				});
			}else{
				setError("products", 1);
				getSoapNotes( soapnote_list );
			}
		});
	}else{
		product_list = JSON.parse(localStorage.getItem('product_list'));
		if( product_list != null ){
			$('#loading-products').delay(3000,function(){
				$(this).html(' &gt;  Products :   <span class="success">SUCCESS</span>');
				getSoapNotes( soapnote_list );
			});
		}else{
			setError("products", 1);
			getSoapNotes( soapnote_list );
		}
	}
}
// get soap_notes
function getSoapNotes( soapnote_list ){
	if( !soapnote_list ){
		$.getJSON( '../app/clients/json_soapnotes.php', function(data) {
			var getSoapnotes = JSON.stringify(data);
			localStorage.setItem( 'soapnote_list', getSoapnotes );
			soapnote_list = JSON.parse(localStorage.getItem('soapnote_list'));
			if( soapnote_list != null ){
				$('#loading-soapnotes').delay(3000,function(){
					$(this).html(' &gt;  Soap Notes :   <span class="success">SUCCESS</span>');
						getCities( city_list );
				});
			}else{
				setError("soapnotes", 1);
				getCities( city_list );
			}
		});
	}else{
		soapnote_list = JSON.parse(localStorage.getItem('soapnote_list'));
		if( soapnote_list != null ){
			$('#loading-soapnotes').delay(3000,function(){
				$(this).html(' &gt;  Soap Notes :   <span class="success">SUCCESS</span>');
					getCities( city_list );
			});
		}else{
			setError("soapnotes", 1);
			getCities( city_list );
		}
	}
}
// get cities
function getCities( city_list ){
	if( !city_list ){
		$.getJSON( '../app/clients/json_cities.php', function(data) {
			var getCities = JSON.stringify(data);
			localStorage.setItem( 'city_list', getCities );
			city_list = JSON.parse(localStorage.getItem('city_list'));
			if( city_list != null ){
				$('#loading-cities').delay(3000,function(){
					$(this).html(' &gt;  City Data :   <span class="success">SUCCESS</span>');
					getRegions( region_list )
				});
			}else{
				setError("cities", 1);
				getRegions( region_list );
			}
		});
	}else{
		city_list = JSON.parse(localStorage.getItem('city_list'));
		if( city_list.length != null ){
			$('#loading-cities').delay(3000,function(){
				$(this).html(' &gt;  City Data :   <span class="success">SUCCESS</span>');
					getRegions( region_list );
			});
		}else{
			setError("cities", 1);
			getRegions( region_list );
		}
	}
}
// get regions
function getRegions( region_list ){
	if( !region_list ){
		$.getJSON( '../app/clients/json_regions.php', function(data) {
			var getRegions = JSON.stringify(data);
			localStorage.setItem( 'region_list', getRegions );
			region_list = JSON.parse(localStorage.getItem('region_list'));
			if( region_list.length != null ){
				$('#loading-regions').delay(3000,function(){
					$(this).html(' &gt;  Region Data :   <span class="success">SUCCESS</span>');
					getCountries( country_list );
				});
			}else{
				setError("regions", 1);
				getCountries( country_list );
			}
		});
	}else{
		region_list = JSON.parse(localStorage.getItem('region_list'));
		if( region_list.length != null ){
			$('#loading-regions').delay(3000,function(){
				$(this).html(' &gt;  Region Data :   <span class="success">SUCCESS</span>');
					getCountries( country_list );
			});
		}else{
			setError("regions", 1);
			getCountries( country_list );
		}
	}
}
// get countries
function getCountries( country_list ){
	if( !country_list ){
		$.getJSON( '../app/clients/json_countries.php', function(data) {
			var getCountries = JSON.stringify(data);
			localStorage.setItem( 'country_list', getCountries );
			country_list = JSON.parse(localStorage.getItem('country_list'));
			if( country_list != null ){
				$('#loading-countries').delay(3000,function(){
					$(this).html(' &gt;  Country Data :   <span class="success">SUCCESS</span>');
					$('#loading-environment').html('<hr><div class="loader">Loading environment...<br>One moment please...</div>');
						setTimeout(function(){
						window.location.href = script_name;
					},1250);
				});
			}else{
				setError("countries", 1);
			}
		});
	}else{
		country_list = JSON.parse(localStorage.getItem('country_list'));
		if( country_list != null ){
			$('#loading-countries').delay(3000,function(){
				$(this).html(' &gt;  Country Data :   <span class="success">SUCCESS</span>');
				$('#loading-environment').html('<hr><div class="loader">Loading environment...<br>One moment please...</div>');
				setTimeout(function(){
					window.location.href = script_name;
				},1250);
			});
		}else{
			setError("countries", 1);
		}
	}
}
