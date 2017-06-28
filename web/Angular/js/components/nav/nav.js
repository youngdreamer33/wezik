angular.module("components")

    .component("nav",  {

        templateUrl: '/js/components/nav/nav.html',

        bindings:{
            query: '<'
        }, 

        controller: function (navService, AuthService) {

            this.$onInit = () => {
                this.isAuthenticated = AuthService.isAuthenticated();
                this.currentUser = AuthService.getCurrentUser();
                console.log(this.currentUser);
            }   

            this.disconnect = () => {
                AuthService.disconnect();
                this.isAuthenticated = null;
            }

    }
})
    