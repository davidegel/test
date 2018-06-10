var app = angular.module("myModule", []);

app.controller("myController", function ($scope) {

    var technologies = [
        { name:"C#", likes:0, dislikes:0 },
        { name: "ASP.NET", likes: 0, dislikes: 0 },
        { name: "SQL", likes: 0, dislikes: 0 },
        { name: "AngularJS", likes: 0, dislikes: 0 }
    ];

    $scope.technologies = technologies;
    $scope.technologiesView = "views/tecnologyView.html";

    $scope.update = function (technologies) { 
   
        technologies.likes++;
    };

});


app.controller("myRest", function ($scope, $http) {

    $http.get("http://localhost/mvcCustomAtl/index")
    .then(function (response) {
        $scope.utenti = response.data[0].users;
        //console.log(response.data[0].users);
        
    });

});


app.controller("myRestStati", function ($scope, $location, $anchorScroll, $http) {

    $http.get("http://localhost/mvcCustomAtl/index/stati")
    .then(function (response) {
        $scope.stati = response.data[0];
        //console.log(response.data[0][0].nome);
        
    });

    $scope.scrollTo = function (nome) {
        $location.hash(nome);
        $anchorScroll();
    }

});

app.controller("MyInt", function($scope, $http, $timeout){

    $timeout( function(){ 

        $http.get("http://localhost/mvcCustomAtl/index")
        .then(function (response) {
        $scope.utenti = response.data[0].users;

    })}, 3000);

    $http.get("http://localhost/mvcCustomAtl/index")
    .then(function (response) {
        $scope.utenti = response.data[0].users;
        //console.log(response.data[0].users);
        
    });

});


app.controller("myString", function ($scope, stringService) {

        $scope.transformString = function (input) { 

        $scope.output = stringService.processString(input);

     };

});



app.controller("myServizio", function ($scope, emailService) {
    
    $scope.emailV = function (input) { 
    
    var tipo;

    if (input == "email") {
        tipo = emailService.verificaEmail(input); 
    }else {
        tipo = emailService.verificaAccount(input);
    }
    
    $scope.output = tipo; 

 };

});