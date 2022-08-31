<!doctype html>
<html>
    <head>
        <title>SUNSHINE DAY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel= "stylesheet" type= "text/css" href= "/css/mycss.css">
    </head>
    <body>
        <div class ="header">
          <ul class = "menu">
            <li>
              <a href = "/blog"> BLOG   </a>
            </li>

            <li>
              <a href = "/history"> HISTORY   </a>
            </li>
            
            <li>
              <a href = "/profile"> PROFILE   </a>
            </li>

            <li>
              <a href = "/search"> SEARCH  </a>
            </li>

          </ul>
          
        </div>

          <div class = seperator>
            <hr class="dashed">
          </div>
        
          <div class = content>
          <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
          
          <!-- <div class = "nextpage"> <a href ="/blog/blog<?php echo $nextblog?>">next blog </a> </div> -->

            SOON

           <!-- <div class = "nextpage"> <a href ="/blog/blog<?php echo $nextblog?>">next blog </a> </div> -->
         
            <script>
                //Get the button
                var mybutton = document.getElementById("myBtn");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                  } else {
                    mybutton.style.display = "none";
                  }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
                }
            </script>
        
        </div>

          <div class = "footer">
            <div class = "foot-text">SUNSHINE DAY</div>
          </div>
          
        </body>
        </html>
                