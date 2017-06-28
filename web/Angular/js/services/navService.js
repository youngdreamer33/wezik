const URL = "http://localhost:3000/"

angular.module("services")

    .service("navService", function ($http, $q) {

     this.getSearchQuestion = (query) => {

            var defer = $q.defer();

            $http.get(URL + "questions/" + "?q=" + query.then((response) => {

                var searchquestion = response.data;

                $http.get(URL_ANSWER + "answers?questionId=" + id + "&_expand=user").then((response) => {

                    searchquestion.answers = response.data;
                    defer.resolve(searchquestion);

                }).catch((response) => {
                    defer.reject(response.statusText);
                    console.log("No data found..");
                });
            }).catch((response) => {
                defer.reject(response.statusText);
                console.log("No data found..");
            }));

            return defer.promise;
        }});