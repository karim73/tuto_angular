<!DOCTYPE html>
   <head>
      <title>Router Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
   </head>
      <script type="text/javascript">
         //'RouteMenu' is a name of the view class
         var Route1 = Backbone.View.extend({

            //Creates the route1 link for the text to be change after triggerring the click event
            template: '<b>This is route 1</b>',

               //The 'initialize' function creates new constructor for the router instantiation
               initialize: function () {
                  this.execute();
               },

               //This is called when a route matches its corresponding callback
               execute: function () {
                  this.$el.html(this.template);
               }
         });
         var Route2 = Backbone.View.extend({
            template: '<b>This is route 2</b>',
               initialize: function () {
                  this.execute();
               },
               execute: function () {
                  this.$el.html(this.template);
               }
        });

        //'AppRouter' is a name of the router class
        var AppRouter = Backbone.Router.extend({
           routes: {
              '': 'homeRoute',
              'route/1': 'homeRoute',
              'route/2': 'aboutRoute',
           },

           //When you click on route1, it will navigate to the custom view class 'Route1'
           homeRoute: function () {
              var route1 = new Route1();
              $("#content").html(route1.el);
           },

           //When you click on route2, it will navigate to the custom view class 'Route2'
           aboutRoute: function () {
              var route2 = new Route2();
              $("#content").html(route2.el);
           }
       });
       var appRouter = new AppRouter();   //It is an instantiation of the router

       //It start listening to the routes and manages the history for bookmarkable URL's
       Backbone.history.start();
     </script>
  <body>
    <div id="navigation">
       <a href="#/route/1">route1</a>
       <a href="#/route/2">route2</a>
    </div>
    <div id="content></div>
  </body>
</html>