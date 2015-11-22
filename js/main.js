// CDMX - TUTORIAL
// date     : 18/11/2015
// @package : cdmx
// @file    : main.js
// @version : 1.0.0
// @author  : Gobierno fácil <howdy@gobiernofacil.com>
// @url     : http://gobiernofacil.com

require.config({
  baseUrl : "/js",
  paths : {
    jquery      : "bower_components/jquery/dist/jquery.min",
    backbone    : "bower_components/backbone/backbone",
    underscore  : "bower_components/underscore/underscore-min",
    text        : "bower_components/requirejs-text/text",
    scrollMagic : "bower_components/scrollmagic/scrollmagic/minified/ScrollMagic.min",
    timelineMax : "bower_components/gsap/src/minified/TimelineMax.min",
    tweenLite   : "bower_components/gsap/src/minified/TweenLite.min",
    tweenMax    : "bower_components/gsap/src/minified/TweenMax.min"

  },
  shim : {
    backbone : {
      deps    : ["jquery", "underscore"],
      exports : "Backbone"
    }
  }
});

 var app;

require(['controller'], function(controller){ 
  app = new controller;
});