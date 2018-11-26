var chart_labels = [
    {label: "Änderbar durch CSS/JS"},
    {label: "Wenige HTTP-Requests"},
    {label: "Cachebar"},
    {label: "Browsersupport"},
    {label: "Einfach zu benutzen"},
];


var options = {
    series:{
        spider: {
            active: true,
            highlight: {
                mode: "area"
            },
            legs: {
                data: chart_labels,
                legScaleMax: 1,
                legScaleMin: 0.6,
            },
            legMin: 0,
            legMax: 10,
            spiderSize: 0.5,
            scaleMode: "static",
            connection: { width: 2 },
            pointSize: 5,
            lineWidth: 1,
            legValues: true,
        }
    },
    grid: {
        hoverable: true,
        clickable: true,
        tickColor: "rgba(255,0,0,0.2)",
        mode: "spider"
    }
};

$('.radar').each(function() {
    var data_points = $(this).data('chart');
    //var chart_data = {};
    //chart_data['data'] = data_points;

    // for (var i = 0; i < data_points.length; i++) {
    //     chart_data['data'].push([0, data_points[i]]);
    // }

    //chart_data['color'] = "#FF7500";
    //chart_data['spider'] = {show: true};
    var chart_data = [{
        color: "#FF7500",
        data: [],
        spider: {show: true}
    }];

    for (var i = 0; i < data_points.length; i++) {
         chart_data[0]['data'].push([0, data_points[i]]);
     }

    //console.log(JSON.stringify(chart_data));
    var p = $.plot($(this), chart_data, options);
});