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

    </style>

   <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  

  </head>
  <body">
      @include('partials.nav')
      <br><br>
      <div clss="row">
        <div class="col-md-12">
            <center>
              <h2>About Rambunctious</h2><br>

              <div class="uk-card uk-card-default uk-card-large uk-card-body">
                <h3 style="color: #abafb5;" class="uk-card-title">JD's Award Winning Literary Magazine</h3>
                <p>The award winning art and literary magazine features the best and most creative work <br> Jamesville-Dewitt High School has to offer. The student-run staff works hard to produce both a <br> Winter and Spring issue every academic year. Below, you can view our magazine as a preview, <br> to be purchased from Mr. Phillips. A comprehensive library, displaying all works, is on it's way.</p>
              </div>
            </center>
            <br><br>
            <center>
                <h3 style="color: #abafb5;">Staff</h3>
            </center>
              <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                @foreach ($staffs as $staff)
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">{{$staff->name}}</h3>
                        <div style="background-color: #DB0022;" class="uk-card-badge uk-label">{{$staff->staff_role}}</div>
                    </div>
                </div>
                @endforeach
              </div>
        </div>
      </div>
      <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
          <div class="uk-navbar-center">
            <div class="uk-navbar-center"><div>
              <ul class="uk-navbar-nav">
                 <li><a href="#">Site by Will Guisbond</a></li>
              </ul>
            </div></div>
          </div>
        </div>
      </nav>
               


    <!-- ///////////////////////////////////////////////////////////// -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>