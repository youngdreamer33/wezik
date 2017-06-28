angular.module("app")

  .service('MyProfileService', function ($q, $http) {

    const URL = "http://localhost:3000/users/"

    this.modif = (id, changes) => {
      return $http.put(URL + id.id, {
        "firstname": changes.firstname,
        "lastname": changes.lastname,
        "age": changes.age,
        "mail": changes.mail,
        "social1": changes.social1,
        "social2": changes.social2,
        "social3": changes.social3,
        "mattermost": changes.mattermost,
        "password": changes.password,
        "promoId":id.promoId,
        "avatar":changes.avatar,
        "bio": changes.bio
      })
    }
  });