angular.module("components")

    .component("home", {

        templateUrl: '/js/components/questions/home/home.html',

        bindings: {
            quest: '<',
        },

        controller: ['QuestionService', 'AuthService', 'AnswersService', function (QuestionService, AuthService, AnswersService) {



            this.$onInit = () => {
                this.quest = [];
                this.currentPage = 1;
                this.pageSize = 5;
                this.getQuest();
                this.pageChangeHandler();
                console.log(this)
            };
            this.isAuthenticated = AuthService.isAuthenticated();

            this.getQuest = () => {
                QuestionService.getQuestions().then((items) => {
                    this.quest = items.data
                }).catch((err) => { });
            };

            this.likeQuestion = (question) => {
                AnswersService.likeQuestion(question.id, question);
            }

            this.disconnect = () => {
                AuthService.disconnect();
                this.isAuthenticated = null;
            }

            this.pageChangeHandler = (num) => {
                console.log('quest page changed to ' + num);
            };
        }]
    })
