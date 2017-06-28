const URL_ANSWER = "http://localhost:3000/"

angular.module("services")

    .service("AnswersService", function ($http, $q) {

        this.getQuestion = (id) => {

            var defer = $q.defer();

            this.postAnswers = (answer) => {
                return $http.post(URL_ANSWER + "answers", answer)
            }

            $http.get(URL_ANSWER + "questions/" + id + "?_expand=user").then((response) => {

                var question = response.data;

                $http.get(URL_ANSWER + "answers?questionId=" + id + "&_expand=user").then((response) => {

                    question.answers = response.data;
                    defer.resolve(question);

                }).catch((response) => {
                    defer.reject(response.statusText);
                });
            }).catch((response) => {
                defer.reject(response.statusText);
            });

            return defer.promise;
        }

        this.likeQuestion = (id, question) => {
            $http.put(URL_ANSWER + "questions/" + id, { "title": question.title, "date": question.date, "content": question.content, "userId": question.userId, "likes": question.likes + 1 })
        }

        this.likeAnswer = (id, answer) => {
            $http.put(URL_ANSWER + "answers/" + id, { "date": answer.date, "content": answer.content, "userId": answer.userId, "questionId": answer.questionId, "likes": answer.likes + 1, "status": answer.status })
        }

        this.validateAnswer = (id, answer) => {
            $http.put(URL_ANSWER + "answers/" + id, { "date": answer.date, "content": answer.content, "userId": answer.userId, "questionId": answer.questionId, "likes": answer.likes, "status": answer.status })
        }
    });