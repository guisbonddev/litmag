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
        
        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 style="font-family: 'Raleway', sans-serif;" class="s-content__header-title">
                    {{$piece->title}}
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date">{{$piece->author}}, {{$piece->grad_year}}</li>
                </ul>
            </div> <!-- end s-content__header -->
            <div class="col-full s-content__main">
                {!! $piece->body !!}
            </div> <!-- end s-content__main -->

        </article>


    </section> <!-- s-content -->







    
    @include('partials.footer')

</body>

</html>