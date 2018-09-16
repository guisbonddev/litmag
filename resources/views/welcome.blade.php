<html lang="en">
  <head>

    <title>JD's Lit Mag</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');

      @font-face {
          font-family:"LeagueSpartan-Bold";
          src: url("/public/LeagueSpartan-Bold.otf"); /* TTF file for CSS3 browsers */
      }

      div{
        font-family:"LeagueSpartan-Bold";
      }
                  * { box-sizing: border-box; }

            body { font-family: sans-serif; }

            a{
              text-decoration: none;
            }

            .grid-item img {
                width: 100%;
                
            }


            /* ---- grid ---- */

            .grid {
              background: #FFF;
              max-width: 1200px;
            }

            /* clearfix */
            .grid:after {
              content: '';
              display: block;
              clear: both;
            }

            /* ---- grid-item ---- */

            .grid-item {
              width: 160px;
              height: 120px;
              float: left;
              background: none;
              border-color: hsla(0, 0%, 0%, 0.5);
              margin: 10px;
              padding-top: 50px;
            }

            .grid-item:hover{
                transform: scale(1.2, 1.2); /** default is 1, scale it to 1.5 */
                opacity: 1;
            }

            .grid-item--width1 { width:  30%; }
            .grid-item--height1 { height: 300px; }

            .uk-card-cover{

            }

    </style>

   <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  

  </head>
  <body>
      @include('partials.nav')
      <div clss="row">
        <center><p style="font-size: 80px; color: #DB0022;">R a m b u n c t i o u s</p></center>
        <hr>
        <div class="col-md-12">
          <div class="uk-column-1-2 ">
                <img width="100%" src="http://i64.tinypic.com/j5l6ck.png">
                  <p style="font-size: 70px;"><i>"A New Direction"</i></p>

                  <p>What is direction? According to the dictionary, it means <i>a course along which someone or something moves</i>. Throughout the 2017-2018 school year, we have tried to figure out where we’re going and how the magazine has to change in order to get there. The process of adapting to new experiences is a founding virtue of humanity. As editors, we are trying to employ the second definition: <i>the management or guidance of something or someone</i>.<br><br>

                  The cover, interspersed with various lines of contrasting directions demonstrates our jour-
                  ney. It emphasizes the changes that the magazine has gone through this year and all of the possible directions for our future. Long hours spent in the computer lab in addition to a looming deadline taught us something. It taught us about the many ways direction can manifest itself. After completing the spring edition, we have realized that the only constants are these changes in direction - but we are proud of where we are now. <br><br>

                  Without further ado, we present the Spring 2018 edition of <i>Rambunctious</i> - our nod to direction and what it can do.<br><br>

                  Sofia Liaw, Print Editor
                  <br>
                  Will Guisbond, Web Editor
                  </p>
          </div>
        </div>
      </div>
      <hr>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
          <div>
            <a href="/library/{{$edition->id}}">
              <div class="uk-card uk-card-default uk-card-body" style="background-color: #ABAFB5;">
                  <center><h3 class="uk-card-title">Click to Jump to the current edition</h3></center>
              </div>
            </a>
          </div>
          <div>
            <a href="/library">
              <div class="uk-card uk-card-default uk-card-body" style="background-color: #ABAFB5;">
                  <center><h3 class="uk-card-title">Click to view our comprehensive library</h3></center>
              </div>
            </a>
          </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
          <div>
            <a href="https://photos.app.goo.gl/PbXiInO8nWG0s2n73">
              <div class="uk-card uk-card-default uk-card-body" style="background-color: #ABAFB5;">
                  <center><h3 class="uk-card-title">View Fall 2017 Photos and Artwork</h3></center>
              </div>
            </a>
          </div>
          <div>
            <a href="https://drive.google.com/file/d/1Bfmq6WPse58TOcP1oBbsfpIBqNTKYQWy/view?usp=sharing">
              <div class="uk-card uk-card-default uk-card-body" style="background-color: #ABAFB5;">
                  <center><h3 class="uk-card-title">Preview our Spring 2018 Edition</h3></center>
              </div>
            </a>
          </div>
        </div>
        @include('partials.footer')
    


    <!-- ///////////////////////////////////////////////////////////// -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
