<?php

    //start header
    require("header3.php");
    //finish header

    //start main content
    

    //blog posts sql settings
    
        $url = $_GET['post']; //get post title


        //get post info from db
        $sql = "SELECT * FROM posts WHERE url='$url'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            //get poster usename
            $getname = "SELECT firstname, lastname FROM users WHERE id=".$row['user'];
            $gotname = mysqli_query($conn, $getname);
            $postername = mysqli_fetch_assoc($gotname);
            
            //add 1 view for every visit
            $sqlviews = "UPDATE posts SET views = views+1 WHERE id=".$row['id'];
            $conn->query($sqlviews);
    
    ?>

        <div id="cover-post" style="background-image: url(<?=$row['cover']?>);">
            <div class="cell-top"></div><!-- to make up space at the top -->
        
            <div class="cell-middle">
                <!--<h1 class="text-white"><?=$row['title']?></h1>
                <div id="slogan" class="text-white"><?=$row['subtitle']?></div>-->
            </div>
            
            <div class="cell-bottom"></div>
            
        </div>

        <div class="container bg-light rounded p-2 mvup25 mb-4">
            
                <h1 class="text-dark pt-3"><?=$row['title']?></h1>
                <div id="slogan" class="text-dark text-center"><?=$row['subtitle']?></div>
        
            <div class="lead p-4 text-denter"><?=$row['content']?></div>
            
            <?php
        
                //get post info from db
                $getcomments = "SELECT * FROM comments WHERE post=".$row['id'];
                $comments = mysqli_query($conn, $getcomments);
            
                if (mysqli_num_rows($comments) > 0) {
                while($res = mysqli_fetch_assoc($comments)) { ?>
                    
                <div class="pl-5 pr-5">
                    <div class="card">
                        <div class="card-header"><?=$res['poster']?></div>
                        <div class="card-body"> 
                            <?=$res['content']?>
                        </div>
                    </div>
                    
                    <div class="media">
                        <svg data-jdenticon-value="<?=$res['poster']?>" width="80" height="80" class="align-self-start mr-3"></svg>
                        <div class="media-body">
                            <h5 class="mt-0"><?=$res['poster']?></h5>
                            <p><?=$res['content']?></p>
                        </div>
                    </div>
                    
                    <hr>
                    
                </div>
                    
            <?php   } } else {
                    
                    echo "<p class='text-center'>No comments here.</p>";
                    
                }
        
            ?>
            
            <!--comment form -->
            <p class="text-center">Have a say please.</p>
            
            
            <form class="p-4">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <input name="email" type="text" class="form-control" placeholder="Email address">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
                </div>
            </form>
            <!-- comment form -->
            
        </div>
    
    <?php } }
         else {
            echo "0 results";
        }
    //finish main content
    
    //start footer
    require("footer.php");
    //finish footer
?>
