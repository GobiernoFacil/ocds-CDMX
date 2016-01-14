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
      d3       = require("d3"),
      TenderLinkLI    = require("text!templates/nav-li-tender.html"),
      AwardsLinkLI    = require("text!templates/nav-li-awards.html"),
      AwardLinkLI     = require("text!templates/nav-li-award.html"),
      ContractsLinkLI = require("text!templates/nav-li-contracts.html"),
      ContractView    = require("views/contract_nav_view"),
      TenderView      = require("views/tender_view"),
  //
  // D E F I N E   T H E   S E T U P   V A R I A B L E S
  // --------------------------------------------------------------------------------
  //



  //
  // C A C H E   T H E   C O M M O N   E L E M E N T S
  // --------------------------------------------------------------------------------
  //
  Timeline       = document.querySelector(".timeline"),
  PlanningLink   = document.querySelector("#planning-link"),
  StuffContainer = document.querySelector("#here-goes-the-stuff"),
  TenderLink     = null;

 

  //
  // I N I T I A L I Z E   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //

  var controller =  Backbone.View.extend({
    events : {
    },

    el : "body",

    tenderLinkLI : _.template(TenderLinkLI),
    awardsLinkLI : _.template(AwardsLinkLI),
    awardLinkLI  : _.template(AwardLinkLI),
    contractsLinkLI : _.template(ContractsLinkLI),

    //
    // I N I T I A L I Z E   T H E   A P P
    // --------------------------------------------------------------------------------
    //

    initialize : function(){
      var that = this;
      d3.json("/js/data/OCDS-87SD3T-SEFIN-DRM-AD-CC-008-2015.json", function(error, data){
        that.data = data;
        that.time_list = that.prepare_data(data);
        that.enable_navigation(that.time_list);
      });
    },

    show_tender : function(){
      StuffContainer.html = "";
      var tender = new TenderView({
        controller : this,
        data       : this.data,
        time_list  : this.time_list
      });
      
      $(StuffContainer).append(tender.render().el);
    },

    // [ MAKE THE NAVIGATION ]
    //
    //
    //
    enable_navigation : function(time_list){
      // [1] SET INITIAL DATE 
      var initialDate = _.findWhere(time_list, {name : "publishedDate"}),
          tender      = _.findWhere(time_list, {name : "tender"}),
          awards      = _.where(time_list, {type : "award"}),
          contracts   = _.where(time_list, {type : "dateSigned"});
      $(PlanningLink).attr("data-date", this.get_date_label(initialDate.date));

      // [2] SET TENDER DATE
      if(tender){
        var date = {date : this.get_date_label(tender.date)};
        $(Timeline).prepend(this.tenderLinkLI(date));
      }

      // [3] SET AWARDS DATE AND AWARDS LIST
      if(awards.length){
        $(Timeline).prepend(this.awardsLinkLI());
        awards.forEach(function(award, pos){
          var d = {date : this.get_date_label(award.date), i : pos};
          $("#awards-link + ul").prepend(this.awardLinkLI(d));
        }, this);
      }

      // [4] SET CONTRACTS DATE AND CONTRACTS LIST
      if(contracts.length){
        $(Timeline).prepend(this.contractsLinkLI());
        contracts.forEach(function(contract, pos){
          var li = new ContractView({
            label_date : this.get_date_label(contract.date),
            num        : pos,
            data       : contract,
            controller : this
          });
          $("#contracts-link + ul").prepend(li.render().el);
        }, this);
      }
    },

    // [ HANDLE DATEDIFFS ] 
    //
    //
    //
    get_date_label : function(date){
      if(!date) {
        return "sin definir";
      }
      var today = new Date(),
          diff  = today - date,
          days  = Math.floor(diff /(1000*60*60*24)),
          months = Math.floor(days/30),
          label;

      if(days < 1){
        label = "hoy";
      }
      else if(days < 2){
        label = "ayer";
      }

      else if(days < 31){
        label = "hace " + days + " días";
      }

      else if(months < 2){
        label = "hace un mes";
      }
      else if(months < 12){
        label = "hace " + months + " meses";
      }
      else{
        label = "hace un año o más";
      }

      return label;
    },

    // [ PARSE THE SERVER DATES ]
    //
    //
    //
    handle_dates : function(str){
      if(!str){ return null;}
      var d = str.slice(0, 10).split("-");
      return new Date(d[0], +d[1]-1, d[2]);
    },

    // [ MAKE AN ARRAY WITH DATA, ORDERED BY DATE ]
    // 
    //
    //
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

      time_list.sort(function(a,b){
        return b.date - a.date
      });

      return time_list;
    }
  });

    

  //
  // R E T U R N   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  return controller;
});