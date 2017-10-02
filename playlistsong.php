<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ASRK PlayList</title>
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap_playlist.css" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">

  <style>

  button#playpausebtn{
	background-image:url("assets/img/playbtn.png");
	background-size: contain;
	width:52px;
	height:44px;
  background-size: 52px 44px;
	background-repeat: no-repeat;
  border-radius: 50%;
  border: none;
  opacity: 0.5;
}

button#playpausebtn:hover{
  opacity: 1;
}

  button#mutebtn{
    background-image: url("assets/img/speakerbtn.png");
    background-repeat: no-repeat;
    background-size: contain;
    background-size: 48px 40px;

    width:52px;
    height:44px;
    border-radius: 50%;
    margin-left: 10%;
    margin-top: -20%;
    border: 2px solid #24AFFF;
    opacity: 0.5;
  }

  button#mutebtn:hover{
    opacity: 1;
  }

  input#seekslider{
  	width:100px;
  }
  input#volumeslider{
  	width: 400px;
  }
  div#timebox{
  	margin: 23px 10px 0px 0px;
  	float:left;
  	width:80px;
  	background:#000;
  	border-bottom:#333 1px solid;
  	text-align:center;
  	color: #09F;
  	font-family: Arial, Helvetica, sans-serif;
  	font-size:11px;
  }
  input[type='range'] {
      -webkit-appearance: none !important;
  	margin:0px;
  	padding:0px;
      background: #00bcd4;
      height:13px;
  	border-bottom:#333 1px solid;
    border-radius: 15px;

  }
  input[type='range']::-ms-fill-lower  {
  	background:#000;
  }
  input[type='range']::-ms-fill-upper  {
  	background:#000;
  }
  input[type='range']::-moz-range-track {
  	border:none;
      background: #000;
  }
  input[type='range']::-webkit-slider-thumb {
      -webkit-appearance: none !important;
      background: radial-gradient(#FFF, white);
      height:11px;
      width:11px;
  	border-radius:100%;
  	cursor:pointer;
  }

  input[type='range']::-moz-range-thumb {
      background: radial-gradient(#FFF, #333);
      height:11px;
      width:11px;
  	border-radius:100%;
  	cursor:pointer;
  }
  input[type='range']::-ms-thumb {
      -webkit-appearance: none !important;
      background: radial-gradient(#FFF, #333);
      height:11px;
      width:11px;
  	border-radius:100%;
  	cursor:pointer;
  }

  #myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}


  #myUL li a {
    border-bottom: 10px solid white;
    margin-top: -1px; /* Prevent double borders */
    padding: 12px;
    text-decoration: none;
    font-size: 16px;
    color: black;
    display: block;
    border-bottom: 3px solid #777;
    margin-right: 10px;
    color: #777;
  }

  #myInput{
    width: 200px;
    height: 25px;
    border-radius: 15px 15px 15px 15px;
    margin-bottom: 10px;
    background-color: #1b1d1c;
    color: white;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  }

    #myInput:focus {
      width: 68%;
  }

  </style>


  <script>
  function initAudioPlayer(){
  	var audio, playbtn, mutebtn, seekslider, volumeslider, seeking=false, seekto, curtimetext, durtimetext, playlist_status, dir, playlist, ext, agent;
  	dir = "assets/audio/";
    playlist = ["Afreen Afreen (DjRaag.Net)","Channa Mereya  Unplugged -(Mr-Jatt.com)","Aashayein(MyMp3Song)","Enna Sona Ok Jaanu -(Mr-Jatt.com)","Gilehriyaan 320 Raag.Me"];
  	playlist_index = 0;
  	ext = ".mp3";
      agent = navigator.userAgent.toLowerCase();
      if(agent.indexOf('firefox') != -1 || agent.indexOf('opera') != -1) {
          ext = ".ogg";
      }
  	// Set object references
  	playbtn = document.getElementById("playpausebtn");
  	mutebtn = document.getElementById("mutebtn");
  	seekslider = document.getElementById("seekslider");
  	volumeslider = document.getElementById("volumeslider");
  	curtimetext = document.getElementById("curtimetext");
  	durtimetext = document.getElementById("durtimetext");
  	playlist_status = document.getElementById("playlist_status");
  	// Audio Object
  	audio = new Audio();
  	audio.src = dir+playlist[0]+ext;
  	audio.loop = false;

  	playlist_status.innerHTML = playlist[playlist_index];
  	// Add Event Handling
  	playbtn.addEventListener("click",playPause);
  	mutebtn.addEventListener("click", mute);
  	seekslider.addEventListener("mousedown", function(event){ seeking=true; seek(event); });
  	seekslider.addEventListener("mousemove", function(event){ seek(event); });
  	seekslider.addEventListener("mouseup",function(){ seeking=false; });
  	volumeslider.addEventListener("mousemove", setvolume);
  	audio.addEventListener("timeupdate", function(){ seektimeupdate(); });
    audio.addEventListener("ended", function(){ switchTrack(); });


  	// Functions
    function switchTrack(){
  		if(playlist_index == (playlist.length - 1)){
  			playlist_index = 0;
  		} else {
  		    playlist_index++;
  		}
  		playlist_status.innerHTML = playlist[playlist_index];
  		audio.src = dir+playlist[playlist_index]+ext;
  	    audio.play();
  	}

    function playPause(){
      if(audio.paused){
          audio.play();
          playbtn.style.backgroundImage = "url(assets/img/pausebtn.ico)";
          playbtn.style.backgroundSize = "55px 45px";
        } else {
          audio.pause();
          playbtn.style.backgroundImage = "url(assets/img/playbtn.png)";
          playbtn.style.backgroundSize = "contain";
          playbtn.style.backgroundSize = "52px 45px";
        }
  }
  	function mute(){
  		if(audio.muted){
  		    audio.muted = false;
  		    mutebtn.style.backgroundImage = "url(assets/img/speakerbtn.png)";
          mutebtn.style.backgroundSize = "contain";
          mutebtn.style.backgroundSize = "48px 40px";
  	    } else {
  		    audio.muted = true;
  		    mutebtn.style.backgroundImage = "url(assets/img/speakermute.png)";
          mutebtn.style.backgroundSize = "contain";
          mutebtn.style.backgroundSize = "48px 40px";
  	    }
  	}

  	function seek(event){
  	    if(seeking){
  		    seekslider.value = event.clientX - seekslider.offsetLeft;
  	        seekto = audio.duration * (seekslider.value / 100);
  	        audio.currentTime = seekto;
  	    }
      }
  	function setvolume(){
  	    audio.volume = volumeslider.value / 100;
      }
  	function seektimeupdate(){
  		var nt = audio.currentTime * (100 / audio.duration);
  		seekslider.value = nt;
  		var curmins = Math.floor(audio.currentTime / 60);
  	    var cursecs = Math.floor(audio.currentTime - curmins * 60);
  	    var durmins = Math.floor(audio.duration / 60);
  	    var dursecs = Math.floor(audio.duration - durmins * 60);
  		if(cursecs < 10){ cursecs = "0"+cursecs; }
  	    if(dursecs < 10){ dursecs = "0"+dursecs; }
  	    if(curmins < 10){ curmins = "0"+curmins; }
  	    if(durmins < 10){ durmins = "0"+durmins; }
  		curtimetext.innerHTML = curmins+":"+cursecs;
  	    durtimetext.innerHTML = durmins+":"+dursecs;
  	}
  }
  window.addEventListener("load", initAudioPlayer);

  </script>


</head>

<body>

  <div class="mainslide">

      <div class="playlistbg">

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="assets/img/logo.png" height="50px" width="200px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">

              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="design-link"><a href="index.php" target="_blank">Home <span class="sr-only">(current)</span></a></li>
                <li class="design-link"><a href="index.php#about">About</a></li>
                <li class="design-link"><a href="#">Artist</a></li>
                <li class="design-link"><a href="#">Trending</a></li>
                <li class="design-link"><a href="index.php#contact">Contact</a></li>
                <li style="margin-right:400px;"></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="title_playlist"><p>Top Hindi Songs Of The 50s</p></div>

      </div><!--background close-->

  </div><!--mainslide close-->

  <div class="sub-container"><!--sub container Open-->


      <div class="row" style="padding-bottom:25px;"></div>
      <div class="row">

        <div class="col-md-4">

          <img src="assets/img/topchart3.jpg" class="bgtitle">

        </div>

        <div class="col-md-2">

          <div class="row"><div class="col-md-3"><p style="color:#EBEEF3;"><b>Artist</b> <span class="text-muted">Various&nbsp;Artists</span></p></div></div>
          <div class="row"><div class="col-md-3"><p style="color:#EBEEF3;">Released <span class="text-muted">2016</span></p></div></div>
          <div class="row"><div class="col-md-3"><p style="color:#EBEEF3;">Genre <span class="text-muted">Acoustic</span></p></div></div>

        </div>

      <div class="col-md-5">

            <div class="form-group form-inline">
                <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search For Songs" title="Find your songs">
                  <span style="position:fixed;right:23%;color:white;margin-top:4px;">Sort By:</span><div class="dropdown" style="margin-top:-38px;px;position:absolute;right:5px;">
                  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Default
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a onclick="sortList()">A-Z</a></li>

                  </ul>
                </div>
            </div>

          <ul id="myUL">

            <li><p class="pl-te"><a href="assets/audio/Afreen Afreen (DjRaag.Net).mp3" download="Afreen Afreen"><span class="glyphicon glyphicon-download" style="color:#00bcd4;"></span>&nbsp;&nbsp;&nbsp;&nbsp;Afreen Afreen</a></p></li>
            <li><p class="pl-te"><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><span class="glyphicon glyphicon-download" style="color:#00bcd4;"></span>&nbsp;&nbsp;&nbsp;&nbsp;Channa Mereya</a></p></li>
            <li><p class="pl-te"><a href="assets/audio/Aashayein(MyMp3Song).mp3" download="Aashayein"><span class="glyphicon glyphicon-download" style="color:#00bcd4;"></span>&nbsp;&nbsp;&nbsp;&nbsp;Aashayein</a></p></li>
            <li><p class="pl-te"><a href="assets/audio/Enna Sona Ok Jaanu -(Mr-Jatt.com).mp3" download="Enna Sona"><span class="glyphicon glyphicon-download" style="color:#00bcd4;"></span>&nbsp;&nbsp;&nbsp;&nbsp;Enna Sona</a></p></li>
            <li><p class="pl-te"><a href="assets/audio/Gilehriyaan 320 Raag.Me.mp3" download="Gilehriyaan"><span class="glyphicon glyphicon-download" style="color:#00bcd4;"></span>&nbsp;&nbsp;&nbsp;&nbsp;Gilehriyaan</a></p></li>

          </ul>

          <script>
          function myFunction() {
              var input, filter, ul, li, a, i;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName("li");
              for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("a")[0];
                  if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      li[i].style.display = "";
                  } else {
                      li[i].style.display = "none";

                  }
              }
          }
          </script>

        <script>
        function sortList() {
          var list, i, switching, b, shouldSwitch;
          list = document.getElementById("myUL");
          switching = true;

          while (switching) {

            switching = false;
            b = list.getElementsByTagName("LI");
            //Loop through all list-items:
            for (i = 0; i < (b.length - 1); i++) {
              //start by saying there should be no switching:
              shouldSwitch = false;

              if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {

                shouldSwitch= true;
                break;
              }
            }
            if (shouldSwitch) {
              b[i].parentNode.insertBefore(b[i + 1], b[i]);
              switching = true;
            }
          }
        }
        </script>





        </div>

        <div class="col-md-1"></div>

      </div><!--row close-->



  </div><!--sub container close-->

  <nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluild">
    <div class="col-md-4" style="padding-top:10px;border-right:3px solid #777;"><img src="assets/img/topchart3.jpg" class="player-img img-rounded"><span style="font-size:12px;color:white;" id="playlist_status"></span></div>
    <div class="col-md-1" style="padding-top:10px;margin-left:12px;"><span id="curtimetext" style="color:white">00:00</span>&nbsp;&nbsp;<span style="color:white;">/</span>&nbsp;&nbsp;<span id="durtimetext" style="color:white">00:00</span></div>
    <div class="col-md-2" style="padding:20px;border-right:3px solid #777;margin-left:12px;"><button id="playpausebtn"></button><button id="mutebtn"></button></div>
    <div class="col-md-2" style="padding-top:10px;margin-left:12px;color:white;">Volume<input id="volumeslider" type="range" min="0" max="100" value="100" step="1" style="position:absolute;left:12px;top:32px;"></div>

  </div>
  <input id="seekslider" type="range" min="0" max="100" value="0" step="1" style="position:absolute;left:35%;top:40%;">
</nav>


  <a href="#" class="back-to-top"><span class="glyphicon glyphicon-menu-up" aria-hidden="true" style="margin-left:3px;"></span></a>

<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/function.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58d9ec72a1c5fb00126d2096&product=inline-share-buttons"></script>



</body>
</html>
