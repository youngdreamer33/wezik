angular.module("components")

    .component("answers", {

        templateUrl: '/js/components/questions/answers/answers.html',

        bindings: {
            question: '<',
        },

        controller: function (AnswersService, AuthService) {

            this.$onInit = () => {
                this.isAuthenticated = AuthService.isAuthenticated();
                this.currentUser = AuthService.getCurrentUser();
            }

            this.submit = () => {
                this.postAnswers();
            }

            this.table = [this.answer];
            this.currentPage = 1;
            this.pageSize = 4;

            this.postAnswers = () => {
                this.answer = {
                    content: this.answer.content,
                    userId: this.currentUser.id,
                    questionId: this.question.id,
                    date: new Date(),
                    likes: 0,
                    status: false
                }
                AnswersService.postAnswers(this.answer)
            }

            this.likeQuestion = () => {
                AnswersService.likeQuestion(this.question.id, this.question);
            }
            this.likeAnswer = (answer) => {
                AnswersService.likeAnswer(answer.id, answer);
            }

            this.validateAnswer = (answer) => {
                if (answer.status == false) {
                    answer.status = true;
                    AnswersService.validateAnswer(answer.id, answer);
                    console.log(answer.status)
                }
                else if (answer.status == true) {
                    answer.status = false;
                    AnswersService.validateAnswer(answer.id, answer);
                }
            }

            this.pageChangeHandler = (num) => {
                console.log('quest page changed to ' + num);
            };
        }
    })