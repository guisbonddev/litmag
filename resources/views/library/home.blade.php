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
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
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

<section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                @foreach ($editions as $edition)
                    <article class="masonry__brick entry format-standard" data-aos="fade-up">
                            
                        <div class="entry__thumb">
                            <a href="/library/{{$edition->id}}" class="entry__thumb-link">
                                <img src="{{$edition->image}}" 
                                        srcset="{{$edition->image}}" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <center>
                                <div class="entry__header">
                                   <h1 style="font-family: 'Raleway', sans-serif;" class="entry__title"><a href="/library/{{$edition->id}}">{{$edition->edition}}</a></h1>  
                                </div>
                            </center>
                        </div>
        
                    </article> <!-- end article -->
                @endforeach

    </section> <!-- s-content -->






    
    @include('partials.footer')

</body>

</html>