const URL_REG = "http://localhost:3000/"

angular.module("services")

    .service("RegistrationServices", function ($http) {

        this.postUsers = (reg) => {
            return $http.post(URL_REG + "users", reg)
        }

        this.getPromos = () => {
            return $http.get(URL_REG + "promos?_expand=school")
        }

    })