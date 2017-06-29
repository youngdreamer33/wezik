var app = angular.module("JukeTubeApp", [
    "ui.router",
    "angularUtils.directives.dirPagination",
    "textAngular",
    "components",
    "services",
    "filters",
    "ngCookies"
])
  

app.config( function ($httpProvider) {
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
  });
