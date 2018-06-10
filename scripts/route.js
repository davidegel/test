var appTemplate = angular.module("myTemplate", ["ngRoute"])
                  .config(function ($routeProvider,$locationProvider) { 
                       $routeProvider
                       .when("/home", {
                        templateUrl: "templates/index.html",
                        controller: "homeController"
                    })
                    .when("/courses", {
                        templateUrl: "templates/courses.html",
                        controller: "coursesController"
                    })
                    .when("/students", {
                        templateUrl: "templates/students.html",
                        controller: "studentsController"
                    })
                    .when("/courses/:id", {
                        templateUrl: "templates/studentDetails.html",
                        controller: "coursesDetailsController"
                    })
            
             }).controller("homeController", function ($scope) {
                $scope.message = "Home Page";
            })
            .controller("coursesController", function ($scope, $http) {
                
                $scope.$on("$routeChangeStart", function (event, next, current) {
                    if (!confirm("Are you sure you want to navigate away from this page")) {
                        event.preventDefault();
                    }
                });
            
                this.reloadData = function () {
                    $route.reload();
                }

                $http({
                    url: "http://localhost/mvcCustomAtl/index/stati",
                    method: "get"
                }).then(function (response) {
                    $scope.stati = response.data[0];
                })

            })
            .controller("coursesDetailsController", function ($scope, $http, $routeParams) {
                $http({
                    url: "http://localhost/mvcCustomAtl/index/stati/" + $routeParams.id,
                    method: "get",
                }).then(function (response) {
                    $scope.stati = response.data;
                    //console.log(response.data);
                    
                })
            
            })
             .controller("studentsController", function ($scope, $http) {
                 $http.get("StudentService.asmx/GetAllStudents")
                                        .then(function (response) {
                                            $scope.students = response.data;
                                        })
             });

