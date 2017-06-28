angular.module("app")

  .config(function ($stateProvider, $urlRouterProvider) {

    $stateProvider

      .state({
        name: 'home',
        url: '/home',
        component: 'home'
      })
      
      .state({
        name: 'answers',
        url: '/answers/:questionId',
        component: 'answers',
        resolve: {
          question: function (AnswersService, $stateParams) {
            return AnswersService.getQuestion($stateParams.questionId);
          }
        }
      })

      .state({
        name: 'profile',
        url: '/profile/:userId',
        component: 'userProfile',
        authenticate: true,
        resolve: {
          user: function (UserService, $stateParams) {
            return UserService.getUser($stateParams.userId);
          }
        }
      })

      .state({
        name: 'myProfile',
        url: '/myProfile/',
        component: 'myProfile',
        authenticate: true
      })


      .state({
        name: 'usersList',
        url: '/usersList',
        component: 'usersList',
        resolve: {
          users: function (UsersService, $stateParams) {
            return UsersService.getUsers();
          },
        }
      })

       .state({
        name: 'rules',
        url: '/rules',
        component: 'rules',
      })

      .state({
        name: 'registration',
        url: '/registration',
        component: 'registration',
        resolve: {
          redirect: function ($state) {
            return $state.transition._targetState._params.redirect;
          }

        }
      })

      .state({
        name: 'formQ',
        url: '/formQ',
        authenticate: true,
        component: 'postQuestion'
      })

    $urlRouterProvider.otherwise('/home')
  })