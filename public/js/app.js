var ready = function() {
  function toggleMic(stream) { // stream is your local WebRTC stream
    var audioTracks = stream.getAudioTracks();
    for (var i = 0, l = audioTracks.length; i < l; i++) {
      audioTracks[i].enabled = !audioTracks[i].enabled;
    }
  }


  $("#mic_btn").click(function(){
    if($(this).hasClass('mute')){
      webrtc.unmute();
      $(this).removeClass('mute');
      $(this).html('Mic Off');
    }
    else{
      webrtc.mute();
      $(this).html('Mic On');
      $(this).addClass('mute');
    }
  });

  $("#video_btn").click(function(){
    if($(this).hasClass('pause')){
      webrtc.resumeVideo();
      $(this).removeClass('pause');
      $(this).html('Video Off');
    }
    else{
      webrtc.pauseVideo();
      $(this).html('Video On');
      $(this).addClass('pause');
    }
  });

}

$(document).ready(ready);
