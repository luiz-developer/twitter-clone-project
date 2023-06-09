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

<body class="body darkmode">
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
      <div class="menu-bottom-mobile">
         <ul>
            <!--Mobile icons-->
            <li class="mobie-item">
               <a href="#">
                  <i class="bx bxs-home-circle selected"></i>
               </a>
            </li>
            <li class="mobile-item">
               <a href="#">
                  <i class="bx bx-search"></i>
               </a>
            </li>
            <li class="mobile-item">
               <a href="#">
                  <i class="bx bx-user"></i>
               </a>
            </li>
            <li class="mobile-item">
               <a href="#">
                  <i class="bx bx-bell"></i>
               </a>
            </li>
            <li class="mobile-item">
               <a href="#">
                  <i class="bx bx-envelope"></i>
               </a>
            </li>
         </ul>
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
                           <input type="text" name="user-tweet-name" class="user-tweet-name" placeholder="Name"
                              maxlength="35" required />
                           <div class="">
                              <span>@</span>
                              <input type="text" name="user-tweet-username" class="user-tweet-username"
                                 placeholder="Username" maxlength="15" required />
                           </div>
                        </div>
                        <div class="">
                           <input type="text" onchange="cum()" class="user-profile-picture" name="user-profile-picture"
                              placeholder="Profile picture image link (not obligatory)" />
                        </div>
                        <textarea name="tweet-textarea" class="tweet-textarea" maxlength="280"
                           placeholder="What's happening?" required></textarea>
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
                        <div class="btn-tweet-confirm" onclick="cu()">
                           <button type="submit">Tweet</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="tweet-container">
            <?php
               require __DIR__ . '/vendor/autoload.php'; 
               //back4app sdk
               
               use Parse\ParseClient;
               use Parse\ParseObject;
               use Parse\ParseQuery;

               // app keys
               ParseClient::initialize('UdrdFpwyKGjl1MM5qiqXwqvmbfASxbq3WRswwrPy', '1iKwPZzlntMhisQ41mDR9GeGO4ERhTiqAOQKVrN4', 'bvlkmF1cGMfOkPe3Gshtun9J0wg8TzzzVtZ5QcLj');
               ParseClient::setServerURL('https://parseapi.back4app.com/', '/parse');

               //db conection
               $query = new ParseQuery('Tweet');
               $query->descending('createdAt');
               $results = $query->find();

               //show tweets
               foreach ($results as $object) {
                  
                  $profile_pic_url = $object->get('image');
                  $profile_pic_info = @getimagesize($profile_pic_url); 
                  
                  if ($profile_pic_info !== false) { 
                     $sucess_image_url = $profile_pic_url; 
                  } else {
                     $sucess_image_url = 'img/defalt-avatar.png'; 
                  }
                  
                  if (strlen($object->get('name')) >= 10) {
                     $new_name = substr($object->get('name'), 0, 8). '...';
                  } else {
                     $new_name = $object->get('name');
                  }
                  
                  echo '<div class="tweet" id="'. $object->get('tweet_id') .'"><div class="tweet-content" ><div class="tweet-profile-infors"><div class="user-tweet-profile-picture"><img class="ab-profile tweet-profile-picture" src="'.$sucess_image_url.'" alt="Profile Picture" /></div><div class="tweet-profile-name"><p class="tweet-name">'.$new_name.'</p><p class="tweet-username">@'. substr($object->get('username'), 0, 16).'</p><p class="dot-style">•</p><p class="date">'.$object->get('date').'</p></div></div><div class="tweet-text"><p>'. $object->get('tweet')  .'</p></div><div class="tweet-icons"><i class="bx bx-comment"></i><i class="bx bx-repost"></i><i class="bx bx-heart"></i><i class="bx bx-bookmark"></i></div></div></div>';
               }
            ?>
         </div>
      </div>
   </div>
   <a href="#">
      <button class="mobile-tweet-btn">
         <img class="feather-icon" src="img/pena.svg" alt="" />
      </button>
   </a>
   <div class="overlay">
      
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
      toggleThemeBtn.addEventListener("click", () => {
         if (localStorage.getItem("themeMode") === "dark") {
            localStorage.setItem("themeMode", "light");
         } else {
            localStorage.setItem("themeMode", "dark");
         }
         changeTheme();
      });

         
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
      
      console.log(localStorage.getItem('themeMode'))
      changeTheme();
   </script>
   <script src="js/app.js"></script>
   <script src="js/mobile-menu.js"></script>
   <script src="js/who-to-follow-content.js"></script>
</body>

</html>