<!DOCTYPE html>
   <head>
      <title> Model Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
         <script type="text/javascript">
            MyModel = Backbone.Model.extend({
               initialize: function(){
                   alert('hello');
                  document.write("Welcome to TutorialsPoint..");
               }
            });
            
            var mymodel = new MyModel;
         </script>
   </head>
   <body></body>
</html>