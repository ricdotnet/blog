<?php

    //set my timezone or it won't work
    date_default_timezone_set('UTC');

    if(isset($_POST['postcomment'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $post = $row['id'];
        
        //$date = date("Y-m-d");
        $content = addslashes($_POST['comment']);
        $date = date("Y-m-d");
        
        //$texthtml = $_POST['content'];
        //preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $texthtml, $img);
        //$cover = $img[1];
        //preg_match('/<img.+src=[\'"](?P<src>.+)[\'"].*>/i', $texthtml, $image);
        //$cover = $image['src']; 
    
        $sql = "INSERT INTO comments (post, content, poster, email, date)
        VALUES ('$post', '$content', '$name', '$name', '$date')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div class='container alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Well Done!</strong> Your comment was published with success.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "<div class=error>Error: " . $sql . "<br>" . $conn->error ."</div>";
        }
    }

?>