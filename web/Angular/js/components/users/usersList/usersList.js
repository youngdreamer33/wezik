angular.module("components")

  .component("usersList",{

    templateUrl : "/js/components/users/usersList/usersList.html",

    bindings: {
      users : '<'
    },

    controller : function(){
      $onInit = () =>{
      }
    }
  })