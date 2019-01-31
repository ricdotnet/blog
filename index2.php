<?php

    //start header
    require("header.php");
    //finish header

    //start main content
    
    //blog posts sql settingsp

?>

<!-- space in between -->

    <div class="container">

<?php

        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
             
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            //get poster usename
            $getname = "SELECT name FROM users WHERE id=".$row['user'];
            $gotname = mysqli_query($conn, $getname);
            $postername = mysqli_fetch_assoc($gotname);
            
            //date format
            $date = date("d-m-Y", strtotime($row['date']));
            
            $url = $row['url'];
            $title = $row['title'];
            $subtitle = $row['subtitle'];
    
    ?>
        
        <!--<div class="card">

            <img class="card-img-top" src="..." alt="Card image cap">
            
            <!--<div class="card-header"><h3><a href="blog.php?post=<?=$row['title']?>&id=<?=$row['id']?>" target="_blank"><?=$row['title'] ?></a></h3></div>-->
            
            <!--<div id="post-subtitle"><?=$row['subtitle'] ?></div>-->
            
            <!-- post content --
            <div class="card-body">
                
                <h4 class="card-title"><a class="text-dark" href="blog.php?post=<?=$row['title']?>&id=<?=$row['id']?>" target="_blank"><?=$row['title'] ?></a></h4>
            
            </div>
            
            <div class="card-footer">
                <!-- read more button --
                <div class="card-text text-left float-left">
                    <small class="text-muted">
                        <?php echo '<a href="blog.php?post='.$row['title'].'&id='.$row['id'].'" target="_blank" class="badge badge-light">Read More!</a>'; ?>
                    </small>
                </div>
                
                <!-- post info --
                <div class="card-text text-right"><small class="text-muted">Posted by <b><?=$postername['name'] ?></b> in <b><?=$row['date'] ?></b></small></div>--
            </div>
            <!-- end post content --
            
        </div>
        </div>-->
                
                <?php
        
                    $content = $row['content'];
                    
                    $finalcontent = strip_tags($content, '<br>');
            
                    if (strlen($finalcontent) > 500) {

                    // truncate string
                    $contentcut = substr($finalcontent, 0, 500);

                   // make sure it ends in a word so assassinate doesn't become ass...
                    $finalcontent = substr($contentcut, 0, strrpos($contentcut, ' '));
                    
                    }
                    
                   
                
                ?>
        
        <p class="h2 text-center"><a class="text-dark" href="blog.php?post=<?=$url?>"><?=$title?></a></p>
        <p class="lead text-muted text-center"><?=$subtitle?></p>
        
        <p class="text-center"><?=$finalcontent?></p>
        
        <hr class="mt-5">
    
    <?php
        
        }
            
        } else {
            echo "0 results";
        }
    //finish main content
        
        ?>
        
    </div>

<?php
    
    //start footer
    require("footer.php");
    //finish footer
?>