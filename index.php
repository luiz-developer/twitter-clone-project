<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Twitter Clone | Home</title>
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/darkmode-style.css" />
   <link rel="stylesheet" href="css/home.css" />
   <link rel="stylesheet" href="css/left-menu.css" />
   <link rel="stylesheet" href="css/right-menu.css" />
   <link rel="stylesheet" href="css/animations.css" />
   <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body class="body">
   <div class="container">
      <!---left menu-->
      <div class="left-menu">
         <div class="left-menu-content">
            <div class="twitter-logo-container">
               <i class="bx bxl-twitter twitter-logo"></i>
            </div>
            <ul class="itens">
               <!--Pc and big screen menu itens-->
               <li class="item big-screen">
                  <a href="#" class="selected">
                     <i class="bx bxs-home-circle"></i>
                     <span>Home</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-hash"></i>
                     <span>Explore</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-bell"></i>
                     <span>Notifications</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-envelope"></i>
                     <span>Messages</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-bookmark"></i>
                     <span>Bookmarks</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-message-square-detail"></i>
                     <span>Lists</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-user"></i>
                     <span>Profile</span>
                  </a>
               </li>
               <li class="item big-screen">
                  <a href="#">
                     <i class="bx bx-dots-horizontal-rounded"></i>
                     <span>More</span>
                  </a>
               </li>
               <li class="item big-screen mode-btn">
                  <a>
                     <i class="bx icon-theme bx-moon"></i>
                     <span class="mode-text">Darkmode</span>
                  </a>
               </li>
               <!--Mobile icons-->
               <li class="item mobile-screen">
                  <a href="#">
                     <i class="bx bxs-home-circle selected"></i>
                  </a>
               </li>
               <li class="item mobile-screen">
                  <a href="#">
                     <i class="bx bx-search"></i>
                  </a>
               </li>
               <li class="item mobile-screen">
                  <a href="#">
                     <i class="bx bx-user"></i>
                  </a>
               </li>
               <li class="item mobile-screen">
                  <a href="#">
                     <i class="bx bx-bell"></i>
                  </a>
               </li>
               <li class="item mobile-screen">
                  <a href="#">
                     <i class="bx bx-envelope"></i>
                  </a>
               </li>
            </ul>
            <!--tweet button-->
            <div class="tweet-btn-container">
               <button class="tweet-btn" type="submit">
                  <img class="feather-icon" src="img/pena.svg" alt="" />
                  <span>Tweet</span>
               </button>
            </div>
         </div>
      </div>
      <!--right menu-->
      <div class="right-menu">
         <div class="right-menu-content">
            <!--search input-->
            <form class="search-form">
               <i class="bx bx-search"></i>
               <input type="search" name="search-input" id="search-input" class="search-input"
                  placeholder="Search Twitter" />
            </form>
            <!--trends section-->
            <div class="trending-container">
               <div class="trending-text-heading">
                  <p class="trending-text">
                     Trends for you
                  </p>
               </div>
               <div class="trending-content"></div>
               <div class="show-more-footer">
                  <p class="show-more-btn">
                     Show more
                  </p>
               </div>
            </div>
            <!--who to follow section-->
            <div class="suggestion-container">
               <div class="suggestion-text-heading">
                  <p class="suggestion-text">
                     Who to follow
                  </p>
               </div>
               <div class="suggestion-content"></div>
               <div class="show-more-footer">
                  <p class="show-more-btn">
                     Show more
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!--home content-->
      <div class="home-container">
         <div class="home-heading">
            <div class="menu-open-and-logo">
               <img class="menu-mobile-profile-pic" src="img/defalt-avatar.png" alt="Menu profile picture" />
               <i class="bx bxl-twitter twitter-heading-logo"></i>
            </div>
            <p>
               Home
            </p>
         </div>
         <div class="home-content">
            <!--tweet inputs area-->
            <div class="tweet-area">
               <div class="profile-pictire-tweet">
                  <!--profile picture-->
                  <img class="tweet-profile-picture" src="img/defalt-avatar.png" alt="Profile Picture" />
               </div>
               <div class="textareas">
                  <!--tweet message textarea-->
                  <form method="POST" action="db/tweet.php">
                     <div class="t-area-div">
                        <div class="tweet-infors">
                           <input type="text" name="user-tweet-name" class="user-tweet-name" placeholder="Name" maxlength="35" />
                           <div class="">
                              <span>@</span>
                              <input type="text" name="user-tweet-username" class="user-tweet-username" placeholder="Username" maxlength="15" />
                           </div>
                        </div>
                        <textarea name="tweet-textarea" class="tweet-textarea" maxlength="280"
                           placeholder="What's happening?"></textarea>
                        <div class="tweet-caracters-infor">
                           <pre class="caracter-infor">0/200</pre>
                        </div>
                     </div>
                     <!--btns icons, btns and infors-->
                     <div class="infors">
                        <div class="icons">
                           <i class="bx bx-image"></i>
                           <i class="bx bx-smile"></i>
                        </div>
                        <!--btn to make a tweet-->
                        <div class="btn-tweet-confirm">
                           <button type="submit">Tweet</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="tweet-container">
            <div class="tweet">
               <div class="tweet-profile-infors">
                  <div class="user-tweet-profile-picture">
                     <img class="ab-profile tweet-profile-picture" src="img/defalt-avatar.png" alt="Profile Picture" />
                  </div>
                  <div class="tweet-profile-name">
                     <p class="tweet-name">
                        Mateus jr
                     </p>
                     <p class="tweet-username">
                        @macho
                     </p>
                     <p class="dot-style">
                        •
                     </p>
                     <p class="date">
                        3m
                     </p>
                  </div>
               </div>
               <div class="tweet-text">
                  <p>
                     lorem ipsun dolor ad labore magna officia tempor ut
                     qui aute laborum nulla id irure qui commodo deserunt
                     pariatur eu ut elit aliqua pariatur voluptate et eu
                  </p>
               </div>
               <div class="tweet-icons">
                  <i class='bx bx-comment'></i>
                  <i class='bx bx-repost'></i>
                  <i class='bx bx-heart'></i>
                  <i class="bx bx-bookmark"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
   <a href="#">
      <button class="mobile-tweet-btn">
         <img class="feather-icon" src="img/pena.svg" alt="" />
      </button>
   </a>
   </div>
   <script>
      //var of elements
const body = document.querySelector(".body");
const toggleThemeBtn = document.querySelector(".mode-btn");
const modeText = document.querySelector(".mode-text");
const iconTheme = document.querySelector(".icon-theme");

if (localStorage.getItem("themeMode") === null) {
localStorage.setItem("themeMode", "light");
}

//event listener
toggleThemeBtn.addEventListener("click", clickBtn);

function clickBtn() {
if (localStorage.getItem("themeMode") === "dark") {
localStorage.setItem("themeMode", "light");
} else {
localStorage.setItem("themeMode", "dark");
}
changeTheme();
}

function changeTheme() {
if (localStorage.getItem("themeMode") === "dark") {
body.classList.add("darkmode");
modeText.innerHTML = "Lightmode";
iconTheme.classList.remove("bx-moon");
iconTheme.classList.add("bx-sun");
} else {
body.classList.remove("darkmode");
modeText.innerHTML = "Darkmode";
iconTheme.classList.remove("bx-sun");
iconTheme.classList.add("bx-moon");
}
}

changeTheme();
   </script>
   <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
   <script src="js/firebase-config.js"></script>
   <script src="js/app.js"></script>
   <script src="js/who-to-follow-content.js"></script>
</body>

</html>