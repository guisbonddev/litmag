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
            }

            .grid-item:hover{
                transform: scale(1.2, 1.2); /** default is 1, scale it to 1.5 */
                opacity: 1;
            }

            .grid-item--width1 { width:  30%; }
            .grid-item--height1 { height: 300px; }

            #map_canvas { height: 100% }

    </style>

   <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  

  </head>
  <body>
      @include('partials.nav')
      <br><br>
      <div clss="row">
        <div class="col-md-12">
            <center>
              <h2>Contact the Rambunctious Team</h2>
              <br>
              <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                  <h4>Need to get in touch with us? Send us an email at:</h4><br>
                  <a href="mailto:litmag@jd.cnyric.org" target="_top">litmag@jd.cnyric.org</a>
              </div><br><br>
              <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                  <h4>Where we're located:</h4><br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.3279891047646!2d-76.04775188437759!3d43.01972547914809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d98c9b71e0dd73%3A0xc394532989917850!2sJamesville-DeWitt+High+School!5e1!3m2!1sen!2sus!4v1515352331555" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </center>
        </div>
        @include('partials.footer')
               


    <!-- ///////////////////////////////////////////////////////////// -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>