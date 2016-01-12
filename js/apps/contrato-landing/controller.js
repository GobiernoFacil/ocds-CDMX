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
      var r1, r2, r3, r4, r5, r6, that = this;
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-006-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        that.prepare_data(data);
        r1 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-001-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        that.prepare_data(data);
        r2 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-002-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        that.prepare_data(data);
        r3 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-003-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        that.prepare_data(data);
        r4 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-004-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        that.prepare_data(data);
        r5 = data.releases[0];
      });
      d3.json("/js/data/OCDS-87SD3T-SEFIN-30001105-005-2015.json", function(error, data){
        console.log(data);
        console.log(data.releases[0]);
        that.prepare_data(data);
        r6 = data.releases[0];
      });

      this.contracts = [r1, r2, r3, r4, r5, r6];
    },

    prepare_data : function(data){
      var time_list = [],
          container = data.releases[0];

      time_list.push({
        "name" : "publishedDate",
        "type" : "publishedDate",
        "date" : this.handle_dates(data.publishedDate),
        "data" : data
      }, {
        "name" : "releaseDate",
        "type" : "releaseDate", 
        "date" : this.handle_dates(container.date),
        "data" : container
      });

      if(container.awards.length){
        container.awards.forEach(function(award, num){
          var name = "award" + num;

          time_list.push({
            "name" : name,
            "type" : "award",
            "date" : this.handle_dates(award.date),
            "data" : award
          });
        }, this);
      }

      if(container.contracts.length){
        container.contracts.forEach(function(contract, num){
          var name = "contract" + num;
          time_list.push({
            "name" : name,
            "type" : "dateSigned",
            "date" : this.handle_dates(contract.dateSigned),
            "data" : contract,
          },
          {
            "name" : name,
            "type" : "startDate",
            "date" : this.handle_dates(contract.period.startDate),
            "data" : contract
          },
          {
            "name" : name,
            "type" : "endDate",
            "date" : this.handle_dates(contract.period.endDate),
            "data" : contract
          });
        }, this);
      }

      if(container.tender){
        time_list.push({
          "name" : "tender",
          "type" : "tenderPeriodStartDate",
          "date" : this.handle_dates(container.tender.tenderPeriod.startDate),
          "data" : container.tender
        },
        {
          "name" : "tender",
          "type" : "tenderPeriodEndDate",
          "date" : this.handle_dates(container.tender.tenderPeriod.endDate),
          "data" : container.tender
        });
        time_list.push({
          "name" : "tender",
          "type" : "tenderAwardPeriodStartDate",
          "date" : this.handle_dates(container.tender.awardPeriod.startDate),
          "data" : container.tender
        },
        {
          "name" : "tender",
          "type" : "tenderAwardPeriodEndDate",
          "date" : this.handle_dates(container.tender.awardPeriod.endDate),
          "data" : container.tender
        });

        if(container.tender.hasEnquiries){
          time_list.push({
            "name" : "tender",
            "type" : "tenderEnquiryPeriodStartDate",
            "date" : this.handle_dates(container.tender.enquiryPeriod.startDate),
            "data" : container.tender
          },
          {
            "name" : "tender",
            "type" : "tenderEnquiryPeriodEndDate",
            "date" : this.handle_dates(container.tender.enquiryPeriod.endDate),
            "data" : container.tender
          });
        }
      }
      else{
        console.log("no tender", data, container);
      }

      console.log(time_list.sort(function(a,b){
        return a.date - b.date
      }));
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