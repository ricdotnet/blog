<?php

//CREATED BY: RICARDO ROCHA
//CREATED IN: 10TH OF NOVEMBER
//LAST EDITED IN: 19TH OF NOVEMBER
//EMAIL: me@rrocha.me

    require("functions/functions.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<title><?=$pagetitle ?></title>
    
    <!-- styles -->
    <link href="styles/font-awesome.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="styles/css.css" type="text/css"><!-- main style sheet -->
    <link rel="stylesheet" href="styles/icons.css" type="text/css">
    <link rel="stylesheet" href="styles/bricklayer.css" type="text/css">
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.2/css/themes/default.min.css" type="text/css">

</head>

<body>
    
    <form class="full" id="addblog" action="" method="post"><!-- full container -->
        <div class="top"><!-- nav and form start -->
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand h1 mb-0" href="http://rrocha.uk/blog"><?=$name;?></a>
                <span class="navbar-text">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#upload">Upload Image</button>
                    <button class="btn btn-primary" id="button" name="postblog">Post Article</button>
                </span>
            </nav>
            
        </div>
        <div class="bottom">
            
            <!-- title and subtitle -->
            <input class="input mt-4" name="title" type="text" id="articleTitle" placeholder="Enter article title." required autocomplete="off"><hr>
            <input class="input" name="subtitle" type="text" id="articleSubtitle" placeholder="Enter article subtitle." autocomplete="off"><hr>
            <!-- title and subtitle -->
            
            <textarea class="textarea" id="textarea" name="content"></textarea>
            <?php require('sendarticle.php'); ?>
        </div>
    </form>
    
    <!-- Upload Image Form -->
    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="uploadLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadLabel">Upload Image</h5>
                </div>
                <div class="modal-body"> 
                    <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
                        <div id="image-preview-div" style="display: none">
                            <label for="exampleInputFile">Selected image:</label><br>
                            <img id="preview-img" src="noimage">
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" id="file" required>
                        </div>
                        <button class="btn btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
                    </form>
                        <br>
                    <div class="alert alert-info" id="loading" style="display: none;" role="alert">
                        Uploading image...
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                    </div>
                    <div id="message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
            
    <!-- javascript to load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bricklayer/0.4.2/bricklayer.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>

    <script src="js/trumbowyg.min.js"></script>
    <script src="js/trumbowyg.upload.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>

    <script src="js/custom.js"></script><!-- custom javascript -->
    
    <script src="js/textarea.js"></script><!-- form submit javascript -->
    <script src="js/upload.js"></script>
    <!-- end javascript -->

</body>

</html>