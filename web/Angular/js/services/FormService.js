const API_URL = "http://localhost:3000/questions"

angular.module("services")

.service('formService', ['$http', function ($http) {
    
    this.valide = (questions) => {
        $http.post(API_URL, questions)
        .then((response) => {
            var data = response.data;
        });
    }
}]);

