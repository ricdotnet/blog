<?php

    //start header
    require("header.php");
    //finish header

    //start main content
    
    //blog posts sql settingsp

?>

<!-- space in between -->

    <div class="container">
        
    <div class="bricklayer mvup10 mvup25-mobile">
        <div class="bricklayer-column-sizer"></div>

<?php

        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
             
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            //get poster usename
            $getname = "SELECT name FROM users WHERE id=".$row['user'];
            $gotname = mysqli_query($conn, $getname) or die(mysql_error());
            $postername = mysqli_fetch_assoc($gotname);
            
            $name = '$postername[firstname],$postername[lastname]';
            
            //date format
            //$date = date("d-m-Y", strtotime($row['date']));
    
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
            
                    if (strlen($finalcontent) > 300) {

                    // truncate string
                    $contentcut = substr($finalcontent, 0, 300);

                    // make sure it ends in a word so assassinate doesn't become ass...
                    $finalcontent = substr($contentcut, 0, strrpos($contentcut, ' '));
                    } 
                
                ?>
        
        <div class="card border-0 box">
            
            <?php
                    if ($row['cover'] == ''){
                }else{
                    echo '<div class="card-img-top" style="background-image: url('.$row['cover'].');"></div>';
                }
            ?>
            
            <div class="card-body">
                <h4><a class="text-dark" href="blog.php?post=<?=$row['url']?>" target="_blank"><?=$row['title'] ?></a></h4>
                <p class="text-muted"><?=$row['subtitle'] ?></p>
                <p class="card-text text-justify"><?=$finalcontent?></p>
            </div>
            <div class="card-footer border-0">
                <div class="card-text text-uppercase text-primary float-left"><small><i class="fas fa-user"></i> <?=$postername['name']?></small></div>
                <div class="card-text text-right text-muted float-right"><small>
                    <i class="fas fa-eye"></i> <?=$row['views'] ?>
                    <span class="mr-3"></span>
                    <i class="fas fa-calendar-alt"></i> <?=$row['date'] ?>
                </small></div>
            </div>
            
        </div>
    
    <?php
        
        }
            
        } else {
            echo "0 results";
        }
    //finish main content
        
        ?>
        </div>
    </div>

<?php
    
    //start footer
    require("footer.php");
    //finish footer
?>