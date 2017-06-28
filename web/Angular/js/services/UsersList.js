const URL_USERS = "http://localhost:3000/"

angular.module("services")

  .service("UsersService", function ($http, $q) {

    this.getUsers = () => {

      var defer = $q.defer();

      $http.get(URL_USERS + "users/?_expand=promo").then((response) => {
        var users = response.data;

   console.log(users);
        defer.resolve(users);
      }).catch((response) => {
        defer.reject(response.statusText);
      });
      console.log(defer.promise)
      return defer.promise
    }

  })