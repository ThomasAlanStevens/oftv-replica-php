<?php
    include_once 'db.php';

    $title = $_POST['title'];

    $creator = $_POST['creator'];

    $channel = $_POST['channel'];
    
    $watch = $_POST['watch'];
    $watch .= '?controls=0&autoplay=0&mute=1&enablejsapi=1';

    $link = $watch;
    $link = str_replace( "watch?v=", "embed/", $link);

    $thumbnail = $watch;
    $thumbnail = str_replace('https://www.youtube.com/watch?v=', 'https://img.youtube.com/vi/', $thumbnail);
    $thumbnail = str_replace('?controls=0&autoplay=0&mute=1&enablejsapi=1', '/maxresdefault.jpg', $thumbnail);

    $icon = $_POST['icon'];

    $categories = $_POST['categories'];


    $sql = "INSERT INTO video_info (title, creator, channel, link, watch, thumbnail, icon, categories) VALUES ('$title', '$creator', '$channel', '$link', '$watch', '$thumbnail', '$icon', '$categories' );";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?addedVideo=success");