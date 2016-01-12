// CDMX - PROVIDER
// @package  : cdmx
// @location : /js/apps/provider
// @file     : controller.js
// @author   : Gobierno fácil <howdy@gobiernofacil.com>
// @url      : http://gobiernofacil.com

define(function(require){

  //
  // L O A D   T H E   A S S E T S   A N D   L I B R A R I E S
  // --------------------------------------------------------------------------------
  //
  var Backbone = require('backbone'),
      d3       = require("d3");
      //data     = require("json!../../data/OCDS-87SD3T-SEFIN-30001105-006-2015.json");
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
    },

    el : "body",

    //
    // S E T U P   S C E N E S
    // --------------------------------------------------------------------------------
    //

    initialize : function(){
      var r1, r2, r3, r4, r5, r6;
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-006-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        r1 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-001-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        r2 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-002-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        r3 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-003-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        r4 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-004-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        r5 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-005-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        r6 = data.releases[0];
      });

      this.contracts = [r1, r2, r3, r4, r5, r6];
    },

    handle_dates : function(str){
      var d = str.slice(0, 10).split("-");
      return new Date(d[0], +d[1]-1, d[2]);
    }
  });

    

  //
  // R E T U R N   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  return controller;
});