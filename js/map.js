// Set up map and timeline

var tm;
$(function() {
    
    // make a custom map style
    var styledMapType = new google.maps.StyledMapType([

    ], {
        name: "white"
    });


    tm = TimeMap.init({
        mapId: "map",               // Id of map div element (required)
        timelineId: "timeline",     // Id of timeline div element (required)
        scrollTo: "earliest",
        syncBands: false,
        options: {
            eventIconPath: "images/",
            mapTypeId: google.maps.MapTypeId.HYBRID


        },
        datasets: [
            {
	            title: "JSON String Dataset",
	            type: "json_string",
	            options: {
	                url: "load.php"    // Must be a local URL
	            }
        	}
        ],
        bandIntervals: [
            Timeline.DateTime.DECADE, 
            Timeline.DateTime.DECADE
        ]

    });
    
    // set the map to our custom style
    //var gmap = tm.getNativeMap();
    //gmap.mapTypes.set("white", styledMapType);
    //gmap.setMapTypeId("white");

    var map = tm.getNativeMap();

    console.log(tm.timeline);

    map.setOptions({scrollwheel:true});

    $( "#slider" ).slider({
      value:1903,
      min: 1903,
      max: 2050,
      step: 1,
      slide: function( event, ui ) {
        $( "#currentYear" ).text(ui.value );
        d = new Date(ui.value, 0 ,0);

        tm.scrollToDate(d.toISOString(), false, false);
      }
    });

});