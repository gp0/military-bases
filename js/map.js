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
            Timeline.DateTime.CENTURY
        ]
    });
    
    // set the map to our custom style
    //var gmap = tm.getNativeMap();
    //gmap.mapTypes.set("white", styledMapType);
    //gmap.setMapTypeId("white");

    var map = tm.getNativeMap();
    map.setOptions({scrollwheel:true});

});