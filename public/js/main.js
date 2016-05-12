require.config({
  paths: {
    'jquery': 'vendor/jquery/dist/jquery',
    'chart': 'vendor/chartjs/Chart',
    'underscore': 'vendor/underscore-amd/underscore',
    'backbone': 'vendor/backbone-amd/backbone',
    'modernizr': 'vendor/modernizr/modernizr',
    'bootstrap': 'vendor/bootstrap/dist/js/bootstrap',
    'charts':'charts'
  },
  shim: {
    'bootstrap' : {
      deps: ['jquery']
    }
  }
});
require(['jquery','backbone','underscore','bootstrap','modernizr','chart','charts','router','app'], function($, Backbone, _, bootstrap, modernizr, Chart, charts, router, app) {

  //charts.initialize();

  $('a').click(function( event ) {
    event.preventDefault();
  });


});
