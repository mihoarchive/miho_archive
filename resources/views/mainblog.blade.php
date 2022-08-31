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
        

          




         <div class = "fixed_img_col">
            <ul>
            @foreach ($blogs as $blog)
              <li class="odd">
              
              <div class = "thumb">
              <div class = "headblog">
                <div class="title"> <?php echo $blog->title; ?></div>
                <div class="datetime"> <?php echo $blog->datetime; ?></div>
              </div>
                <a href="/blog/<?php echo $blog->blog_id; ?>"> 
                  <img  class ="preview" src = "<?php 
                    $blog_id = $blog->blog_id;
                    $blog_id = $blog_id."_img0";
                   $path = "https://res.cloudinary.com/dhjnjuiff/image/upload/v1/blog_archive/".$blog_id; 
                  echo $path; ?>">  
                  </img>   
              </a>
            </div>
            
              </li>
              @endforeach
            </ul>
          </div>
       

         

         

        

          <div class="pagination">
          {!!  $blogs->links() !!}
          </div> 
          
        </div>

        <div class = "footer">
          <div class = "foot-text">SUNSHINE DAY</div>
        </div>

        </body>
        </html>
                