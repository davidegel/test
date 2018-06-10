var MyApp = angular.module("MyModule",[]);


MyApp.controller("MyController", function($scope) {
    
    var country = {
        name: "United States of America",
        capital: "Washington, D.C.",
        flag: "foto/flag-us.jpg"
    };

    $scope.country = country;

});


MyApp.controller("ControllerPeople", function($scope) {
      
    var peoples = [
     
        {nome: 'peppe', cognome: 'rossi', eta: 35},
        {nome: 'mario', cognome: 'verdi', eta: 36},
        {nome: 'ciro', cognome: 'ooop', eta: 90},

    ];
     
    $scope.peoples = peoples;

});


MyApp.controller("CityController", function($scope) {
      
    var countries = [
        {
            name: "UK",
            cities: [
                { name: "London" },
                { name: "Birmingham" },
                { name: "Manchester" },
                { pro: [
                    {test: 'test uno'},
                    {test: 'test due'},
                    {test: 'test tre'}
                ]}
            ]
        },
        {
            name: "USA",
            cities: [
                { name: "Los Angeles" },
                { name: "Chicago" },
                { name: "Houston" },
                { name: "Hoaa" },
                { name: "bahtyy" }
            ]
        },
        {
            name: "India",
            cities: [
                { name: "Hyderabad" },
                { name: "Chennai" },
                { name: "Mumbai" }
            ]
        }
    ];

    $scope.countries = countries;

});


MyApp.controller("LikeCrt", function($scope) {
   
    var technologies = [
        { name:"C#", likes:0, dislikes:0 },
        { name: "ASP.NET", likes: 0, dislikes: 0 },
        { name: "SQL", likes: 0, dislikes: 0 },
        { name: "AngularJS", likes: 0, dislikes: 0 }
    ];

    $scope.technologies = technologies;
    
    $scope.incrementLike = function(technology) {

        technology.likes++;

    };
    
    $scope.incrementDsLike = function(technology) {

        technology.dislikes++;

    };

    $scope.decrementLike = function(technology) {

        technology.likes--;

    };

    $scope.reset = function(technology) {

        technology.likes = 0;
        technology.dislikes = 0;

    };

});

