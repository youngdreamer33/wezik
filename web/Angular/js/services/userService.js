const URL_USER = "http://localhost:3000/";

angular.module("services")

    .service("UserService", function ($http, $q) {

        this.getUser = (id) => {

            var defer = $q.defer();

            $http.get(URL_USER + "users/" + id + "?_expand=promo").then((response) => {

                var user = response.data;
                console.log(user)


                $http.get(URL_USER + "schools?id=" + user.promo.schoolId).then((response) => {
                    user.school = response.data;
                    defer.resolve(user);
                }).catch((response) => {
                    defer.reject(response.statusText);
                });

            }).catch((response) => {
                defer.reject(response.statusText);
            });

            return defer.promise;
        }
    })

