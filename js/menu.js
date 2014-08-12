// menu related code lives here
$(function() {

    var itemIncomplete = function(item) {
        return !item.opts.complete;
    };

    $("#allBases").click(function() {
        tm.removeFilter("map", itemIncomplete);
        tm.removeFilter("timeline", itemIncomplete);
        tm.filter('map');
        tm.filter('timeline');
        tm.scrollToDate("earliest");
    });

    $("#incompleteBases").click(function() {
        tm.addFilter("map", itemIncomplete);
        tm.addFilter("timeline", itemIncomplete);
        tm.filter('map');
        tm.filter('timeline');

        //hackish, as incomplete date is defined as latest (2014)
        //tm.scrollToDate("earliest");
    });
});