angular.module("JukeTubeApp")

  .run(function (AuthService, $log, $state, $transitions) {

    var tag = document.createElement('script');
    tag.src = "http://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    // ui-router transitions

    $transitions.onBefore({}, (transition) => {

      // Get the requested route
      var to = transition.to();

      if (to.authenticate && !AuthService.isAuthenticated()) {

        // User isn’t authenticated, redirect to login page
        $log.debug(to.url + ' need authentication');
        
        return transition.router.stateService.target("registration", {
          redirect: to.name
        });
      }
    });

  });