angular.module("app")

  .config(function ($stateProvider, $urlRouterProvider) {

    $stateProvider

      .state({
        name: 'main',
        url: '/main',
        component: 'main'
      })

      .state({
        name: 'home',
        url: '/home',
        component: 'home'
      })

      .state({
        name: 'about',
        url: '/about',
        component: 'about'
      })
      
      .state({
        name: 'blog',
        url: '/blog',
        component: 'blog'
      })

      .state({
        name: 'ourteam',
        url: '/team',
        component: 'team'
      })


      // .state({
      //   name: 'player',
      //   url: '/player',
      //   component: 'player',
      //   resolve: {
      //     question: function (AnswersService, $stateParams) {
      //       return AnswersService.getQuestion($stateParams.questionId);
      //     }
      //   }
      // })

      // .state({
      //   name: 'profile',
      //   url: '/profile/:userId',
      //   component: 'userProfile',
      //   authenticate: true,
      //   resolve: {
      //     user: function (UserService, $stateParams) {
      //       return UserService.getUser($stateParams.userId);
      //     }
      //   }
      // })

      // .state({
      //   name: 'myProfile',
      //   url: '/myProfile/',
      //   component: 'myProfile',
      //   authenticate: true
      // })


      // .state({
      //   name: 'usersList',
      //   url: '/usersList',
      //   component: 'usersList',
      //   resolve: {
      //     users: function (UsersService, $stateParams) {
      //       return UsersService.getUsers();
      //     },
      //   }
      // })

      //  .state({
      //   name: 'rules',
      //   url: '/rules',
      //   component: 'rules',
      // })

      // .state({
      //   name: 'registration',
      //   url: '/registration',
      //   component: 'registration',
      //   resolve: {
      //     redirect: function ($state) {
      //       return $state.transition._targetState._params.redirect;
      //     }

      //   }
      // })

      // .state({
      //   name: 'formQ',
      //   url: '/formQ',
      //   authenticate: true,
      //   component: 'postQuestion'
      // })

    $urlRouterProvider.otherwise('/home')
  })