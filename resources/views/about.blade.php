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
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

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

        <div class="row">

            <div class="s-content__header col-full">
                <h1 style="font-family: 'Raleway', sans-serif;" class="s-content__header-title">
                    About Us 
                </h1>
            </div> <!-- end s-content__header -->

            <hr>

            <div class="col-full s-content__main">

                <p class="lead">Rambunctious is Jamesville Dewitt High School's award-winning literary magazine composed 
                entirely of student-submitteed works. Run by students, our staff works hard to publish 
                2 editions every academic year, composed of these submissions. If you are interested in joining our staff, 
                we meet every Friday in G12; if you are interested in purchasing a magzine, see Mr. Phillips.</p>


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

            <div class="s-content__header col-full">
                <h3 style="font-family: 'Raleway', sans-serif;" class="s-content__header-title">
                   Staff
                </h3>
            </div> <!-- end s-content__header -->

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                @foreach ($staffs as $staff)
               <article class="masonry__brick entry format-standard" data-aos="fade-up">
                    <div class="entry__text">
                        <center>
                            <div class="entry__header">
                               <h3 style="font-family: 'Raleway', sans-serif;" class="entry__title"><a href="single-standard.html">{{$staff->name}}</a></h3>
                            </div>
                              <div class="entry__excerpt">
                               <b>{{$staff->staff_role}}</b>
                            </div>
                        </center>
                    </div>
                </article> <!-- end article -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

    </section> <!-- s-content -->




    
    @include('partials.footer')

</body>

</html>