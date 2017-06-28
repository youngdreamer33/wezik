angular.module("filters",[])

.filter('tagsFilter', function() {
  
  return function (questions,query) {
    
    if (query == "" || query == undefined){
      return questions;
    }
    
    var search = query.toUpperCase().split(' ');
    var filtered = [];
    
    for (var i = 0; i < questions.length; i++) {
      var question = questions[i];
      var title =  question.title.toUpperCase();
      
      for (var j = 0; j < search.length; j++){
        var item = search[j];

        if ((title.indexOf(item) > -1) || (question.tags.find((tag) => tag === item))){
          filtered.push(question);
          break;
        } 

      }
    }
    
    return filtered
  }
});