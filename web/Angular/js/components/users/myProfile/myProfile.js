angular.module("components")

  .component("myProfile", {

    templateUrl: '/js/components/users/myProfile/myProfile.html',


    controller: ['MyProfileService', 'AuthService', function (MyProfileService, AuthService) {


      this.$onInit = () => {
        this.user = AuthService.getCurrentUser();
        console.log(this.user)
        this.getUser = () => {
          MyProfileService.getUser(this.user.id);
        }
        this.change = {
          "firstname": "",
          "lastname": "",
          "age": "",
          "mail": "",
          "bio":"",
          "social1": "",
          "social2": "",
          "social3": "",
          "mattermost": "",
          "password": "",
          "avatar":"",
          "promoId": this.user.promoId,
          "id": this.user.id,
          "avatar": "" 
        }
      };
      this.modif = () => {
        if (this.change.firstname == "") {
          this.change.firstname = this.user.firstname;
        }
        if (this.change.lastname == "") {
          this.change.lastname = this.user.lastname;
        }
        if (this.change.age == "") {
          this.change.age = this.user.age;
        }
        if (this.change.bio == "") {
          this.change.bio = this.user.bio;
        }
        if (this.change.mail == "") {
          this.change.mail = this.user.mail;
        }
        if (this.change.social1 == "") {
          this.change.social1 = this.user.social1;
        }
        if (this.change.social2 == "") {
          this.change.social2 = this.user.social3;
        }
        if (this.change.social3 == "") {
          this.change.social3 = this.user.social3;
        }
        if (this.change.mattermost == "") {
          this.change.mattermost = this.user.mattermost;
        }
        if (this.change.password == "") {
          this.change.password = this.user.password;
        }
        if (this.change.avatar == "") {
          this.change.avatar = this.user.avatar;
        }
        console.log(this.change)
        MyProfileService.modif(this.user, this.change);
        AuthService.disconnect();

      }


    }]
  })