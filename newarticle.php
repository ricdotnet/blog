<?php

    //start header
    require("header2.php");
    //finish header

    //start main content
    
    require('sendarticle.php');

    ?>

    <div class="container">
        <div class="card card-body border-0 mb-3">

        <form id="addblog" action="" method="post">
            
            <div class="form-group">
                <input name="title" type="text" class="form-control" id="articleTitle" placeholder="Enter article title." required>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input name="subtitle" type="text" class="form-control" id="articleSubtitle" placeholder="Enter article subtitle.">
                    </div>
                    <!--<div class="col">
                        <div class="btn btn-primary float-right" data-toggle="modal" data-target="#unsplash">Upload Image</div>
                    </div>-->
                </div>
            </div>
            
            <textarea name="articlecontent" id="blogpost" placeholder="Edit here."></textarea>
                
            <button class="btn btn-primary" id="button" name="postblog">Post Article</button>
            
            <div id="date"><?=date("Y-m-d")?></div>
            
        </form>
            
        <form action="upload.php" method="post">
            <input name="myFile" type="file">

            <button class="btn btn-primary" id="button" name="upload">Upload</button>
        </form>
        
        </div>
    </div>
    
    <?php
    
    //finish main content
    
    //start footer
    require("footer.php");
    //finish footer
?>