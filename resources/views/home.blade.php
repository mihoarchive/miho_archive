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
        >
    </head>




    <body>
        <div class ="header">
            <img src = "/img/header.jpg" class = logo> </div>

        </div>

        <select id="select" onchange="window.location.href=this.value;">
  @foreach ($years as $year)
  <option value="<?php echo "blog".$year ?>  "> <?php echo  $year ?> </option>
  @endforeach
</select>
        
        <div class = "menubar"> 
          <nav class="navbar" style="background-color: #e3f2fd;">
            <div class="container-fluid">
              <a class="navbar-brand">SUNSHINE DAY</a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/blog">BLOG</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav> 
        </div>


        <div class = content>
        </div>

          


         
        </body>
        </html>
                