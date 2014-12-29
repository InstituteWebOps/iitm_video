
<!DOCTYPE html>
<html>
<head>
</head>
<?php



$url  = rtrim($_GET['url'],'/');
$url = explode('/', $url);
if($url[0]=='join' && $url[1]){
$room = $url[1];
?>
<body>

  <video height="300" id="localVideo"></video>
  <div id="remotesVideos"></div>
</body>


<script src="/iitm_video/public/js/jquery.js"></script>
<script src="/iitm_video/public/js/simplewebrtc_latest.js"></script>
<script src="/iitm_video/public/js/app.js"></script>
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
  webrtc.joinRoom('<?php $room? $room:'default' ?>');
});

</script>


</html>

<?php
}
else {
  if($url[0]!='' && $url[0]!='index'){
    ?>
<script>
window.location = '/iitm_video/';
</script>
    <?php
  }
  ?>
  <body>
      <input type='text' placeholder='Room Name' id="room" name="room">
      <input type='submit' value='Join' onclick="goToRoom()" id="submit">
  </body>
  <script>
  function goToRoom(){
    var room = document.getElementById('room').value;
    window.location = 'join/'+room;
  };

  </script>

  <?php
}
