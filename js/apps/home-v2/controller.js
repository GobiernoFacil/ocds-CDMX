// PROMÉXICO - STATISTICS
// @package  : promexico
// @location : /js/apps/statistics
// @file     : companies_controller.js
// @author   : Gobierno fácil <howdy@gobiernofacil.com>
// @url      : http://gobiernofacil.com

define(function(require){

  //
  // L O A D   T H E   A S S E T S   A N D   L I B R A R I E S
  // --------------------------------------------------------------------------------
  //
  var Backbone  = require('backbone'),
      d3        = require("d3"),
     
      Treemap   = require("views/treemap_view"), 
    
      TooltipA  = require("text!templates/tooltip_a.html"),
      TooltipB  = require("text!templates/tooltip_b.html"),
      Employees = DATA.employees,
     

  //
  // C A C H E   T H E   C O M M O N   E L E M E N T S
  // --------------------------------------------------------------------------------
  //
    
    // CONTAINERS
    StateMap     = document.querySelector("#providers-by-state-container");
    
  //
  // I N I T I A L I Z E   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  var controller = Backbone.View.extend({
    
    //
    // [ DEFINE THE EVENTS ]
    //
    events :{

    },

    //
    // [ DEFINE THE TEMPLATES ]
    //
    tooltip_a : _.template(TooltipA),
    tooltip_b : _.template(TooltipB),

    // 
    // [ SET THE CONTAINER ]
    //
    //
    el : 'body',

    //
    // [ THE INITIALIZE FUNCTION ]
    //
    //
    initialize : function(){
    

      // BY EMPLOYEES
      var employees_data = this.set_employees_data();
      this.employees_graph = new Treemap({
        controller : this,
        data       : employees_data,
        el         : "#companies-by-employes",
        _url       : "/promexico/estadisticas/lista/numero-de-empleados/",
        _selector  : "employes_num"
      });
    },
  


    //
    //
    //
    set_employees_data : function(){
      this.employees = new Backbone.Collection(Employees);
      var data = [
        {
          name  : "1-10",
          employes_num : 10,
          value : this.employees.findWhere({employes_num : 10}).get("total")
        },
        {
          name  : "11-50",
          employes_num : 50,
          value : this.employees.findWhere({employes_num : 50}).get("total")
        },
        {
          name  : "51-250",
          employes_num : 250,
          value : this.employees.findWhere({employes_num : 250}).get("total")
        },
        {
          name         : "250+",
          employes_num : 251,
          value        : this.employees.findWhere({employes_num : 251}).get("total")
        }
      ];

      return data;
    },

    

    //
    // [ TOOLTIP FOR TIME LINES ]
    //
    //
    create_tooltip : function(data){
      var el = $(this.tooltip_a(data));
      el.css({
        left : d3.event.pageX + "px",
        top  : d3.event.pageY + "px"
      });

      this.$el.append(el);
    },

    //
    //
    //
    create_tooltip_b : function(data){
      var el = $(this.tooltip_b(data));
      el.css({
        left : d3.event.pageX + "px",
        top  : d3.event.pageY + "px",
        position: "absolute"
      });

      this.$el.append(el);
    },

    remove_tooltip : function(){
      $(".tooltip-container").remove();
    },

  });

  //
  // R E T U R N   T H E   B A C K B O N E   " C O N T R O L L E R "
  // --------------------------------------------------------------------------------
  //
  return controller;
});