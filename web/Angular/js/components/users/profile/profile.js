angular.module("components")

    .component("userProfile", {

        templateUrl: '/js/components/users/profile/profile.html',

        bindings: {
            user: '<',
        },
        
        controller: function (AuthService) {

            this.$onInit = () => {
                this.currentUser = AuthService.getCurrentUser();
                console.log(this)
            }
        }
    })
