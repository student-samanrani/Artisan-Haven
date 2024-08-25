<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
  <title>artisan haven</title>
</head>
<body>
  <header>

    <div id="menu-bar" class="fas fa-bars"></div>
    
  <a href="#" class = "logo"> <span class = "artisan"> Artisan </span> <span class = "haven">haven</span></a>

  

  <nav class="navbar">
    <a href="/">home</a>
    <a href="/collection">collections</a>
    <a href="">Artists</a>
    <a href="/abt">About Us</a>
    <a href="/contact">Contact Us</a>
  </nav>   
  <div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <i class="fas fa-user" id="login-btn"></i>
  </div>
  <form action="" class="search-bar-container">
    <input type="search" id="search-bar" placeholder="search here">
    <label for="search-bar" class ="fas fa-search"></label>
  </form>
  </header>

  <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
      <h3>login</h3>
      <input type="email"  class="box" placeholder="enter your email">
      <input type="password"  class="box" placeholder="enter your password">
      
      <p>forget password? <a href="#">click here</a></p>
      <p>don't have an account? <a href="#">registere now</a></p>
      <input type="submit"  value="login now" class="btn">
      <input type="checkbox"  id ="remember">
      <label for="remember">remember me</label>

    </form>
  </div>



  <script src="{{asset('assets/js/home.js')}}"></script>

</body>
</html>