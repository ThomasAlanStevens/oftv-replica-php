<?php
    include_once 'db.php';
    
    $watch = $_POST['watch'];
    $watch .= '?controls=0&autoplay=0&mute=1&enablejsapi=1';

    $sql = "DELETE FROM video_info WHERE watch = '$watch'";
    
    mysqli_query($conn, $sql);

    header("Location: ../index.php?deletedVideo=success");