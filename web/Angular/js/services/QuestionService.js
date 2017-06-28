 const URL_QUEST = "http://localhost:3000/questions/?_expand=user"


angular.module("services")

    .service("QuestionService", function ($http) {

        this.getQuestions = () => {
            return $http.get(URL_QUEST) 
        }     
        
    });

