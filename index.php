<?php
    include_once 'db.php'
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/abfb956a03.js" crossorigin="anonymous"></script>
        <!-- Materialize Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Swiper Carousel -->
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
        <!-- Fonts -->
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,700" id="avia-google-webfont">
        <!-- Styles -->
        <link rel="stylesheet" href="css/styles.css">
        <title>OFTV</title>
    </head>

    <body>

        <!-- OF.TV Header -->
        <header id="top">
            <!-- Regular Header -->
            <nav id="pc-header" class="flex-row">
                <section>
                    <ul class="flex-row">
                        <li><a href="https://of.tv/"><img class="icon" src="/images/oftvIcon.png" alt="OF.TV Icon"></a></li>
                        <li><a class="home" href="#top">Home</a></li>
                        <li><a href="https://of.tv/creators/">Creators</a></li>
                        <li><a href="https://of.tv/download/">Get the app</a></li>
                    </ul>
                </section>
                <section>
                    <ul class="flex-row nav-actions">
                        <li>
                            <form class="flex-row" action="#" id="searchform" method="get">
                                <input type="text" id="search" name="search" placeholder="Search">
                                <button class="search-button"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li><button><i class="fa-solid fa-circle-half-stroke"></i></button></li>
                    </ul>
                </section>
            </nav>

            <!-- Hamburger Header For Smaller Devices -->
            <section class="p-menu1">
                <nav id="navbar" class="navigation" role="navigation">
                    <input id="toggle1" type="checkbox" />
                    <label class="hamburger1" for="toggle1">
                    <div class="top"></div>
                    <div class="meat"></div>
                    <div class="bottom"></div>
                    </label>
                
                    <nav class="menu1">
                        <a href="https://of.tv/"><img class="icon" src="images/oftvIcon.png" alt="OF.TV Icon"></a>
                        <a class="link1" href="#top">Home</a>
                        <a class="link1" href="https://of.tv/creators/">Creators</a>
                        <a class="link1" href="https://of.tv/download/">Get the app</a>
                        <form class="flex-row link1" action="#" id="searchform" method="get">
                            <input type="text" id="search" name="search" placeholder="Search">
                            <button class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                    </nav>
                </nav>
            </section>
        </header>

        <!-- Main Video Display Carousel Using Materialize-->
        <main>
            <div class="fade-left"></div>
            <section id="carousel" class="carousel">
                <?php
                    $sql = "SELECT * FROM video_info;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<div class=\"carousel-item\">
                            <a href=\"$row[watch]\">
                                <figure>
                                    <iframe width=\"560\" height=\"315\" src=\"$row[link]\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                </figure>
                            </a>
                            <div class=\"main-info\">
                                <a href=\"$row[channel]\"><img src=\"$row[icon]\" alt=\"\"></a>
                                <a href=\"$row[watch]\"><h3>$row[title]</h3></a>
                                <a href=\"$row[channel]\"><h4>$row[creator]</h4></a>
                            </div>
                        </div>";
                        }
                    }
                ?>
            </section>
            <div class="fade-right"></div>
            <button class="carousel-button prev" data-carousel-button-prev><</button>
            <button class="carousel-button next" data-carousel-button-next>></button>
        </main>

        <!--Categories Video Display Carousels Using Swiper -->
        <section class="swiper-container">
            <h2 class="category"><a href="https://of.tv/">Bo Burnham</a></h2>
            <div class="swiper mySwiper">
                <div class="fade-left-minor"></div>
                <div class="swiper-wrapper">
                    <?php
                        $sql = "SELECT * FROM video_info;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['creator'] == 'BoBurnham'){
                                    echo "<div class=\"swiper-slide\">
                                    <a href=\"$row[link]\"><img src=\"$row[thumbnail]\" alt=\"#\"></a>
                                    <div class=\"vid-info\">
                                        <a href=\"$row[watch]\"><h3>$row[title]</h3></a>
                                        <div class=\"flex-row space-between\">
                                        <a href=\"$row[channel]\"><h4 class=\"content-creator\">$row[creator]</h4></a>
                                            <h5 class=\"video-time\">Time</h5>
                                        </div>
                                    </div>
                                    <div class=\"fade-bottom\"></div>
                                </div>";
                                };
                            };
                        };
                    ?>
                </div>
            <div class="swiper-button-next next1"></div>
            <div class="swiper-button-prev prev1"></div>
            <div class="fade-right-minor"></div>
        </section>

        <section class="swiper-container">
            <h2 class="category"><a href="https://of.tv/">Stand-Up Comedy</a></h2>
            <div class="swiper mySwiper">
                <div class="fade-left-minor"></div>
                <div class="swiper-wrapper">
                    <?php
                        $sql = "SELECT * FROM video_info;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                if(strpos($row['categories'], 'stand-up')){
                                    echo "<div class=\"swiper-slide\">
                                    <a href=\"$row[link]\"><img src=\"$row[thumbnail]\" alt=\"#\"></a>
                                    <div class=\"vid-info\">
                                        <a href=\"$row[watch]\"><h3>$row[title]</h3></a>
                                        <div class=\"flex-row space-between\">
                                        <a href=\"$row[channel]\"><h4 class=\"content-creator\">$row[creator]</h4></a>
                                            <h5 class=\"video-time\">Time</h5>
                                        </div>
                                    </div>
                                    <div class=\"fade-bottom\"></div>
                                </div>";
                                };
                            };
                        };
                    ?>
                </div>
            <div class="swiper-button-next next1"></div>
            <div class="swiper-button-prev prev1"></div>
            <div class="fade-right-minor"></div>
        </section>

        <section class="swiper-container">
            <h2 class="category"><a href="https://of.tv/">Comedy</a></h2>
            <div class="swiper mySwiper">
                <div class="fade-left-minor"></div>
                <div class="swiper-wrapper">
                    <?php
                        $sql = "SELECT * FROM video_info;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                if(strpos($row['categories'], 'comedy')){
                                    echo "<div class=\"swiper-slide\">
                                    <a href=\"$row[link]\"><img src=\"$row[thumbnail]\" alt=\"#\"></a>
                                    <div class=\"vid-info\">
                                        <a href=\"$row[watch]\"><h3>$row[title]</h3></a>
                                        <div class=\"flex-row space-between\">
                                        <a href=\"$row[channel]\"><h4 class=\"content-creator\">$row[creator]</h4></a>
                                            <h5 class=\"video-time\">Time</h5>
                                        </div>
                                    </div>
                                    <div class=\"fade-bottom\"></div>
                                </div>";
                                };
                            };
                        };
                    ?>
                </div>
            <div class="swiper-button-next next1"></div>
            <div class="swiper-button-prev prev1"></div>
            <div class="fade-right-minor"></div>
        </section>

        <section class="swiper-container">
            <h2 class="category"><a href="https://of.tv/">Lofi Music</a></h2>
            <div class="swiper mySwiper">
                <div class="fade-left-minor"></div>
                <div class="swiper-wrapper">
                    <?php
                        $sql = "SELECT * FROM video_info;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                if(strpos($row['categories'], 'lofi')){
                                    echo "<div class=\"swiper-slide\">
                                    <a href=\"$row[link]\"><img src=\"$row[thumbnail]\" alt=\"#\"></a>
                                    <div class=\"vid-info\">
                                        <a href=\"$row[watch]\"><h3>$row[title]</h3></a>
                                        <div class=\"flex-row space-between\">
                                        <a href=\"$row[channel]\"><h4 class=\"content-creator\">$row[creator]</h4></a>
                                            <h5 class=\"video-time\">Time</h5>
                                        </div>
                                    </div>
                                    <div class=\"fade-bottom\"></div>
                                </div>";
                                };
                            };
                        };
                    ?>
                </div>
            <div class="swiper-button-next next1"></div>
            <div class="swiper-button-prev prev1"></div>
            <div class="fade-right-minor"></div>
        </section>

        <!-- Footer -->
        <footer class="flex-col">
            <section class="flex-row major-v-padding footer-top-row">
                <section class="flex-col">
                    <a href="https://of.tv/"><img class="icon" src="/images/oftvIcon.png" alt="OF.TV Icon">
                    <a href="#"><span>Follow us!</span></a>
                </section>
                <section class="flex-col center">
                    <h5>OFTV is available on multiple devices</h5>
                    <ul class="flex-row minor-v-padding">
                        <li class="minor-h-padding"><a class="footer-nav" href="https://of.tv/download/">Get the app</a></li>
                        <li class="minor-h-padding"><a class="footer-nav" href="https://play.google.com/store/apps/details?id=com.zype.oftvandroid">Android</a></li>
                        <li class="minor-h-padding"><a class="footer-nav" href="https://channelstore.roku.com/details/10e9775413e7da2fec7597f61c388ab0/oftv">IOS</a></li>
                        <li class="minor-h-padding"><a class="footer-nav" href="https://www.amazon.com/OF-Media-OFTV/dp/B08G3JWZDQ">Roku</a></li>
                        <li class="minor-h-padding"><a class="footer-nav" href="https://apps.apple.com/app/oftv/id1521600438">FireTV</a></li>
                        <li class="minor-h-padding"><a class="footer-nav" href="https://play.google.com/store/apps/details?id=com.oftv.androidtv">AppleTV</a></li>
                        <li class="minor-h-padding"><a class="footer-nav" href="https://www.samsung.com/us/support/answer/ANS00062169/">SamsungTV</a></li>
                    </ul>
                </section>
                <section class="flex-col">
                    <span class="minor-v-padding">Are you an OF creator?</span>
                    <a href="#">Submit videos to OFTV.</a>
                </section>
            </section>
            <small>©2022 OFTV | <a href="">Privacy Policy</a></small>
        </footer>
    
        <!-- Scripts -->
        <!-- Materialize JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Swiper JS -->
        <script src="./js/swiper-bundle.min.js"></script>
        <!-- Other JS -->
        <script src="./js/script.js"></script>
    </body>
    
</html>