<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Rambunctious Literary Magazine</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"> 

    <!-- script
    ================================================== -->

    <script type="text/javascript" src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">



</head>

<body id="top">

    @include('partials.nav')

    <section class="s-extra" style="background-color: #F2F2F2;">
          <center><h1>{{$current_edition->edition}} Art & Photos</h1></center><br><br>
            <div class="row masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                            @foreach ($artworks as $artwork)
                                <article class="masonry__brick entry format-standard">
                                  <div class="entry__thumb">
                                      <a href="/storage/{{$artwork->image}}" class="entry__thumb-link">
                                          <img src="/storage/{{$artwork->image}}"  
                                                  srcset="/storage/{{$artwork->image}}" alt="">
                                      </a>
                                  </div>
                  
                                  <div class="entry__text">
                                      <center>
                                          <div class="entry__header">
                                             <h3 style="font-family: 'Raleway', sans-serif;" class="entry__title"><a href="/storage/{{$artwork->image}}">{{$artwork->title}}</a></h3>
                                          </div>
                                            <div class="entry__excerpt">
                                             <b>{{$artwork->author}} {{$artwork->grad_year}}</b>
                                          </div>
                                      </center>
                                  </div>
                              </article> <!-- end article -->
                            @endforeach
                </div> <!-- end popular -->
            </div> <!-- end row -->
    </section> <!-- end s-extra -->
     
                



    
    @include('partials.footer')

</body>

</html>