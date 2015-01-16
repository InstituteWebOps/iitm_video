<?php require 'views/header.php'; ?>
<script src="/iitm_video/public/js/simplewebrtc_latest.js"></script>





  <video id="localVideo"></video>
  <div id="remote">
  <div id="remotesVideos"></div>
</div>
<div class="action_bar">
<button id="mic_btn" class="btn btn-primary ">Mic Off</button>
<button id="video_btn" class="btn btn-primary ">Video Off</button>
</div>
<script>
var webrtc = new SimpleWebRTC({
  // the id/element dom element that will hold "our" video
  localVideoEl: 'localVideo',
  // the id/element dom element that will hold remote videos
  remoteVideosEl: 'remotesVideos',
  // immediately ask for camera access
  autoRequestMedia: true
});



// we have to wait until it's ready
webrtc.on('readyToCall', function () {
  // you can name it anything
  webrtc.joinRoom('<?= $_GET['room']? $_GET['room']:'default' ?>');
});

</script>


<?php require 'views/footer.php'; ?>
