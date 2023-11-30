<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gamecademy</title>
    <!-- google font icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- local css file -->
    <link rel="stylesheet" type="text/css" href="Styles/BaseStyles.css" >
    <link rel="stylesheet" type="text/css" href="Styles/HomeStyles.css" >	
    <!-- js file -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	<script language="JavaScript" type="text/javascript" src="script.js"></script>
  </head>
  <body>
    <!-- header section starts -->
    <header class="header" id="header">
      <b><button id="nav-btn" onclick="toggle_nav()">&#9776;</button></b>
    </header>
    <!-- header section ends -->
    <nav class="navbar" id="navbar">
      <div class="absolute-center">
        <a href="index.php">home</a>
        <a href="#tutorials">tutorials</a>
        <a href="#blogs">blogs</a>
        <a href="#about">about</a>
        <a href="#cta">get started</a>
        <a href="login.php">log in</a>    
        <a href="registration.php">register</a> 
      </div>
    </nav>  
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
	 <img src="Image/header.png" alt="Clouds" id="header-img">
      <h1 class="hero-text">
        <span>Follow your curiosity.<br/> Learn how to make games.</span>
      </h1>
      <p>GAMECADEMY</p>
	  <button class="primary-button button" role="button">Get Started For Free</button>  
	  
    </section>
    <!-- home section ends -->

    <!-- tutorials section starts -->
    <section class="tutorials" id="tutorials">
      <h1 class="heading"><span>Free</span> Tutorials for Beginners</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="Image/fighting-game.png" alt="" />
            <div class="content card">
              <h2>How to Make a 3D Fighting Game with Godot</h2>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ullam, sed aperiam
				 molestiae autem nulla.</p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="Image/fps.png" alt="" />
            <div class="content card">
              <h2>Make your first 3D game with Godot and Blender</h2>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ullam, sed aperiam
				 molestiae autem nulla.</p>			  
            </div>
          </div>
        </div>
      </div>
	  <button class="button secondary-button center" role="button">View All</button>  
    </section>
    <!-- tutorials section ends -->
    <!-- blogs section starts -->
    <section class="blogs dirty-white-bg" id="blogs">
      <h1 class="heading">Quick <span>Tips</span> and <span>Tricks</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="Image/code.png" alt="" />
          </div>
          <div class="content">
            <h2>creative product designer from facebook</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi ut repudiandae,
              adipisci sed esse velit.
            </p>
            <span><i class="material-icons"> calendar_today </i> Jan 9, 2022</span>
            <span><i class="material-icons"> chat_bubble_outline </i> 5 comments</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="Image/code.png" alt="" />
          </div>
          <div class="content">
            <h2>creative product designer from facebook</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi ut repudiandae,
              adipisci sed esse velit.
            </p>
            <span><i class="material-icons"> calendar_today </i> Jan 9, 2022</span>
            <span><i class="material-icons"> chat_bubble_outline </i> 5 comments</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="Image/code.png" alt="" />
          </div>
          <div class="content">
            <h2>creative product designer from facebook</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi ut repudiandae,
              adipisci sed esse velit.
            </p>
            <span><i class="material-icons"> calendar_today </i> Jan 9, 2022</span>
            <span><i class="material-icons"> chat_bubble_outline </i> 5 comments</span>
          </div>
        </div>
      </div>
	  <button class="button secondary-button center" role="button">View All</button>  
    </section>
    <!-- blogs section ends -->	
	
    <!-- about section starts -->
    <section class="about white-bg" id="about">
      <div class="box-container">
        <div class="box">
          <h1 class="heading">about <span>me</span></h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam corporis minima
            temporibus iste unde dolor beatae, delectus architecto et? Assumenda sint quas dicta
            itaque ipsa. Quae cum reiciendis ut quo.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nemo necessitatibus
            eius? In, nesciunt veritatis?
          </p>
		  <button class="button secondary-button" role="button">Hire Me</button> 	
		  <button class="button secondary-button" role="button">Download CV</button> 		  		  
        </div>
      </div>
    </section>
    <!-- about section ends -->

    <!-- services section starts -->
    <section class="services dirty-white-bg" id="services">
      <h1 class="heading">my <span>services</span></h1>
      <div class="box-container">
        <div class="box">
          <i class="icon material-icons"> grid_view </i>
          <h2>web design</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur architecto reiciendis
            vel harum officiis velit vitae tempore obcaecati asperiores pariatur.
          </p>
          <a href="#" class="btn-2">learn more <i class="material-icons"> navigate_next </i></a>
        </div>
        <div class="box">
          <i class="icon material-icons"> poll </i>
          <h2>tutorials</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur architecto reiciendis
            vel harum officiis velit vitae tempore obcaecati asperiores pariatur.
          </p>
          <a href="#" class="btn-2">learn more <i class="material-icons"> navigate_next </i></a>
        </div>
        <div class="box">
          <i class="icon material-icons"> smart_display </i>
          <h2>video editing</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur architecto reiciendis
            vel harum officiis velit vitae tempore obcaecati asperiores pariatur.
          </p>
          <a href="#" class="btn-2">learn more <i class="material-icons"> navigate_next </i></a>
        </div>
      </div>
    </section>
    <!-- services section ends -->
 
    <!-- clients section starts -->
    <section class="clients white-bg" id="clients">
      <h1 class="heading"><span>testimonials</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="Image/user-profile.png" alt="" />
          </div>
          <div class="content">
            <p>
              "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam dolore beatae
              recusandae magnam veniam molestias modi nobis unde. "
            </p>
            <p>- ethan, CEO <span>XYZ Inc</span></p>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="Image/user-profile.png" alt="" />
          </div>
          <div class="content">
            <p>
              "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam dolore beatae
              recusandae magnam veniam molestias modi nobis unde. "
            </p>
            <p>- ethan, CEO <span>XYZ Inc</span></p>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="Image/user-profile.png" alt="" />
          </div>
          <div class="content">
            <p>
              "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam dolore beatae
              recusandae magnam veniam molestias modi nobis unde. "
            </p>
            <p>- ethan, CEO <span>XYZ Inc</span></p>
          </div>
        </div>
      </div>
    </section>
    <!-- clients section ends -->
	<!-- cta starts -->
    <section class="cta" id="cta">

	  <div class="cta-box">
		  <h1 class="heading"><span>Ready to Get Started?</span></h1>
		  <p>Make your ideas come to life for free, with Gamecademy.</p>
		  <button class="button primary-button center">Get Started for Free</button>
	  </div>
    </section>	
	<!-- cta ends -->
    <!-- footer section starts -->
    <section class="footer" id="footer">
      <div class="socials">
        <ion-icon name="logo-google"></ion-icon>
        <ion-icon name="logo-twitter"></ion-icon>
        <ion-icon name="logo-youtube"></ion-icon>
        <ion-icon name="logo-linkedin"></ion-icon>
      </div>
      <p>designed and developed by Angela Parahinog</p>
    </section>
    <!-- footer section ends -->
    <!-- ionicons cdn -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
  </body>
</html>
