		function displayMap(position){

			var centerPos = new google.maps.LatLng(position.coords['latitude'],position.coords['longitude']);
			var optionsGmaps = {
				center: centerPos,
				mapTypeID: google.maps.MapTypeId.ROADMAP,
				zoom: 15
			};
			var map = new google.maps.Map(document.getElementById('map'), optionsGmaps);
			var marker = new google.maps.Marker({ position: centerPos, map: map });
		}

		function displayPosition(position)
		{
			var input ='';
			for(key in position.coords){
				if(position.coords[key])
					input += key+' : '+position.coords[key]+'<br/>';
			}
			
			displayMap(position);
		}

		function displayerr(err){
			var info = 'Erreur lors de la géolocalisation : ';
			switch(err.code){
				case err.TIMEOUT:
					info += 'Timeout !';
					break;
				case err.PERMISSION_DENIED:
					info+= 'Vous n\'avez pas donné la permission';
					break;
				case err.POSITION_UNVAILABLE:
					info+= 'La position n\'a pu être déterminée';
					break;
				default:
					info+= 'Erreur inconnue';
					break;
			}

			if(info){
				alert(info);
			}

		}

		function checkForSpeed(position)
		{
			if(position.coords.speed == null){
				console.log('clearWatch');
				navigator.geolocation.clearWatch(geoloc);
			}
			displayPosition(position);
		}

		if(navigator.geolocation){
			var geoloc = navigator.geolocation.watchPosition(checkForSpeed, displayerr);
		}
		else{
			alert('Votre navigateur ne prend pas en compte la géolocalisation HTML 5.');
		}