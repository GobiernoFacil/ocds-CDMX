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
    ScrollMagic : "bower_components/scrollmagic/scrollmagic/uncompressed/ScrollMagic",
    "ScrollMagic.animation.gsap" : "bower_components/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap",
    timelineMax : "bower_components/gsap/src/minified/TimelineMax.min",
    tweenLite   : "bower_components/gsap/src/minified/TweenLite.min",
    tweenMax    : "bower_components/gsap/src/minified/TweenMax.min",
    splitText   : "bower_components/gsap/src/minified/utils/SplitText.min"
  },
  shim : {
    backbone : {
      deps    : ["jquery", "underscore"],
      exports : "Backbone"
    },
    "ScrollMagic.animation.gsap" : ["ScrollMagic"]
  }
});

 var app;

require(['controller'], function(controller){ 
  app = new controller;
});