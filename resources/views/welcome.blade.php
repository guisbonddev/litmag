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
                <img src="http://i68.tinypic.com/mj97ad.png">
                  <p style="font-size: 80px;"><i>"Part of a well balanced breakfast"</i></p>

                  <p>Neither of us consider ourselves “morning people.” It’s safe to say that breakfast, which we consider an expression of our humanity, makes the morning that much more bearable. When we saw Captain Jake, Oh by Everett Moss, a senior this year, it immediately caught everyone’s eye. Adventuring through the creative process was long and controversial, so it makes us proud of the final product we are presenting to you. <br><br>

                  As our first edition of the year, the Fall issue helps us to work out the kinks in production so we can better ourselves and our processes for next issue. This year we are armed with the largest staff we’ve ever had, a brand new website, new Adobe Indesign software, and a wealth of new talent. We believe that with this issue, we’ve continued to set the bar for our entire publication. <br><br>

                  With that, we are excited to present the Fall 2017 edition of Rambunctious, “a key part in every well balanced breakfast.”<br><br>

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
