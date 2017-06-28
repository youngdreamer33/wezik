angular.module("components")

    .component("registration", {

        templateUrl: '/js/components/users/registration/registration.html',

        bindings: {
            redirect: '<'
        },

        controller: ['RegistrationServices', 'AuthService','$state', function (RegistrationServices, AuthService, $state) {

        this.$onInit = () => {
                this.reg = {
                    firstname: "",
                    lastname: "",
                    age: "",
                    mail: "",
                    social1: "",
                    promoId: 0
                };
                this.alert = [];
                this.promos = [];
                this.promo = null;

                RegistrationServices.getPromos().then((response) => {
                    this.promos = response.data;
                    console.log(this.promos)
                }).catch((err) => { });
            }


            this.$postLink = () => {
                $('select').material_select();
            };

            this.postUser = () => {
                this.alert = [];

                if (this.reg.firstname == "") {
                    this.alert.firstname = "champ obligatoire";
                }
                if (this.reg.lastname == "") {
                    this.alert.lastname = "champ obligatoire";
                }
                if (this.reg.age == "") {
                    this.alert.age = "champ obligatoire";
                }
                if (this.reg.mail == "") {
                    this.alert.mail = "champ obligatoire"
                }
                if (typeof this.promo == "undefined") {
                    this.alert.promo = "champ obligatoire"
                }
                if (this.alert.length === 0) {
                    RegistrationServices.postUsers(this.reg)
                }
                if (this.reg.promoId == 0) {
                    this.alert.promo = "chanp obligatoire"
                } else {
                    RegistrationServices.postUsers(this.reg)
                }
            };

            this.submit = (user) => {

                AuthService.connect(user.email, user.password).then(() => {
                    $state.go(this.redirect ? this.redirect : 'home');
                }).catch(() => {
                    this.errorMessage = `Utilisateur introuvable ou mot de passe invalide`;
                })
            }
        }]
    })