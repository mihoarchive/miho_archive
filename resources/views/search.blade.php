<!doctype html>
<html>
    <head>
        <title>SUNSHINE DAY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel= "stylesheet" type= "text/css" href= "/css/mycss.css">
        <link rel= "stylesheet" type= "text/javascripts" href= "/js/app.js">
        
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
            <a href = "/search"> SEARCH   </a>
          </li>

         </ul>
          
        </div>
        
        <div class = seperator>
          <hr class="dashed">
        </div>
        <div class = content>
        
        <div class = "search-area">
        <form class="form-inline my-2 my-lg-0" type ="get" action="{{ url('/found')}}">
      <input class="form-control mr-sm-2" name='search' type="search" placeholder="Search" aria-label="Search" required>
      <button class="btn btn-outline-primary" type="submit">Search</button>
    
        </form>

        </div>
          
    
      

        </body>
        </html>
                