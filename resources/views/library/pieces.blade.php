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

    <!-- s-content
    ================================================== -->
        
    <section class="s-extra" style="background-color: #F2F2F2;">
          <center><h1>{{$current_edition->edition}} {{$current_genre->name}} </h1></center><br><br>
            <div class="row masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                    @foreach ($pieces as $piece)
                        <a href="/library/{{$current_edition->id}}/{{$current_genre->id}}/{{$piece->id}}">
                            <article class="masonry__brick entry format-standard" style="height: 400px">
                                <center>
                                    <div class="entry__text">
                                        <div class="entry__header">
                                           <h1 class="entry__title">{{$piece->title}}</a></h1>
                                        </div>
                                        <div class="entry__excerpt">
                                           <p>"{{$piece->quote}}"</p>
                                           <b>- {{$piece->author}}, {{$piece->grad_year}}</b>
                                        </div>
                                    </div>
                                </center>
                            </article>
                        </a>
                    @endforeach
                </div>
            </div> 
    </section> <!-- end s-extra -->

    @include('partials.footer')

</body>

</html>