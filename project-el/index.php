<?php 
include "config.php";
// $sql = "SELECT * FROM users";
// $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header section starts -->

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">Al8bum<span></span></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#album">Album</a>
            <a href="#subscribe">Subscribe</a>
        </nav>

        <div class="icons">
            <a href="login.php" class="fas fa-key">Log out</a>
            <!-- <a href="#" class="fas fa-user"></a>
            <a href="#" class="fas fa-music"></a> -->

        </div>
    </header>
    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>TOPIC</h3>
            <span>Album Of The Day</span>
            <p>Your mood leaves a lot to be desired. Everything around you is getting on your nerves. But still, there’s
                one thing that may save you: music. Just think of all the times you turned on your favorite song, and it
                lifted your spirits!</p>
            <a href="#" class="btn">Explore Us</a>

        </div>
    </section>


    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">
        <h1 class="heading"><span> About </span> Us </h1>

        <div class="row">

            <div class="video-container">
                <video src="Dawn FM Trailer.mp4" loop autoplay muted></video>
                <!-- <h3>The Playlist From Netflix</h3> -->
            </div>

            <div class="content">
                <h3>"Harnessing music’s ability to transform the spaces we inhabit and draw us closer together"</h3>
                <p>Whether we’re forging soundtracks to give voice to a brand, working with architects to design a
                    perfectly balanced sound environment, or integrating the latest music technologies, we draw on our
                    deep knowledge and passion for music to take people on unexpected journeys - the kind that will stay
                    with them long after the experience is over.</p>
                <!-- <p>Also, that feels like something a TV character would say. Our Call: STREAM IT.</p> -->
            </div>


    </section>
    <!-- about section ends -->

    <!-- products section start -->
    <section class="album" id="album">

        <h1 class="heading"> Latest <span>Album </span></h1>

        <div class="box-container">
            <div class="box">
                <div class="image">

                    <a href="https://open.spotify.com/album/0P3oVJBFOv3TDXlYRhGL7s?si=_UVC6VHRQu214MhOM10ffw"> <img
                            src="theweeknd.jpg" alt=""> </a>


                    <a href="https://open.spotify.com/album/5TfGMgtbj2pU60Hk7DT5Yb?si=X0k2FO9yRJmCBqTjDs95qA"><img
                        src="keshi.jpg" alt=""></a>

                    <a href="https://open.spotify.com/album/0X4X4hGytNt85z9zZQW8F9?si=N0o9gCdDSQm2Q9Z4S5eogw"><img 
                    src="rini.jpg" alt=""></a>
                    
                    <a href="https://open.spotify.com/album/43G5319YT74MbuRtxodpi9?si=GCW6bz-SQzuBlewDdvArrw"><img 
                        src="ruel.jpg" alt=""></a>

                    <a href="https://open.spotify.com/album/14DbuWegTlHKKUW1WfUdny?si=Tf2RTWohQIq3J5qV9TgyPg"><img 
                        src="destinconradjpg.jpg" alt=""></a>

                    <a href="https://open.spotify.com/album/2RLFOTUVkm6hCb933QRvm7?si=cKjLAarKToyaJKtfvhelXw"><img 
                        src="dvwn.jpg" alt=""></a>

                    <a href="https://open.spotify.com/album/4lPqFAvgmG97pxyxQsyCQx?si=gChU2yrmTKG8Pl0hRRdy5Q"><img
                         src="summerwalker.jpg" alt=""></a>

                    <a href="https://open.spotify.com/album/7kbMCxBkRLj9aY7aFpf9XS?si=0oI2ynjKRkqDoNiw0pfA0Q"><img 
                        src="wavetoearth.jpg" alt=""></a>

                    <a href="https://open.spotify.com/album/5TnhadWuOvDRWvBME19h31?si=kSPDESgDR0CkuQytKwW9vg"><img 
                        src="jooyoung.jpg" alt=""></a>
                </div>
            </div>

        </div>
    </section>


    <!-- products section ends -->

    <section class="sucs" id="subscribe">

        <h1 class="heading"> <span>Subscribe</span> us </h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="First name" class="box">
                <input type="text" placeholder="Last name" class="box">
                <input type="email" placeholder="Email" class="box">
                <input type="submit" value="Subscribe" class="btn">
            </form>
        </div>
    </section>

    <!-- footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Album</a>
                <a href="#">Subscribe</a>

            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#">My favorite</a>
            </div>

            <div class="box">
                <h3>Locations</h3>
                <a href="#">MALAYSIA</a>
                <a href="#">SINGAPORE</a>
                <a href="#">SOUTH KOREA</a>
                <a href="#">NEW ZEALAND</a>

            </div>


            <div class="box">
                <h3>Contact info</h3>
                <a href="#">+6019-644-8279</a>
                <a href="#">example@al8bum.com</a>
                <a href="#">Kuala Lumpur, Malaysia</a>
            </div>

            <div class="credit">Created by <span> Miss Web Designer</span> | all rights reserved</div>
        </div>
    </section>
    <!-- footer -->

</body>

</html>