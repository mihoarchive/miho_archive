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
              <a href = "/blog"> HISTORY   </a>
            </li>
            
            <li>
              <a href = "/blog"> PROFILE   </a>
            </li>

            <li>
              <a href = "/blog"> SNS   </a>
            </li>

          </ul>
          
        </div>

          <div class = seperator>
            <hr class="dashed">
          </div>
        
          <div class = content>
          

            @foreach ($blogs as $blog)
            <div class="blogtitle">{{ $blog->title }}</div>
            <div class="blogdatetime">{{ $blog->datetime }}</div>
            <div class="blogarticle"><?php echo $blog->article_img_link_str  ?></div>
            

            @endforeach

        </div>

          <div class = "footer">
            <div class = "foot-text">SUNSHINE DAY</div>
          </div>

        </body>
        </html>
                