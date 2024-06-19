var audioPlayer = document.getElementById('audio-player');
    var playBtn1 = document.getElementById('play-btn1');
    var playBtn2 = document.getElementById('play-btn2');

    playBtn1.addEventListener('click', function () {
      togglePlay();
    });

    playBtn2.addEventListener('click', function () {
      togglePlay();
    });

    function togglePlay() {
      if (audioPlayer.paused) {
        audioPlayer.play();
        $('.play-btn').addClass('pause');

      } else {
        audioPlayer.pause();
        $('.play-btn').removeClass('pause');
      }
    }

