// CDMX - DATA
// @package  : cdmx
// @location : /js
// @file     : controller.js
// @author   : Gobierno fácil <howdy@gobiernofacil.com>
// @url      : http://gobiernofacil.com

define(function(require){

  //
  // L O A D   T H E   A S S E T S   A N D   L I B R A R I E S
  // --------------------------------------------------------------------------------
  //
  var Backbone       = require('backbone'),
      d3             = require("d3"),
      ScrollMagic    = require("ScrollMagic"),
      TweenLite      = require("TweenLite"),
      SplitText      = require("splitText"),
      TweenMax       = require("TweenMax"),
      xxx            = require("ScrollMagic.animation.gsap"),
      ScrollToPlugin = require("ScrollToPlugin"),
      TimelineMax    = require("TimelineMax"),
  //
  // D E F I N E   T H E   S E T U P   V A R I A B L E S
  // --------------------------------------------------------------------------------
  //



  //
  // C A C H E   T H E   C O M M O N   E L E M E N T S
  // --------------------------------------------------------------------------------
  //

  
  ///DATA
  ListContract    	 = document.querySelector("#listar-contratos"),
  AgenciesCatalog    = document.querySelector("#catalogo-dependecias"),
  SuppliersCatalog   = document.querySelector("#catalogo-proveedores"),
  WebService    	 = document.querySelector("#web-contratos");
  
  
 

 

  //
  // I N I T I A L I Z E   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //

  var controller =  Backbone.View.extend({
    events : {
      // NAVIGATION


      // DATA
      "click #btn-listar-contratos" : "show_list",
      "click #btn-dependencias"     : "show_agencies",
      "click #btn-proveedores"      : "show_suppliers",
      "click #btn-web-service"      : "show_webservice",
    },

    el : "body",

    //
    // S E T U P   S C E N E S
    // --------------------------------------------------------------------------------
    //

    initialize : function(){
      this.hide_stuff();
    },


    hide_stuff : function(){
      AgenciesCatalog.style.display = "none";
      SuppliersCatalog.style.display = "none";
      WebService.style.display = "none";
    },




    //
    // L O C A L   T R A N S I T I O N S
    // --------------------------------------------------------------------------------
    //

    show_list : function(e){
      e.preventDefault();
      ListContract.style.display       = "block";
      AgenciesCatalog.style.display      = "none";
      SuppliersCatalog.style.display     = "none";
      WebService.style.display      	 = "none";
      $(".usa_datos a").removeClass("current");
      $('#btn-listar-contratos').addClass("current");
    },

    show_agencies : function(e){
      e.preventDefault();
      ListContract.style.display      	 = "none";
      AgenciesCatalog.style.display      = "block";
      SuppliersCatalog.style.display     = "none";
      WebService.style.display      	 = "none";
      $(".usa_datos a").removeClass("current");
      $('#btn-dependencias').addClass("current");
    },

    show_suppliers : function(e){
      e.preventDefault();
      ListContract.style.display      	 = "none";
      AgenciesCatalog.style.display      = "none";
      SuppliersCatalog.style.display     = "block";
      WebService.style.display      	 = "none";
      $(".usa_datos a").removeClass("current");
      $('#btn-proveedores').addClass("current");
    },	

	show_webservice : function(e){
      e.preventDefault();
      ListContract.style.display      	 = "none";
      AgenciesCatalog.style.display      = "none";
      SuppliersCatalog.style.display     = "none";
      WebService.style.display      	 = "block";
      $(".usa_datos a").removeClass("current");
      $('#btn-web-service').addClass("current");
    },

   
    
  });

    

  //
  // R E T U R N   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  return controller;
});