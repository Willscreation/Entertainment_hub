<?php
session_start();
// Check if the session variable 'user' is set
if (isset($_SESSION['user'])) {
    $is_logged_in = true;
} else {
    $is_logged_in = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="media.css">
    <title>Movie Streaming</title>
</head>
<body>
    <div class="hero-section">
        <!-- Initial Navbar -->
        <nav class="navbar" id="initialNavbar">
            <div class="logo"><img src="./imgs/logo.png" alt=""></div>
            <button id="signInOutBtn" onclick="toggleSignInOut()">
                <?php echo $is_logged_in ? 'Sign Out' : 'Sign In'; ?>
            </button>
        </nav>

        <!-- carousel -->
        <div class="carousel">
            <!-- list item -->
            <div class="list">
                <div class="item">
                    <img src="./imgs/img1.jpg">
                    <div class="content">
                        <div class="title">The Greatest of All Time</div>
                        <div class="buttons">
                            <button onclick="watchNow()">Watch Now</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./imgs/img2.jpg">
                    <div class="content">
                        <div class="title">Stree 2</div>
                        <div class="buttons">
                            <button onclick="watchNow()">Watch Now</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./imgs/img3.jpg">
                    <div class="content">
                        <div class="title">Stranger Things</div>
                        <div class="buttons">
                            <button onclick="watchNow()">Watch Now</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./imgs/img4.jpg">
                    <div class="content">
                        <div class="title">Kalki 2898 AD</div>
                        <div class="buttons">
                            <button onclick="watchNow()">Watch Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="./imgs/img1.jpg">
                    <div class="content">
                        <div class="title">
                            Name Slider
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./imgs/img2.jpg">
                    <div class="content">
                        <div class="title">
                            Name Slider
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./imgs/img3.jpg">
                    <div class="content">
                        <div class="title">
                            Name Slider
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./imgs/img4.jpg">
                    <div class="content">
                        <div class="title">
                            Name Slider
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows">
                <button id="prev" style="color: red;">
                    <h1></h1>
                </button>
                <button id="next" style="color: red;">
                    <h1>></h1>
                </button>
            </div>
            <!-- time running -->
            <div class="time"></div>


        </div>

        <div class="trending">
            <div class="cards" class="movie-banners">
                <h1>Recommended For You</h1>
                <div class="card-img">
                    <div class="banner" onclick="showVideo('video1.mp4')"><img src="./imgs/card 1/1.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video1.mp4')"><img src="./imgs/card 1/2.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video1.mp4')"><img src="./imgs/card 1/3.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video4.mp4')"><img src="./imgs/card 1/4.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video5.mp4')"><img src="./imgs/card 1/5.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video6.mp4')"><img src="./imgs/card 1/6.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video7.mp4')"><img src="./imgs/card 1/7.jpg" alt=""></div>
                </div>
            </div>
            <div class="cards" class="movie-banners">
                <h1>Recommended For You</h1>
                <div class="card-img">
                    <div class="banner" onclick="showVideo('video8.mp4')"><img src="./imgs/card2/1.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video9.mp4')"><img src="./imgs/card2/2.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video10.mp4')"><img src="./imgs/card2/3.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video11.mp4')"><img src="./imgs/card2/4.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video12.mp4')"><img src="./imgs/card2/5.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video13.mp4')"><img src="./imgs/card2/6.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video14.mp4')"><img src="./imgs/card2/7.jpg" alt=""></div>
                </div>
            </div>
            <div class="cards" id="card3" class="movie-banners">
                <h1>Recommended For You</h1>
                <div class="card-img">
                    <div class="banner" onclick="showVideo('video15.mp4')"><img src="./imgs/card3/1.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video16.mp4')"><img src="./imgs/card3/2.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video17.mp4')"><img src="./imgs/card3/3.jpg" alt=""></div>
                    <div class="banner" onclick="showVideo('video18.mp4')"><img src="./imgs/card3/4.jpg" alt=""></div>
                </div>
            </div>

        </div>
        <footer>
            <div>
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
            </div>
            &copy CopyWrited By Entertainment Hub
        </footer>

        <!-- <div class="movie-banners">
        <div class="banner" onclick="showVideo('video1.mp4')">Movie 1</div>
        <div class="banner" onclick="showVideo('video2.mp4')">Movie 2</div>
        <div class="banner" onclick="showVideo('video3.mp4')">Movie 3</div>
    </div> -->

        <!-- Video Popup -->
        <div id="videoPopup" class="popup" style="display: none;">
    <span class="close" onclick="closePopup()">&times;</span>
    <video id="videoPlayer" controls>
        <source id="videoSource" src="" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<script>
        function toggleSignInOut() {
            if (<?php echo json_encode($is_logged_in); ?>) {
                window.location.href = 'logout.php';
            } else {
                window.location.href = 'login.php';
            }
        }
        function showVideo(video) {
            if (!<?php echo json_encode($is_logged_in); ?>) {
                alert("Please sign in to watch movies.");
                window.location.href = 'login.php';
                return;
            }
            document.getElementById('videoSource').src = 'videos/' + video;
            document.getElementById('videoPlayer').load();
            document.getElementById('videoPopup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('videoPopup').style.display = 'none';
        }

    </script>
    <script src="main.js"></script>
    <script src="script.js"></script>
</body>
</html>