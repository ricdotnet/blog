<?php

    //set my timezone or it won't work
    date_default_timezone_set('UTC');

    if(isset($_POST['postblog'])){
        
        $title = $_POST['title'];
        $url = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $user = '1';
        //$date = date("Y-m-d");
        $content = addslashes($_POST['content']);
        $date = date("Y-m-d");
        
        $url = str_replace(' ', '-', $url);
        
        $texthtml = $_POST['content'];
        preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $texthtml, $img);
        $cover = $img[1];
        //preg_match('/<img.+src=[\'"](?P<src>.+)[\'"].*>/i', $texthtml, $image);
        //$cover = $image['src'];
    
        $sql = "INSERT INTO posts (title, subtitle, user, content, date, cover, url)
        VALUES ('$title', '$subtitle', '$user', '$content', '$date', '$cover', '$url')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div class='container alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Wel Done!</strong> Your article was published with success.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
        } else {
            echo "<div class=error>Error: " . $sql . "<br>" . $conn->error ."</div>";
        }
    }

?>