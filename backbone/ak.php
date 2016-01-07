<!DOCTYPE html>
   <head>
      <title>Model Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
   </head>
   <body>
	<script type="text/javascript">

   		var Person = Backbone.Model.extend({
        	defaults: {
            	name: 'john',
            	age: 25,
            	occupation: 'working'
          	},
          	initialize : function(){
              	this.on("invalid",function(model,error){
                  	document.write(JSON.stringify(model)+" : "+error);
                });
         	},
         	validate: function(attributes) {
            	if ( attributes.age < 25 ) {
                	return 'please enter the correct age!!! ';
             	}

	        	if ( ! attributes.name ) {
    	        	return 'please enter the name!!!';
        	   	}
         	},
   		});
      
   		var person = new Person();

   		person.on('invalid', function() {
   	   		this.arguments;
   		});

   		person.set({ age : '20' }, { validate : true });
   </script>
   </body>
</html>