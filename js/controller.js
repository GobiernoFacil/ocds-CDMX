// CDMX - HOME
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

  // STEPS
  Planning = document.querySelector(".slide.e-1.planeacion"),
  Bidding  = document.querySelector(".slide.e-2.licitacion"),
  Award    = document.querySelector(".slide.e-2.adjudicacion"),
  Contract = document.querySelector(".slide.e-2.contrato"),
  Implementation = document.querySelector(".slide.e-2.implementacion"),

  // POSIBILITIES
  Viz    = document.querySelector("#tools-visualize"),
  Api    = document.querySelector("#tools-api"),
  Social = document.querySelector("#tools-social");
 

  //
  // I N I T I A L I Z E   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //

  var controller =  Backbone.View.extend({
    events : {
      // NAVIGATION
      "click .cta" : "move_to_second",
      "click #goto-step1" : "move_to_first",
      "click #goto-step2" : "move_to_second",
      "click #goto-step3" : "move_to_third",
      "click #goto-step4" : "move_to_fourth",

      // STANDAR
      "click #link_nav_planeacion"     : "show_planning",
      "click #link_nav_licitacion"     : "show_bidding",
      "click #link_nav_adjudicacion"   : "show_award",
      "click #link_nav_contratacion"   : "show_contract",
      "click #link_nav_implementacion" : "show_implementation",

      // POSIBILITIES
      "click #tools-visualize-btn" : "show_viz",
      "click #tools-api-btn"       : "show_api",
      "click #tools-social-btn"    : "show_social"
    },

    el : "body",

    //
    // S E T U P   S C E N E S
    // --------------------------------------------------------------------------------
    //

    initialize : function(){
      this.hide_stuff();
      this.set_animation_controller();
    },

    set_animation_controller : function(){
      this.animation = new ScrollMagic.Controller();
      this.set_first_scene();
      this.set_second_scene();
      this.set_third_scene();
      this.set_fourth_scene();
    },

    hide_stuff : function(){
      Bidding.style.display = "none";
      Award.style.display = "none";
      Contract.style.display = "none";
      Implementation.style.display = "none";
      Api.style.display = "none";
      Social.style.display = "none";
    },

    set_first_scene : function(){
      var that = this;
      this.scene1 = new ScrollMagic.Scene({
        triggerElement : ".participacion .container",
        duration : 400
      })
      //.setTween(tl)
      //.setPin(".participacion")
      .addTo(this.animation)
      .on("enter", function(e){
        that.enter_first();
      });
    },

    set_second_scene : function(){
      var that = this;
      this.scene2 = new ScrollMagic.Scene({
        triggerElement : ".etapas .container",
        duration : 400,
        offset : -100
      })
      //.setTween(tl)
      //.setPin(".etapas")
      .addTo(this.animation)
      .on("enter", function(e){
        that.enter_second();
      });;
    },

    set_third_scene : function(){
      var that = this;
      this.scene3 = new ScrollMagic.Scene({
        triggerElement : ".win",
        duration : 400,
        offset : 30
      })
      //.setTween(tl)
      //.setPin(".win")
      .addTo(this.animation)
      .on("enter", function(e){
        that.enter_third();
      });;
    },

    set_fourth_scene : function(){
      var that = this;
      this.scene4 = new ScrollMagic.Scene({
        triggerElement : ".tools",
        duration : 400,
        offset : 20
      })
      //.setTween(tl)
      //.setPin(".tools")
      .addTo(this.animation)
      .on("enter", function(e){
        that.enter_fourth();
      });;
    },

    //
    // G E N E R A L   T R A N S I T I O N S
    // --------------------------------------------------------------------------------
    //

    move_to_first : function(e){
      e.preventDefault(); 
      var y = this.scene1.triggerPosition();
      TweenMax.to(window, 1, {scrollTo:{y: y}, ease:Power2.easeOut});
      this.enter_first();
    },

    move_to_second : function(e){
      e.preventDefault(); 
      var y = this.scene2.triggerPosition();
      TweenMax.to(window, 1, {scrollTo:{y: y}, ease:Power2.easeOut});
      this.enter_second();
    },

    move_to_third : function(e){
      e.preventDefault(); 
      var y = this.scene3.triggerPosition();
      TweenMax.to(window, 1, {scrollTo:{y: y}, ease:Power2.easeOut});
      this.enter_third();
    },

    move_to_fourth : function(e){
      e.preventDefault(); 
      var y = this.scene4.triggerPosition();
      TweenMax.to(window, 1, {scrollTo:{y: y}, ease:Power2.easeOut});
      this.enter_fourth();
    },

    enter_first : function(){
      $("#menu_scroll a").removeClass("current");
      $("#goto-step1").addClass("current");
    },

    enter_second : function(){
      $("#menu_scroll a").removeClass("current");
      $("#goto-step2").addClass("current");
    },

    enter_third : function(){
      $("#menu_scroll a").removeClass("current");
      $("#goto-step3").addClass("current");
    },

    enter_fourth : function(){
      $("#menu_scroll a").removeClass("current");
      $("#goto-step4").addClass("current");
    },

    //
    // L O C A L   T R A N S I T I O N S
    // --------------------------------------------------------------------------------
    //

    show_planning : function(e){
      e.preventDefault();
      Planning.style.display       = "block";
      Bidding.style.display        = "none";
      Award.style.display          = "none";
      Contract.style.display       = "none";
      Implementation.style.display = "none";
      $("a.nav_stage").removeClass("current");
      $("#link_nav_planeacion").addClass("current");
    },

    show_bidding : function(e){
      e.preventDefault();
      Planning.style.display       = "none";
      Bidding.style.display        = "block";
      Award.style.display          = "none";
      Contract.style.display       = "none";
      Implementation.style.display = "none";
      $("a.nav_stage").removeClass("current");
      $("#link_nav_licitacion").addClass("current");
    },

    show_award : function(e){
      e.preventDefault();
      Planning.style.display       = "none";
      Bidding.style.display        = "none";
      Award.style.display          = "block";
      Contract.style.display       = "none";
      Implementation.style.display = "none";
      $("a.nav_stage").removeClass("current");
      $("#link_nav_adjudicacion").addClass("current");
    },

    show_contract : function(e){
      e.preventDefault();
      Planning.style.display       = "none";
      Bidding.style.display        = "none";
      Award.style.display          = "none";
      Contract.style.display       = "block";
      Implementation.style.display = "none";
      $("a.nav_stage").removeClass("current");
      $("#link_nav_contratacion").addClass("current");
    },

    show_implementation : function(e){
      e.preventDefault();
      Planning.style.display       = "none";
      Bidding.style.display        = "none";
      Award.style.display          = "none";
      Contract.style.display       = "none";
      Implementation.style.display = "block";
      $("a.nav_stage").removeClass("current");
      $("#link_nav_implementacion").addClass("current");
    },

    show_viz : function(e){
      e.preventDefault();
      Viz.style.display    = "block";
      Api.style.display    = "none";
      Social.style.display = "none";
      $(".tools li a").removeClass("current");
      $("#tools-visualize-btn").addClass("current");
    },

    show_api : function(e){
      e.preventDefault();
      Viz.style.display    = "none";
      Api.style.display    = "block";
      Social.style.display = "none";
      $(".tools li a").removeClass("current");
      $("#tools-api-btn").addClass("current");
    },

    show_social : function(e){
      e.preventDefault();
      Viz.style.display    = "none";
      Api.style.display    = "none";
      Social.style.display = "block";
      $(".tools li a").removeClass("current");
      $("#tools-social-btn").addClass("current");
    }


    /*

    setupScroll : function(){
      var servidor = new TimelineMax({repeat:-1});
      servidor.add(TweenMax.to(document.getElementById("cabeza_servidor"), .8, {rotation: 5, x:2, y:2, transformOrigin:"50% 50%"}));
      servidor.add(TweenMax.to(document.getElementById("cabeza_servidor"), .8, {rotation: 0, x:0, y:0, transformOrigin:"50% 50%"}));
      servidor.add(TweenMax.to(document.getElementById("cabeza_servidor"), .8, {rotation: -5, x:-2, y:2, transformOrigin:"50% 50%"}));
      servidor.add(TweenMax.to(document.getElementById("cabeza_servidor"), .8, {rotation: 0, x:0, y:0, transformOrigin:"50% 50%"}));


      var mySplit = new SplitText("#mini-description-a", {type: "chars, lines, words"}),
          chars   = mySplit.chars,
          tl      = new TimelineMax();
          tl.staggerFrom(chars, 0.8, {opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:Back.easeOut}, 0.005, "+=0");

      $("#mini-description-a").css({
        perspective:400,
        opacity : 1
      });


      var animation = new ScrollMagic.Controller(),
          scene1    = new ScrollMagic.Scene({
            triggerElement : ".etapas",
            duration : 400
          })
          .setTween(tl)
          //.setPin(".etapas")
          .addTo(animation),
          scene2    = new ScrollMagic.Scene({
            triggerElement : ".win",
            duration : 400
          }).setPin(".win").addTo(animation),
          scene3    = new ScrollMagic.Scene({
            triggerElement : ".tools",
            duration : 400
          }).setPin(".tools").addTo(animation);
    },
    */
  });

    

  //
  // R E T U R N   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  return controller;
});