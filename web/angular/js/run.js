angular.module("app")

  .run(function ($log, $state, $transitions) {

    var tag = document.createElement('script');
    tag.src = "http://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    // ui-router transitions

    $transitions.onBefore({}, (transition) => {

      // Get the requested route
      var to = transition.to();
      
    });

  });