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
            }

            /* ---- grid-item ---- */

            .grid-item {
              width: 500px;
              height: 500px;
            }



    </style>

   <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>

    <script src="https://unpkg.com/masonry-lay`out@4/dist/masonry.pkgd.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  

  </head>
  <body>
      @include('partials.nav')
      <br><br>
      <div clss="row">
          <script>
            $('.grid').masonry({
              itemSelector: '.grid-item',
              columnWidth: 160
              gutter: 10
            });
          </script>
        <div class="col-md-12">
          <center>
              <h2>{{$current_edition->edition}} Artwork and Photography</h2>
              <i>Click each selection below to enlarge the image</i>
              <br><br>
              <div style="padding: 50px;">
                <div style="margin: 10px;" class="grid uk-child-width-1-2@m" uk-grid uk-lightbox="animation: slide">
                    @foreach ($artworks as $artwork)
                      <div uk-lightbox="animation: slide" style="background-image: url('/storage/{{$artwork->image}}'); background-position: center; " class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                          <a href="/storage/{{$artwork->image}}" caption="{{$artwork->author}} - {{$artwork->title}}">
                            <h3 style="background-color: #000; color: #fff;" class="uk-card-title">{{$artwork->title}}</h3>
                            <i style="background-color: #000; color: #fff;" >{{$artwork->author}}, {{$artwork->grad_year}}</i>
                          </a>
                          <br><br><br><br>
                      </div>

                      <div id="art-modal" uk-modal>
                          <div class="uk-modal-dialog uk-modal-body">
                              <img src="/storage/{{$artwork->image}}">
                          </div>
                      </div>
                    @endforeach
                </div>
              </div>
          </center>
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