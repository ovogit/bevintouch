define(["jquery","underscore","backbone","chart"], function($, _, Backbone, Chart){
return {
  initialize: function() {
      var Chartjs = Chart.noConflict();
      var responsiveOpt = true;

      // Get context with jQuery - using jQuery's .get() method.
      //var ctxLine = $("#myLineChart").get(0).getContext("2d");
      var ctxBar = $("#myBarChart").get(0).getContext("2d");
      var ctxPie = $("#myPieChart").get(0).getContext("2d");

      //var optionsLine = { 
          /////Boolean - Whether grid lines are shown across the chart
          //scaleShowGridLines : true,

          //responsive: responsiveOpt,

          ////String - Colour of the grid lines
          //scaleGridLineColor : "rgba(0,0,0,.05)",

          ////Number - Width of the grid lines
          //scaleGridLineWidth : 1,

          ////Boolean - Whether the line is curved between points
          //bezierCurve : true,

          ////Number - Tension of the bezier curve between points
          //bezierCurveTension : 0.4,

          ////Boolean - Whether to show a dot for each point
          //pointDot : true,

          ////Number - Radius of each point dot in pixels
          //pointDotRadius : 4,

          ////Number - Pixel width of point dot stroke
          //pointDotStrokeWidth : 1,

          ////Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          //pointHitDetectionRadius : 20,

          ////Boolean - Whether to show a stroke for datasets
          //datasetStroke : true,

          ////Number - Pixel width of dataset stroke
          //datasetStrokeWidth : 2,

          ////Boolean - Whether to fill the dataset with a colour
          //datasetFill : true,

          ////String - A legend template
          //legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
      //};
      //var dataLine = {
          //labels: ["January", "February", "March", "April", "May", "June", "July"],
          //datasets: [
              //{
                  //label: "My First dataset",
                  //fillColor: "rgba(220,220,220,0.2)",
                  //strokeColor: "rgba(220,220,220,1)",
                  //pointColor: "rgba(220,220,220,1)",
                  //pointStrokeColor: "#fff",
                  //pointHighlightFill: "#fff",
                  //pointHighlightStroke: "rgba(220,220,220,1)",
                  //data: [65, 59, 80, 81, 56, 55, 40]
              //},
              //{
                  //label: "My Second dataset",
                  //fillColor: "rgba(151,187,205,0.2)",
                  //strokeColor: "rgba(151,187,205,1)",
                  //pointColor: "rgba(151,187,205,1)",
                  //pointStrokeColor: "#fff",
                  //pointHighlightFill: "#fff",
                  //pointHighlightStroke: "rgba(151,187,205,1)",
                  //data: [28, 48, 40, 19, 86, 27, 90]
              //}
          //]
      //};
      var dataBar = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
              {
                  label: "My First dataset",
                  fillColor: "rgba(220,220,220,0.5)",
                  strokeColor: "rgba(220,220,220,0.8)",
                  highlightFill: "rgba(220,220,220,0.75)",
                  highlightStroke: "rgba(220,220,220,1)",
                  data: [65, 59, 80, 81, 56, 55, 40]
              },
              {
                  label: "My Second dataset",
                  fillColor: "rgba(151,187,205,0.5)",
                  strokeColor: "rgba(151,187,205,0.8)",
                  highlightFill: "rgba(151,187,205,0.75)",
                  highlightStroke: "rgba(151,187,205,1)",
                  data: [28, 48, 40, 19, 86, 27, 90]
              }
          ]
      };
      var optionsBar = {
       //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero : true,

          responsive: responsiveOpt,

          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines : true,

          //String - Colour of the grid lines
          scaleGridLineColor : "rgba(0,0,0,.05)",

          //Number - Width of the grid lines
          scaleGridLineWidth : 1,

          //Boolean - If there is a stroke on each bar
          barShowStroke : true,

          //Number - Pixel width of the bar stroke
          barStrokeWidth : 2,

          //Number - Spacing between each of the X value sets
          barValueSpacing : 5,

          //Number - Spacing between data sets within X values
          barDatasetSpacing : 1,

          //String - A legend template
          legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
        
      };
      var dataPie = [
          {
              value: 300,
              color:"#F7464A",
              highlight: "#FF5A5E",
              label: "Red"
          },
          {
              value: 50,
              color: "#46BFBD",
              highlight: "#5AD3D1",
              label: "Green"
          },
          {
              value: 100,
              color: "#FDB45C",
              highlight: "#FFC870",
              label: "Yellow"
          }
      ];
      var optionsPie = {
       //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke : true,

          responsive: responsiveOpt,

          //String - The colour of each segment stroke
          segmentStrokeColor : "#fff",

          //Number - The width of each segment stroke
          segmentStrokeWidth : 2,

          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout : 50, // This is 0 for Pie charts

          //Number - Amount of animation steps
          animationSteps : 100,

          //String - Animation easing effect
          animationEasing : "easeOutBounce",

          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate : true,

          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale : false,

          //String - A legend template
          legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
      };

      //var myLineChart = new Chart(ctxLine).Line(dataLine, optionsLine);
      var myBarChart = new Chart(ctxBar).Bar(dataBar, optionsBar);
      var myPieChart = new Chart(ctxPie).Pie(dataPie, optionsPie);

  } //end initialize

};
});
