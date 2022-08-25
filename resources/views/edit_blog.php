<!doctype html>
<html>
    <head>
        <title>SUNSHINE DAY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel= "stylesheet" type= "text/css" href= "/css/mycss.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
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
              <a href = "/blog"> SEARCH  </a>
            </li>

          </ul>
          
        </div>

          <div class = seperator>
            <hr class="dashed">
          </div>
       
          <div class = content> 
            <form class="" action="" method="POST">
                <div class="from=group">
                    <label for="" class="title"> TITLE </label>
                    <input type="text" name="title" class ="from-control">
                </div>
                <div class="from=group">
                    <label for="" class="blogdate"> DATETIME </label>
                    <input type="text" name="datetime" class ="from-control">
                </div>
                <div class="from=group">
                    <label for="" class="edit_article" > ARTICLE </label>
                    <input type="text" name="article" id = "article" class ="from-control">
                </div>

                <script>
                            ClassicEditor
                                    .create( document.querySelector( '#article' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                </script>
                <input type="submit" value="save"> </input>
            </form>        
            </div>
        

          <div class = "footer">
            <div class = "foot-text">SUNSHINE DAY</div>
          </div>

        </body>
        </html>
                