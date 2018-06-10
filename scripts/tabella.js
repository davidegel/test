var customApp = angular.module("myModule",[])
.filter("gender", function () {
    return function (gender) {
        switch (gender) {
            case 1:
                return "Male";
            case 2:
                return "Female";
            case 3:
                return "Not disclosed";
        }
    }
})
.filter('reverse', function() {
    return function(input, uppercase) {
      input = input || '';
      var out = "";
      for (var i = 0; i < input.length; i++) {
        out = input.charAt(i) + out;
      }
      // conditional based on optional argument
      if (uppercase) {
        out = out.toUpperCase();
      }
      return out;
    };
  })
.controller("TabellaDinamica", ['$scope', 'reverseFilter', function($scope, reverseFilter) {

    var employees = [
        {
            name: "Ben", dateOfBirth: new Date("November 23, 1980"),
            gender: 1, salary: 55000.788
        },
        {
            name: "Sara", dateOfBirth: new Date("May 05, 1970"),
            gender: 2, salary: 68000
        },
        {
            name: "Mark", dateOfBirth: new Date("August 15, 1974"),
            gender: 3, salary: 57000
        },
        {
            name: "Pam", dateOfBirth: new Date("October 27, 1979"),
            gender: 1, salary: 53000
        },
        {
            name: "Todd", dateOfBirth: new Date("December 30, 1983"),
            gender: 1, salary: 60000
        }
    ];


    $scope.search = function (item) {
        if ($scope.searchText == undefined) {
            return true;
        }
        else {
            if (item.gender.toLowerCase()
                         .indexOf($scope.searchText.toLowerCase()) != -1 ||
                item.name.toLowerCase()
                         .indexOf($scope.searchText.toLowerCase()) != -1) {
                return true;
            }
        }

        return false;
    };

    $scope.funzioneClik = function(item) {
        var loLo = angular.lowercase(item.name);
        console.log('ciao' + loLo);
        
    };

    $scope.employees = employees;
    $scope.sortColumn;
    $scope.greeting;
    $scope.filteredGreeting = reverseFilter($scope.greeting);

}]);