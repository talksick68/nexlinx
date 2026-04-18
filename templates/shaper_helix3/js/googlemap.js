function initialize() {
var latlng = new google.maps.LatLng(30.5, 71); 
var settings = {
	zoom: 5,
	center: latlng,
	mapTypeControl: true,
	mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	navigationControl: true,
	navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<h1 id="firstHeading" class="firstHeading">Cities</h1>'+
	'<div id="bodyContent">'+
	'<p></p>'+
	'</div>'+
	'</div>';

/*karachi*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/1.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(24.892198,67.049732);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Karachi",
	zIndex: 1});
/*-------------*/	

/*Lahore*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/2.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(31.545186,74.340363);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Lahore",
	zIndex: 3});
/*-------------*/	

/*Islamabad*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/3.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(33.7,73 );

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Islamabad",
	zIndex: 2});
/*-------------*/	

/*Faisalabad*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/4.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(31.408951,73.08345);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Faisalabad",
	zIndex: 2});
/*-------------*/	

/*Multan*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/5.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(30.190189,71.458023);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Multan",
	zIndex: 1});
/*-------------*/	

/*Sialkot*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/6.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(32.497222,74.536111);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Sialkot",
	zIndex: 1});
/*-------------*/	

/*Sargodha*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/7.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(32.079128,72.671753);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Sargodha",
	zIndex: 1});
/*-------------*/	


/*Hyderabad*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/8.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(25.379167,68.368333);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Hyderabad",
	zIndex: 1});
/*-------------*/	

/*Peshawar*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/9.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(34.004299,71.54483);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Peshawar",
	zIndex: 1});
/*-------------*/	

/*Mardan*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/10.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(34.198181,72.044411);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Mardan",
	zIndex: 0});
/*-------------*/	

/*Swat*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/11.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(35.222711,72.425814);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Swat",
	zIndex: 1});
/*-------------*/	

/*Abbottabad*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/12.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(34.146667,73.216389);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Abbottabad",
	zIndex: 1});
/*-------------*/	

/*Hattar*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/13.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(33.585923,72.71415);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Hattar",
	zIndex: 1});
/*-------------*/	

/*Mansehra*/
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var khImage = new google.maps.MarkerImage('../public/images/cities/14.png',
	new google.maps.Size(20,28),
	new google.maps.Point(0,0),
  new google.maps.Point(10,28)
	);
var khPos = new google.maps.LatLng(34.33,73.20);

var khMarker = new google.maps.Marker({
	position: khPos,
	map: map,
	icon: khImage,
	title:"Mansehra",
	zIndex: 0});
/*-------------*/	














}
