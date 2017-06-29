angular.module("components")

    .component("player", {

        templateUrl: '/js/components/player/player.html',

        bindings: {
            player: '<',
        },
        
        controller: function ($http, $log, VideosService) {

            this.$onInit = () => {
                // this.currentUser = AuthService.getCurrentUser();
                // console.log(this)
            this.youtube = VideosService.getYoutube();
            $scope.results = VideosService.getResults();
            $scope.upcoming = VideosService.getUpcoming();
            // $scope.history = VideosService.getHistory();
            $scope.savedvideos = VideosService.getSavedVideos();
            $scope.createdplaylist = VideosService.getCreatedPlaylist();
            $scope.playlist = true;
      };

      $scope.launch = function (id, title) {
        VideosService.launchPlayer(id, title);
        // VideosService.archiveVideo(id, title);
        VideosService.deleteVideo($scope.upcoming, id);
        $log.info('Launched id:' + id + ' and title:' + title);
      };

      $scope.save = function (id, title) {
        // VideosService.launchPlayer(id, title);
        VideosService.saveVideo(id, title);
        $log.info('Saved id:' + id + ' and title:' + title);
        $log.info($scope.savedvideos);
      };

      $scope.savePlaylist = function (id) {
        // VideosService.launchPlayer(id, title);
        VideosService.savePlaylist(id);
        $log.info('Playlist saved');
        $log.info($scope.createdplaylist);
      };

      $scope.queue = function (id, title) {
        VideosService.queueVideo(id, title);
        // VideosService.deleteVideo($scope.history, id);
        $log.info('Queued id:' + id + ' and title:' + title);
      };

      $scope.delete = function (list, id) {
        VideosService.deleteVideo(list, id);
      };

      $scope.search = function () {
        $http.get('https://www.googleapis.com/youtube/v3/search', {
          params: {
            key: 'AIzaSyDBbdRnw6LdG0HWzK1WJ12eNtzZSQST-Fo',
            type: 'video',
            maxResults: '8',
            part: 'id,snippet',
            fields: 'items/id,items/snippet/title,items/snippet/description,items/snippet/thumbnails/default,items/snippet/channelTitle',
            q: this.query
          },
        })
        .success( function (data) {
          VideosService.listResults(data);
          $log.info(data);
        })
        .error( function () {
          $log.info('Search error');
        });
      };

      $scope.tabulate = function (state) {
        $scope.playlist = state;
      };