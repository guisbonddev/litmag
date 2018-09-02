<html lang="en">
  <head>

    <title>JD's Lit Mag</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{URL::to('welcome.css')}}">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Comfortaa');

      html{
        font-family: 'Comfortaa', cursive;

      }

      .container-fluid {
          position: static;
          text-align: center;
          color: #000; /* VAR */
          padding-left:0; 
          padding-right:0;
          font-family: 'Comfortaa', cursive;
      }


    </style>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  

  </head>
  <body style="background-color: {{ Voyager::setting('styles.back_color') }}">
    
    <div class="row">
      <div class="container  col-md-12">
        <img src="{{setting('styles.main_image')}}" style="width:100%;">
                <div class="centered"><p class="main-heading">JD's Lit Mag</p></div>
      </div>
    </div>
      <div class="container-fluid">
        <div class="row">
          <div id="mag" class="section section-one col-md-12">
            <div class="card-boarderless">
              <div class="card-body"><br><br><br><br>
                <p class="sub-heading">The Magazine</p>
                  <p>The award winning art and literary magazine features the best and most creative work <br> Jamesville-Dewitt High School has to offer. The student-run staff works hard to produce both a <br> Winter and Spring issue every academic year. Below, you can view our magazine as a preview, <br> to be purchased from Mr. Phillips. A comprehensive library, displaying all works, is on it's way.</p>
                 <a href="/library"> <button type="button" class="svg">Our Library</button></a><br><br>
              </div>
            </div>
          </div>
          <div id="contests" class="section section-two col-md-12" style="background-color: {{Voyager::setting('styles.back_color2')}};">
            <div class="card-boarderless">
              <div class="card-body"><br><br><br><br>
                <p class="sub-heading">Writing Competitions</p>
                  <p>The award winning art and literary magazine features the best and most creative work <br> Jamesville-Dewitt High School has to offer. The student-run staff works hard to produce both a <br> Winter and Spring issue every academic year. Below, you can view our magazine as a preview, <br> to be purchased from Mr. Phillips. A comprehensive library, displaying all works, is on it's way.</p>
                 <a href="/"> <button type="button" class="svg">Contests</button></a><br><br>
              </div>
            </div>
          </div>
          <div id="about" class="section section-one col-md-12">
            <div class="card-boarderless">
              <div class="card-body"><br><br><br><br>
                <p class="sub-heading">About</p>
                  <p>The award winning art and literary magazine features the best and most creative work <br> Jamesville-Dewitt High School has to offer. The student-run staff works hard to produce both a <br> Winter and Spring issue every academic year. Below, you can view our magazine as a preview, <br> to be purchased from Mr. Phillips. A comprehensive library, displaying all works, is on it's way.</p>
                 <a href="/"> <button type="button" class="svg">Our Staff</button></a><br><br>
              </div>
            </div>
          </div>
          <div id="submit" class="section section-two col-md-12" style="background-color: {{Voyager::setting('styles.back_color2')}};">
            <div class="card-boarderless">
              <div class="card-body"><br><br><br><br>
                <p class="sub-heading">Submit</p>
                  <p>The award winning art and literary magazine features the best and most creative work <br> Jamesville-Dewitt High School has to offer. The student-run staff works hard to produce both a <br> Winter and Spring issue every academic year. Below, you can view our magazine as a preview, <br> to be purchased from Mr. Phillips. A comprehensive library, displaying all works, is on it's way.</p>
                 <a href="/"> <button type="button" class="svg">Submit Work</button></a><br><br>
              </div>
            </div>
          </div>
          <div id="contact" class="section section-one col-md-12">
            <div class="card-boarderless">
              <div class="card-body"><br><br><br><br>
                <p class="sub-heading">Contact</p>
                  <p>The award winning art and literary magazine features the best and most creative work <br> Jamesville-Dewitt High School has to offer. The student-run staff works hard to produce both a <br> Winter and Spring issue every academic year. Below, you can view our magazine as a preview, <br> to be purchased from Mr. Phillips. A comprehensive library, displaying all works, is on it's way.</p>
                 <a href="/"> <button type="button" class="svg">Get in Touch</button></a><br><br>
              </div>
            </div>
          </div>
          <!--Footer-Begin-->
          <div class="footer col-md-12 section-one">
            <div class="card-boarderless">
              <div class="card-body"><br><br>
                  &copy; Rambunctious Literary Magazine 2017-2018 <br>
                  Website by Will Guisbond<br>
                  <a href="/admin">Staff Access</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ///////////////////////////////////////////////////////////// -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>