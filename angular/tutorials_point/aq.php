<html>
   
   <head>
      <title>Angular JS Custom Directives</title>
   </head>
   
   <body>
      <h2>AngularJS Sample Application</h2>
      
      <div ng-app = "mainApp" ng-controller = "StudentController">
         <student name = "Mahesh"></student><br/>
         <student name = "Piyush"></student>
      </div>
		
      <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      
      <script>
         var mainApp = angular.module("mainApp", []);
         
         mainApp.directive('student', function() {
            var directive = {};
            directive.restrict = 'E';
            directive.template = "Student: <b>{{student.name}}</b> , Roll No: <b>{{student.rollno}}</b>";
            
            directive.scope = {
               student : "=name"
            }
            
            directive.compile = function(element, attributes) {
               element.css("border", "1px solid #cccccc");
               
               var linkFunction = function($scope, element, attributes) {
                  element.html("Student: <b>"+$scope.student.name +"</b> , Roll No: <b>"+$scope.student.rollno+"</b><br/>");
                  element.css("background-color", "#ff00ff");
               }
               return linkFunction;
            }
            
            return directive;
         });
         
         mainApp.controller('StudentController', function($scope) {
            $scope.Mahesh = {};
            $scope.Mahesh.name = "Mahesh Parashar";
            $scope.Mahesh.rollno  = 1;

            $scope.Piyush = {};
            $scope.Piyush.name = "Piyush Parashar";
            $scope.Piyush.rollno  = 2;
         });
			
      </script>
      
   </body>
</html>