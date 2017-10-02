<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ASRK Music</title>
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
</head>

<body class="animated zoomIn">

        <div class="mainslide">

            <div class="slide1bg" style="background-image: url('assets/img/bghome.jpg');">

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
                    <li class="active design-link"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li class="design-link"><a href="#about">About</a></li>
                    <li class="design-link"><a href="#">Artist</a></li>
                    <li class="design-link"><a href="#">Trending</a></li>
                    <li class="design-link"><a href="#contact">Contact</a></li>
                    <li class="design-link hidden-sm hidden-xs" style="margin-left:12px;">Contact</li>
                    <?php if (isset($_SESSION['name'])) { } else { ?><li><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();" style="position:absolute;right:25px;top:15px;"></div></li>
                      <?php } ?>
                    <li style="margin-right:380px;"></li>
                  </ul>
                  <div style="position:absolute;right:25px;top:12px;"><button class="btn btn-primary hidden-xs"><span class="glyphicon glyphicon-user" style="font-size:0.9em;"></span>&nbsp;<b></b> <?php if (isset($_SESSION['name'])) { echo $_SESSION['name']; } ?></button></div>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

              <div class="window">
              <div class="logo" style="background-image: url('assets/img/.jpg');"><p class="jingle1"><strong>EM</strong><span style="color:#F44336;"><small>POWER</small></span></p> <p class="jingle2">Your Music</p>  </div>

            </div> <!--Window close-->

          </div>  <!--slide1bg close-->

        </div>  <!--mainslide class-->

        <nav class="navbar navbar-default" data-spy="affix" data-offset-top="650">
          <div class="sharethis-inline-share-buttons"></div>
        </nav>


    <div class="container"><!--Top chart container open -->

      <div class="row">
        <div class="col-md-3"></div><div class="col-md-6" style="font-size:40px;text-align:center;">TOP CHARTS</div><div class="col-md-3"></div>
      </div>

      <div class="row" style="padding-top:40px;">

        <div class="col-md-3">
          <div class="card-list" id="tc1">
              <img src="assets/img/topchart1.jpg" alt="Bollyword top 50" style="width:100%;height:200px;">
              <div class="card-body">
                <h4><b><a href="playlistsong.php" style="text-decoration:none;">Bollyword Top 50</a></b></h4>
              </div>
              </div>
        </div>

        <div class="col-md-3">
          <div class="card-list" id="tc2">
              <img src="assets/img/topchart2.jpg" alt="Bollyword top 50" style="width:100%;height:200px;">
              <div class="card-body">
                <h4><b><a href="playlistsong.php" style="text-decoration:none;">Bollyword Party Top 50</a></b></h4>
              </div>
              </div>
        </div>

        <div class="col-md-3">
          <div class="card-list" id="tc3">
              <img src="assets/img/topchart3.jpg" alt="Bollyword top 50" style="width:100%;height:200px;">
              <div class="card-body">
                <h4><b><a href="playlistsong.php" style="text-decoration:none;">Top Hindi Songs 50</a></b></h4>
              </div>
              </div>
        </div>

        <div class="col-md-3">
          <div class="card-list" id="tc4">
              <img src="assets/img/topchart4.jpg" alt="Bollyword top 50" style="width:100%;height:200px;">
              <div class="card-body">
                <h4><b><a href="playlistsong.php" style="text-decoration:none;">Bollyword Romance Top 50</a></b></h4>
              </div>
              </div>
        </div>


      </div>

    </div><!--Top chart container close -->


        <div class="container" style="padding-top:100px;"><!--Top Artist container open -->

          <div class="row">
            <div class="col-md-3"></div><div class="col-md-6" style="font-size:40px;text-align:center;">FEATURED ARTISTS</div><div class="col-md-3"></div>
          </div>

          <div class="row" style="padding-top:40px;">

            <div class="col-md-3">
              <div class="card-list" id="tc5">
                  <img src="assets/img/artist1.jpg" alt="Best Of Ranveer Singh" style="width:100%;height:200px;">
                  <div class="card-body">
                    <h4><b><a href="comingsoon.php" style="text-decoration:none;">Best Of Ranveer Singh</a></b></h4>
                  </div>
                  </div>
            </div>

            <div class="col-md-3">
              <div class="card-list" id="tc6">
                  <img src="assets/img/artist3.jpg" alt="Shreya" style="width:100%;height:200px;">
                  <div class="card-body">
                    <h4><b><a href="comingsoon.php" style="text-decoration:none;">Love You Shreya</a></b></h4>
                  </div>
                  </div>
            </div>

            <div class="col-md-3">
              <div class="card-list" id="tc7">
                  <img src="assets/img/artist2.jpg" alt="Honey Singh" style="width:100%;height:200px;">
                  <div class="card-body">
                    <h4><b><a href="comingsoon.php" style="text-decoration:none;">Yo Yo Honey Singh</a></b></h4>
                  </div>
                  </div>
            </div>

            <div class="col-md-3" id="tc8">
              <div class="card-list">
                  <img src="assets/img/artist4.jpg" alt="Sunidhi Chauhan" style="width:100%;height:200px;">
                  <div class="card-body">
                    <h4><b><a href="comingsoon.php" style="text-decoration:none;">Sunidhi Chauhan</a></b></h4>
                  </div>
                  </div>
            </div>


          </div>

        </div><!--Top Artist container close -->

        <div class="container" style="padding-top:100px;"><!--Top Asrk container open -->

          <div class="row">
            <div class="col-md-3"></div><div class="col-md-6" style="font-size:40px;text-align:center;">ASRK SPECIAL</div><div class="col-md-3"></div>
          </div>

          <div class="row" style="padding-top:40px;">
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend1.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Humsafar<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;"><span class="glyphicon glyphicon-download"></span>
              &nbsp;Download</button></a></span></div>
            </div>
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend2.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Nashe&nbsp;Si&nbsp;Chadh<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;">
              <span class="glyphicon glyphicon-download"></span>&nbsp;Download</button></a></span></div></div>
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend3.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Zaalima<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;"><span class="glyphicon glyphicon-download"></span>
              &nbsp;Download</button></a></span></div></div>
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend4.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Kaabil&nbsp;Hoon<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;">
              <span class="glyphicon glyphicon-download"></span>&nbsp;Download</button></a></span></div></div>
          </div>

          <div class="row" id="trendr" style="padding-top:40px;">
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend5.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Kala&nbsp;Chashma<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;">
              <span class="glyphicon glyphicon-download"></span>&nbsp;Download</button></a></span></div></div>
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend6.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Tere&nbsp;Sang&nbsp;Yara<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;">
              <span class="glyphicon glyphicon-download"></span>&nbsp;Download</button></a></span></div></div>
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend7.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Channa&nbsp;Mereya<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;">
              <span class="glyphicon glyphicon-download"></span>&nbsp;Download</button></a></span></div></div>
            <div class="col-md-3"><div class="col-md-1"><img src="assets/img/trend8.jpg" class="cover-small img-circle"></div><div class="col-md-2"><span class="trend-text text-muted">Naina<br><a href="assets/audio/Channa Mereya  Unplugged -(Mr-Jatt.com).mp3" download="Channa Mereya"><button class="btn" style="margin-left:60px;padding:3px 30px;border:2px solid #337ab7;background-color:white;color:#337ab7;"><span class="glyphicon glyphicon-download"></span>
              &nbsp;Download</button></a></span></div></div>
          </div>

          <div class="row" style="padding-top:40px;">
              <button class="btn btn-button btn-block" id="lbtn" style="background-color:#c33764;color:white;">LOAD MORE</button>
          </div>


        </div><!--Top Asrk container close -->


    <div class="container"  id="about" style="padding-top:80px;">   <!--Team Member container open -->

      <div class="row">
        <div class="col-md-4"></div><div class="col-md-4 text-muted" style="text-align:center;font-size:17px;">We are passionate about music</div><div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-3"></div><div class="col-md-6" style="font-size:50px;text-align:center;">OUR MANAGEMENT</div><div class="col-md-3"></div>
      </div>
      <div class="row" style="padding-top:40px;">
        <div class="col-md-3">

            <div class="card">
              <img src="assets/img/member1.jpg" alt="John" style="width:100%">
              <div class="box">
                <h1>A<small>KSHAY</small> P<small>ATEL</small></h1>
                <p class="title">Team Leader, Developer</p>
                <b>ASRK MUSIC</b>
                <div style="margin: 24px 0;">
                  <a href="#" class="social-btn"><i class="fa fa-google"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
               </div>
               <p><button class="contact-btn">Contact</button></p>
              </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card">
              <img src="assets/img/shreyansh.jpg" alt="John" style="width:100%">
              <div class="box">
                <h1>S<small>HREYANSH</small> <small></small></h1>
                <p class="title">Manager</p>
                <b>ASRK MUSIC</b>
                <div style="margin: 24px 0;">
                  <a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
               </div>
               <p><button class="contact-btn">Contact</button></p>
              </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card">
              <img src="assets/img/rohit.jpg" alt="John" style="width:100%">
              <div class="box">
                <h1>R<small>OHIT</small> G<small>HADI</small></h1>
                <p class="title">Tester</p>
                <b>ASRK MUSIC</b>
                <div style="margin: 24px 0;">
                  <a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
               </div>
               <p><button class="contact-btn">Contact</button></p>
              </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card">
              <img src="assets/img/kiran.jpg" alt="John" style="width:100%">
              <div class="box">
                <h1>K<small>IRAN</small> C<small>HAVAN</small></h1>
                <p class="title">Team Member, Tester</p>
                <b>ASRK MUSIC</b>
                <div style="margin: 24px 0;">
                  <a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
               </div>
               <p><button class="contact-btn">Contact</button></p>
              </div>
            </div>

        </div>

      </div>

    </div>  <!--Team Member container close -->


    <div class="container" id="contact" style="padding-top:80px;">   <!--contact container open -->

      <div class="row">
        <div class="col-md-2"></div><div class="col-md-8" style="font-size:50px;text-align:center;">CONTACT INFORMATION</div><div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div><div class="col-md-4 text-muted" style="text-align:center;font-size:17px;">Our studio and our music facilities location.</div><div class="col-md-4"></div>
      </div>
      <div class="row" style="padding-top:40px;">
        <div class="col-md-3"><div class="col-md-1"><span class="glyphicon glyphicon-map-marker styleicons"></span></div><div class="col-md-2"><span class="contheadstyle">LOCATION</span></div></div>
        <div class="col-md-3"><div class="col-md-1"><span class="glyphicon glyphicon-earphone styleicons"></span></div><div class="col-md-2"><span class="contheadstyle">PHONES</span></div></div>
        <div class="col-md-3"><div class="col-md-1"><span class="glyphicon glyphicon-time styleicons"></span></div><div class="col-md-2"><span class="contheadstyle">HOURS</span></div></div>
        <div class="col-md-3"><div class="col-md-1"><span class="glyphicon glyphicon-envelope styleicons"></span></div><div class="col-md-2"><span class="contheadstyle">EMAIL</span></div></div>
      </div>
      <div class="row" style="padding-top:10px;">
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><span class="contactmain text-muted">Mumbai </span><span class="contactmain text-muted">Maharashtra</span></div></div>
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><span class="contactmain text-muted">(+91)&nbsp;9833244989 </span><span class="contactmain text-muted">(+91)&nbsp;7021434818</span></div></div>
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><span class="contactmain text-muted d-block">Monday&nbsp;-&nbsp;Saturday</span><br><span class="contactmain text-muted">11AM&nbsp;-&nbsp;8PM</span></div></div>
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><span class="contactmain text-muted d-block">help@asrkmusic.org</span><br><span class="contactmain text-muted">feedback@asrkmusic.org</span></div></div>
      </div>
      <div class="row" style="padding-top:20px;">
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><hr class="designhr"></div></div>
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><hr class="designhr"></div></div>
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><hr class="designhr"></div></div>
        <div class="col-md-3"><div class="col-md-1"></div><div class="col-md-2"><hr class="designhr"></div></div>
      </div>

    </div>  <!--contact container close -->


    <div class="container-fluid">   <!--map container open -->
      <div class="row" style="padding-top:60px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3769.2951816902914!2d72.85874055654969!3d19.1385520737719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1490942722410" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>  <!--map container close -->


    <div class="container-fluid">
        <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="col-md-12" style="font-size:50px;padding-top:80px;text-align:center;">PLEASE FEEL FREE TO SHARE YOUR MUSIC EXPERIENCE</div>
        <hr>
        <div class="fb-comments" data-href="https://www.facebook.com/ASRK-Music-241848562946647/" data-width="100%" data-numposts="8"></div>
      </div>

      <div class="row" style="padding-top:30px;">

        <nav class="navbar navbar-inverse">
          <div class="container">
            <p style="margin-top:15px;color:white;">&copy; 2017 ASRK MUSIC ALL RIGHTS RESERVED</p>
            <div id="google_translate_element" style="position:absolute;right:25px;margin-top:-32px;"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>
        </nav>

      </div>


    <a href="#" class="back-to-top"><span class="glyphicon glyphicon-menu-up" aria-hidden="true" style="margin-left:3px;"></span></a>



  <script src="assets/js/jquery-3.2.0.min.js"></script>
  <script src="assets/js/function.js" type="text/javascript"></script>
  <script src="assets/js/viewportchecker.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="fb/fb.js"></script>
  <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58d9ec72a1c5fb00126d2096&product=inline-share-buttons"></script>


</body>
</html>
