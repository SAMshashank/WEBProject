<?php
session_start();

if(!isset($_SESSION['username'])) {
    include_once("index.php");
    exit;
 }
?>
<!DOCTYPE html>


<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Movie Pro Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Movie Pro" />
    <meta name="keywords" content="Movie Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/dl-menu.css" />
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
    
</head>
<style>
    main{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
main div{
    width: 250px;
    height: 320px;
    margin: 19px 15px;
    background: red;
}
img{
    width: 100%;
    height: 89%;
    object-fit: cover;
}
h2{
    font-size: 20px;
    font-family: sans-serif;
    font-weight: bold;
    text-align: center;
    color: #fff;
}
.btx{
    color:black;

}
.btx:hover{background:pink;
}
.btx:visited { color:#ccc; }

.btx:focus { color:red; }
.btx:active { color:#cc0; }

</style>
<body >
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
        </div>
    </div>
   
    
    <!-- color picker start -->

    <!-- prs Slider End -->
    <!-- prs navigation Start -->
    
    <div class="prs_navigation_main_wrapper ">
        <div class="container-fluid">
            <div id="search_open" class="gc_search_box">
                <input type="text" placeholder="Search here">
                <button><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="prs_navi_left_main_wrapper">
                <div class="prs_menu_main_wrapper">
                    <nav class="navbar navbar-default">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <button class="dl-trigger">
                                <img src="images/header/bars.png" alt="bar_png">
                            </button>
                            <div class="prs_mobail_searchbar_wrapper" id="search_button"> <i class="fa fa-search"></i>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="dl-menu">
                                <li class="parent"><a href="#">Home</a>
                                    
                                </li>
                                <li class="parent "><a class="whitelist" href="#">whitelist</a>
                                </li>
                                        
                                                
                                <li class="parent"><a href="contact.html">contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /dl-menuwrapper -->
                    </nav>
                </div>
                <div class="prs_logo_main_wrapper">
                    <a href="index.html">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46.996px" height="40px"
                            viewBox="0 0 46.996 40" enable-background="new 0 0 46.996 40" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M39.919,19.833C39.919,8.88,30.984,0,19.959,0C8.937,0,0,8.88,0,19.833
			c0,10.954,8.937,19.834,19.959,19.834C30.984,39.666,39.919,30.787,39.919,19.833z M35.675,14.425
			c0.379,0,0.686,0.307,0.686,0.683s-0.305,0.683-0.686,0.683c-0.38,0-0.688-0.307-0.688-0.683S35.295,14.425,35.675,14.425z
			 M34.482,20.461c0,0.491-0.025,0.976-0.071,1.452l-11.214-4.512l6.396-7.733C32.592,12.311,34.482,16.167,34.482,20.461z
			 M19.083,2.277c0.379,0,0.687,0.305,0.687,0.682c0,0.378-0.306,0.684-0.687,0.684c-0.378,0-0.686-0.306-0.686-0.684
			C18.396,2.584,18.704,2.277,19.083,2.277z M19.959,6.031c1.916,0,3.743,0.372,5.416,1.042l-6.335,7.662l-6.252-6.82
			C14.906,6.718,17.351,6.031,19.959,6.031z M3.128,16.473c-0.378,0-0.687-0.306-0.687-0.684c0-0.377,0.307-0.682,0.687-0.682
			c0.38,0,0.686,0.305,0.686,0.682C3.814,16.167,3.508,16.473,3.128,16.473z M5.535,22.119c-0.063-0.545-0.098-1.098-0.098-1.658
			c0-3.612,1.339-6.911,3.547-9.444l6.502,7.095L5.535,22.119z M10.462,35.354c-0.379,0-0.687-0.306-0.687-0.683
			s0.307-0.682,0.687-0.682c0.379,0,0.687,0.305,0.687,0.682S10.842,35.354,10.462,35.354z M6.925,26.828l10.4-4.186l0.239,12.052
			C12.88,33.921,8.956,30.922,6.925,26.828z M19.513,22.326c-1.529,0-2.771-1.232-2.771-2.752c0-1.521,1.241-2.753,2.771-2.753
			c1.53,0,2.771,1.232,2.771,2.753C22.284,21.096,21.043,22.326,19.513,22.326z M29.939,33.99c-0.378,0-0.686-0.308-0.686-0.683
			c0-0.377,0.307-0.683,0.686-0.683s0.688,0.306,0.688,0.683C30.626,33.683,30.319,33.99,29.939,33.99z M22.482,34.672
			l-0.246-12.388l10.846,4.365C31.098,30.799,27.177,33.854,22.482,34.672z M35.314,34.585c-1.837,1.531-6.061,4.306-6.061,4.306
			C37.652,36.448,45.953,40,45.953,40l1.043-8.658C41.41,30.454,38.125,32.244,35.314,34.585z" />
                                </g>
                            </g>
                        </svg><br><span>Movie Wallah</span>
                    </a>
                </div>
            </div>
            <div class="prs_navi_right_main_wrapper">
                <div class="prs_slidebar_wrapper">
                    <button class="second-nav-toggler" type="button">
                        <img src="images/header/bars.png" alt="bar_png">
                    </button>
                </div>
                <div class="prs_top_login_btn_wrapper">
                    <div class="prs_animate_btn1">
                        <ul>
                        <li><a href="home.php" href="<?php echo  session_destroy(); ?>" class="button button--tamaya" data-text="<?php echo $_SESSION['username'];?>" ><span>Logout</span></a>
                                </li>
                         
                    </div>
                </div>
                <form id="form">
                <div class="product-heading">
                    <div class="con">
                        <select>
                            <option>All Categories</option>
                            <option>Movie</option>
                           
                            
                        </select>
                       
            <input
                type="text"
                id="search"
                placeholder="Search"
                class="search"
            />
        </form>
                    </div>
                </div>
            </div>
            <div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
                <div class="mobail_nav_overlay"></div>
                <div class="mobile-nav-box">
                    <div class="mobile-logo">
                        <a href="index.html" class="mobile-main-logo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46.996px"
                                height="40px" viewBox="0 0 46.996 40" enable-background="new 0 0 46.996 40"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M39.919,19.833C39.919,8.88,30.984,0,19.959,0C8.937,0,0,8.88,0,19.833
			c0,10.954,8.937,19.834,19.959,19.834C30.984,39.666,39.919,30.787,39.919,19.833z M35.675,14.425
			c0.379,0,0.686,0.307,0.686,0.683s-0.305,0.683-0.686,0.683c-0.38,0-0.688-0.307-0.688-0.683S35.295,14.425,35.675,14.425z
			 M34.482,20.461c0,0.491-0.025,0.976-0.071,1.452l-11.214-4.512l6.396-7.733C32.592,12.311,34.482,16.167,34.482,20.461z
			 M19.083,2.277c0.379,0,0.687,0.305,0.687,0.682c0,0.378-0.306,0.684-0.687,0.684c-0.378,0-0.686-0.306-0.686-0.684
			C18.396,2.584,18.704,2.277,19.083,2.277z M19.959,6.031c1.916,0,3.743,0.372,5.416,1.042l-6.335,7.662l-6.252-6.82
			C14.906,6.718,17.351,6.031,19.959,6.031z M3.128,16.473c-0.378,0-0.687-0.306-0.687-0.684c0-0.377,0.307-0.682,0.687-0.682
			c0.38,0,0.686,0.305,0.686,0.682C3.814,16.167,3.508,16.473,3.128,16.473z M5.535,22.119c-0.063-0.545-0.098-1.098-0.098-1.658
			c0-3.612,1.339-6.911,3.547-9.444l6.502,7.095L5.535,22.119z M10.462,35.354c-0.379,0-0.687-0.306-0.687-0.683
			s0.307-0.682,0.687-0.682c0.379,0,0.687,0.305,0.687,0.682S10.842,35.354,10.462,35.354z M6.925,26.828l10.4-4.186l0.239,12.052
			C12.88,33.921,8.956,30.922,6.925,26.828z M19.513,22.326c-1.529,0-2.771-1.232-2.771-2.752c0-1.521,1.241-2.753,2.771-2.753
			c1.53,0,2.771,1.232,2.771,2.753C22.284,21.096,21.043,22.326,19.513,22.326z M29.939,33.99c-0.378,0-0.686-0.308-0.686-0.683
			c0-0.377,0.307-0.683,0.686-0.683s0.688,0.306,0.688,0.683C30.626,33.683,30.319,33.99,29.939,33.99z M22.482,34.672
			l-0.246-12.388l10.846,4.365C31.098,30.799,27.177,33.854,22.482,34.672z M35.314,34.585c-1.837,1.531-6.061,4.306-6.061,4.306
			C37.652,36.448,45.953,40,45.953,40l1.043-8.658C41.41,30.454,38.125,32.244,35.314,34.585z" />
                                    </g>
                                </g>
                            </svg><span>Movie Wallah</span>
                        </a>
                        <a href="#" class="manu-close"><i class="fa fa-times"></i></a>
                    </div>
                    <ul class="mobile-list-nav">
                        <li><a href="home.php">Home</a>
                        </li>
                        <li><a class= "whitelist" href="#">whitelist</a>
                        </li>
                       
                        <li><a href="contact.html">CONTACT</a>
                        </li>
                    </ul>
                    <div class="prs_top_login_btn_wrapper prs_slidebar_searchbar_btn_wrapper">
                        <div class="prs_animate_btn1">
                            <ul>
                                <li><a href="home.php" href="<?php echo  session_destroy(); ?>" class="button button--tamaya" data-text="<?php echo $_SESSION['username'];?>" ><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                     </div>
                   
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- prs navigation End -->
    <!-- prs upcomung Slider Start -->
   
    <div class="prs_upcom_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2> Movies</h2>
                    </div>
                </div>
            
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                <div class="champa"><main id="main"></main></div>
                                
                                <br>
                                    
                                </div>
                            </div>
                        </div>
                        
                    
              
    <!-- prs upcomung Slider End -->
    <!-- prs theater Slider Start -->
    
    <!-- prs patner slider End -->
    <!-- prs Newsletter Wrapper Start -->
    <div class="prs_newsletter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="prs_newsletter_text">
                        <h3>Get update sign up now !</h3>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="prs_newsletter_field">
                        <input type="text" placeholder="Enter Your Email">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs Newsletter Wrapper End -->
    <!-- prs footer Wrapper Start -->
    <div class="prs_footer_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_1">
                        <h2>LANGUAGE MOVIES</h2>
                        <ul>
                            <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">English movie</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_2">
                        <h2>MOVIES by presenter</h2>
                        <ul>
                            <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Action movie</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_3">
                        <h2>BOOKING ONLINE</h2>
                        <ul>
                            <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_4">
                        <h2>App will available on</h2>
                        <p>App will coming soon!</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="images/content/f1.jpg" alt="footer_img">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/content/f2.jpg" alt="footer_img">
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class="prs_bottom_footer_wrapper"> <a href="javascript:" id="return-to-top"><i
                class="flaticon-play-button"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="prs_bottom_footer_cont_wrapper">
                        <p>Copyright 2022-23 <a href="#">Movie Wallah</a> . All rights reserved - Design by <a
                                href="#">UJJWAL</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                    <div class="prs_footer_social_wrapper">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- prs footer Wrapper End -->
    <!-- st login wrapper Start -->
    
    
    <!-- st login wrapper End -->
    <!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/smothscroll_part1.js"></script>
    <script src="js/smothscroll_part2.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/custom2.js"></script>
    <!--main js file end-->
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
<script>
    const apiUrl = 'https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=04c35731a5ee918f014970082a0088b1&page=1';
const IMGPATH = "https://image.tmdb.org/t/p/w1280";
const SEARCHAPI =
    "https://api.themoviedb.org/3/search/movie?&api_key=04c35731a5ee918f014970082a0088b1&query=";
 
const main = document.getElementById("main");
const form = document.getElementById("form");

const search = document.getElementById("search");
 
showMovies(apiUrl);
function showMovies(url){
    fetch(url).then(res => res.json())
    .then(function(data){
    console.log(data.results);
    data.results.forEach(element => {
        const el = document.createElement('div');
        const image = document.createElement('img');
        const text = document.createElement('h2');
 
        text.innerHTML = `${element.title.substring(0,20)} <br><button class="btx">Add To List📃</button>  `;
        image.src = IMGPATH + element.poster_path;
        el.appendChild(image);
        el.appendChild(text);
        main.appendChild(el);
    });
});
}
// //whitelist


 
form.addEventListener("submit", (e) => {
    e.preventDefault();
    main.innerHTML = '';
    
    const searchTerm = search.value;
 
    if (searchTerm) {
        showMovies(SEARCHAPI + searchTerm);
        search.value = "";
    }
    var CT = "SHASHANK KUSHWAHA 12016677";
    
});

</script>


</body>

</html>