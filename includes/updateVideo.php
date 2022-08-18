<?php
    include_once 'db.php';

    $title = $_POST['title'];
    
    $watch = $_POST['watch'];
    $watch .= '?controls=0&autoplay=0&mute=1&enablejsapi=1';

    $categories = $_POST['categories'];

    $sql = "UPDATE video_info SET title = '$title', categories = '$categories' WHERE watch = '$watch'";
    
    mysqli_query($conn, $sql);

    header("Location: ../submitVideo.php?updatedVideo=success");