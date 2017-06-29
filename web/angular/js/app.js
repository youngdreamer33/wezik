var app = angular.module("app", [
    "ui.router",
    "angularUtils.directives.dirPagination",
    "textAngular",
    "components",
    "services",
    "ngCookies"
])
  

app.config( function ($httpProvider) {
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
  });
