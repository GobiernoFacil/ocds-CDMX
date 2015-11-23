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
  var Backbone    = require('backbone'),
      ScrollMagic = require("ScrollMagic"),
      TweenLite   = require("tweenLite"),
      SplitText   = require("splitText"),
      TweenMax    = require("tweenMax"),
      xxx      = require("ScrollMagic.animation.gsap"),
      TimelineMax = require("timelineMax");
  //
  // D E F I N E   T H E   S E T U P   V A R I A B L E S
  // --------------------------------------------------------------------------------
  //



  //
  // C A C H E   T H E   C O M M O N   E L E M E N T S
  // --------------------------------------------------------------------------------
  //

 

  //
  // I N I T I A L I Z E   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //

  var controller =  Backbone.View.extend({
    events : {
      "click #link_nav_planeacion"     : "show_planeacion",
      "click #link_nav_licitacion"     : "show_licitacion",
      "click #link_nav_adjudicacion"   : "show_adjudicacion",
      "click #link_nav_contratacion"   : "show_contratacion",
      "click #link_nav_implementacion" : "show_implementacion"
    },
    el : "body",
    initialize : function(){
      this.setupScroll();
    },

    setupScroll : function(){

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

    animate_text : function(){
      
    },

    //
    show_planeacion : function(e){
      e.preventDefault();
      this.animate_text();
    },

    show_licitacion : function(e){
    },

    show_adjudicacion : function(e){
    },

    show_contratacion : function(e){
    },

    show_implementacion : function(e){
    }
  });

    

  //
  // R E T U R N   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  return controller;
});