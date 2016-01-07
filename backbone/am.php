<!DOCTYPE html>
   <head>
      <title>Collection Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
   </head>
   <body>
      <script type="text/javascript">
         //'Players' is a model name and containa default values
         var Players = Backbone.Model.extend({
            defaults: {
               id:"",
               name: "",
               country:""
            }
         });

         //The 'PlayersCollection' is an instance of the collection
         var PlayersCollection = Backbone.Collection.extend({
            model: Players   //The model 'Players' is specified by overriding the "model" property of the collection
         });
         $(function(){
            var mycollection = new PlayersCollection();

            // The set() method to sets the values for 'id', 'name' and 'country' attributes, specified in the model "Players"
            mycollection.set([
                              	{id:1, name: 'dhoni', country:'india'},
  	          					{id:2, name:'gayle', country:'west indies'},
	          					{id:3, name: 'maxwell', country:'australia'},
	          					{id:4, name: 'duminy', country:'south africa'}
            			]);

            document.write('Number of countries added: ' + mycollection.length+"<br/>");	
            // The findWhere() method finds the model containing with the id '1'
            var res=mycollection.findWhere({country:"australia"});

            //Display the result in  the JSON format
            document.write("The values of matched attribute are: ",JSON.stringify(res));
         });
      </script>
   </body>
</html>