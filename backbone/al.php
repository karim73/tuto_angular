<!DOCTYPE html>
   <head>
      <title>Collection Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
   </head>
   <body>
      <script type="text/javascript">
         //The 'Player' is a model name and includes the default values
         var Player = Backbone.Model.extend({
            defaults: {
               c_id:"",
               country: ""
            }
         });

         //The 'PlayersCollection' is a collection instance and model 'Player' is specified by using model property
         var PlayersCollection = Backbone.Collection.extend({
            model: Player
         });

         //The 'country1', 'country2' and 'country3' are instances of the model 'Player'
         var country1 = new Player({c_id:1, country: "australia" });
         var country2 = new Player({c_id:2, country: "england"});
         var country3 = new Player({c_id:3, country: "india"});
         var mycollection = new PlayersCollection();

         //Here, the push() method adds the above models to the collection
         mycollection.push(country1);
         mycollection.push(country2);
         mycollection.push(country3);

         //'length' property defines total number of models in the collection
         document.write('Number of countries added: ' + mycollection.length);
         /*
         _.each(mycollection,function(value,key,list){
             console.log(key);
             console.log(list.models[key].get("country"));
         });
         alert( typeof mycollection );
         */
      </script>
   </body>
</html>