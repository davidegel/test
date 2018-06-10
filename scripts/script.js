var app = angular
        .module("myModule", [])
        .filter('gender', function () { 

             return function(gender) {

                  switch (gender) {
                      case 1:
                          return "MALE";
                          break;
                  
                      case 2:
                          return "FEMALE";
                          break;

                      default:
                          return "not items";
                          break;
                  }

             }

         })
        .controller("myController", function ($scope) {

            var employees = [
                { name: "Ben", gender: 1, salary: 55000 },
                { name: "Sara", gender:2, salary: 68000 },
                { name: "Mark", gender: 1, salary: 57000 },
                { name: "Pam", gender:  2, salary: 53000 },
                { name: "Todd", gender: 3, salary: 60000 }
            ];

            $scope.employees = employees;
            $scope.employeeView = "views/EmployeeList.html";
        });