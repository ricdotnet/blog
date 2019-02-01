<?php

    //start header
    require("header3.php");
    //finish header

    //start main content
    

    //blog posts sql settings
    
        $url = $_GET['post'];

        $sql = "SELECT * FROM posts WHERE url='$url'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            //get poster usename
            $getname = "SELECT firstname, lastname FROM users WHERE id=".$row['user'];
            $gotname = mysqli_query($conn, $getname);
            $postername = mysqli_fetch_assoc($gotname);
            
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

        <div class="container bg-light rounded p-2 mvup25 text-center mb-4">
            
                <h1 class="text-dark pt-3"><?=$row['title']?></h1>
                <div id="slogan" class="text-dark"><?=$row['subtitle']?></div>
        
            <div class="lead p-4"><?=$row['content']?></div>
            
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
