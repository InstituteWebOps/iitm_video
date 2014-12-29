
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <input type='text' placeholder='Room Name'>

  <video height="300" id="localVideo"></video>
  <div id="remotesVideos"></div>
</body>


<script src="public/js/simplewebrtc_latest.js"></script>
<script src="public/js/app.js"></script>
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
  webrtc.joinRoom('<?= $_GET['room']? $_GET['r']:'default' ?>');
});

</script>


</html>
