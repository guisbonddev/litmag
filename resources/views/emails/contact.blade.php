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

</style>

<body>
<h1>A new request has been sent through the contact form</h1><br><br>

<p>From: {{$name}}</p><br>
<p>Sender Email: {{$email}}</p><br><br>
<p>Message: {{$comments}}</p>
</body>
