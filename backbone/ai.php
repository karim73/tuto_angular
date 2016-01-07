<!DOCTYPE html>
   <head>
      <title> Model Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
         <script type="text/javascript">
            Player = Backbone.Model.extend({
            defaults: {
               p_name: 'sachin',
               country: 'india'
            },
            initialize: function () {
               this.bind("change:p_name", function (model) {
                  var name = model.get("p_name");
                  var ctry = model.get("country");
               });
           }
           });
           var person = new Player();
           document.write("<b>Before changing the name attribute, its value is:</b> "+ person.get("p_name")+" , "+person.get("country") );
           var h = person.set({ p_name: 'dhoni' });
           document.write("<br><b>After changing the name attribute, its value is:</b> "+ person.get("p_name")+" , "+person.get("country") +" "+h);
         </script>
   </head>
   <body></body>
</html>