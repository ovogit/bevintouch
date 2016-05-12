define(["backbone", "jquery", "underscore", "router"], function(Backbone, $, _, router){
    var App = {
      Models:      {},
      Views:       {},
      Collections: {}
    }; 

    var Router = Backbone.Router.extend({
      routes: {
        "": "home",
        "inbox": "inbox",
        "notes": "notes",
        "contacts": "contacts",
      },
      initialize: function(){
        console.log('Router Online');
        this.home();
      },
      hidepages: function(){
        $('div.page').hide();
      },
      showpage: function(page){
        console.log("Showing: " + page)
        this.hidepages();
        $('#'+page).show();
      },
      home : function(){
        this.showpage('home-page')
      },
      inbox : function(){
        this.showpage('inbox-page')
      },
      notes : function(){
        this.showpage('notes-page')
      },
      contacts : function(){
        this.showpage('contacts-page')
      }
    });

    App.Views.Days = Backbone.View.extend({
      el: $('.days-wrap'),
     initialize: function(){
       this.hideContent();
       this.thisWeekMonday();

     },
      events: {
        'click .monday' : 'thisWeekMonday',
        'click .tuesday' : 'thisWeekTuesday',
        'click .wednesday' : 'thisWeekWednesday',
        'click .thursday' : 'thisWeekThursday',
        'click .friday' : 'thisWeekFriday',
        'click .saturday' : 'thisWeekSaturday',
        'click .sunday' : 'thisWeekSunday'
      },
      thisWeekMonday: function(){
        this.switchDay('monday');
        this.hideContent();
        $('.mon').show();
      },
      thisWeekTuesday: function() {

        this.switchDay('tuesday');
        this.hideContent();
        $('.tue').show();
      },
      thisWeekWednesday: function() {

        this.switchDay('wednesday');
        this.hideContent();
        $('.wed').show();
      },
      thisWeekThursday: function(){

        this.switchDay('thursday');
        this.hideContent();
        $('.thu').show();
      },
      thisWeekFriday: function(){

        this.switchDay('friday');
        this.hideContent();
        $('.fri').show();
      },
      thisWeekSaturday: function(){

        this.switchDay('saturday');
        this.hideContent();
        $('.sat').show();
      },
      thisWeekSunday: function(){
        this.switchDay('sunday');
        this.hideContent();
        $('.sun').show();
      },
      switchDay: function(day){
        this.removeActive(); 
        $('.'+day).parent().addClass('active');
      },
      hideContent: function(){
        $('.block .mon').hide();
        $('.block .tue').hide();
        $('.block .wed').hide();
        $('.block .thu').hide();
        $('.block .fri').hide();
        $('.block .sat').hide();
        $('.block .sun').hide();
      },
      removeActive: function(){
        $('.days li').removeClass('active');
      }

    });

    App.Views.Main = Backbone.View.extend({
      el: $('body'),
      initialize: function(){
        console.log('app initialized');
        this.router = new Router();
        Backbone.history.start();
      },
      events: {
        // Main Navigation Events
        'click .home-nav a' : 'displayhome',
        'click .notes-nav a'  : 'displaynotes',
        'click .inbox-nav a' : 'displayinbox',
        'click .contacts-nav a' : 'displaycontacts',
        // Sub Navigation Events
        'click .left-nav-li.example a' : 'example',
        'click .left-nav-li.example2 a' : 'example2',
        'click .left-nav-li.example3 a' : 'example3',
        'click .left-nav-li.example4 a' : 'example4'
        // #leftbar
      },
/**************************************************
 * Main navigation
 * ------------------------------------------------
 */
      displayhome: function(){
        this.router.navigate('', true);
      },
      displaynotes: function(){
        this.router.navigate('notes', true);
      },
      displayinbox: function(){
        this.router.navigate('inbox', true);
      },
      displaycontacts: function(){
        this.router.navigate('contacts', true);
      },

/*************************************************gt
 * Sub navigation
 * ------------------------------------------------
 */
      example: function(e){
        this.selectButton('.example');
      },
      example2: function(){
        this.selectButton('.example2');
      },
      example3: function(){
        this.selectButton('.example3');
      },
      example4: function(){
        this.selectButton('.example4');
      },

      currentButton: '',
    
      selectButton: function(button){
        this.currentButton = button;
        $(this.currentButton+'-sublist').slideToggle();
      }
    });

    App.Views.AppButtons = Backbone.View.extend({
      el: $('#appbar'),
      initialize: function(){
        this.showApp('messageboard');
      },
      events: {
        'click .messageboard' : 'messageboard',
        'click .pricingcalculator' : 'pricingcalc',
        'click .calendar' : 'calendar',
        'click .dashboard' : 'dashboard'
      },

      messageboard: function(){ 
        this.showApp('messageboard');
        console.log('test');
      },
      pricingcalc: function(){ 
        this.showApp('pricingcalc');
      },
      calendar: function(){ 
        this.showApp('calendar');
      },
      dashboard: function(){ 
        this.showApp('dashboard');
      },
      hideAll: function(){
        $('#messageboard').hide();
        $('#calendar').hide();
        $('#pricingcalc').hide();
        $('#dashboard').hide();
      },
      showApp: function(app){
         this.hideAll();
         $('#'+app).show();
      },
      
    });
    var mainView = new App.Views.Main;
    var daysView = new App.Views.Days;
    var appbarView = new App.Views.AppButtons;
});
