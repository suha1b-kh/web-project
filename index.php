<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Sale</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!--Navbar-->
  <header>
    <!--Nav Container-->
    <div class="nav container">
      <!--Menu Icon-->
      <i class="bx bx-menu" id="menu-icon"></i>
      <!--Logo-->
      <a href="#" class="logo">Car<span>Point</span></a>
      <!--Nav List-->
      <ul class="navbar">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#cars">Cars</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#parts">Parts</a></li>
        <li><a href="#blog">Our Blog</a></li>
      </ul>
      <!--Search Icon-->
      <i class="bx bx-search" id="search-icon"></i>
      <!--Search Box-->
      <div class="search-box container">
        <input type="search" name="" id="" placeholder="Search here..." />
      </div>
      <a href="edit.html" class="edit">edit profile</a>
      <a href="delete.html" class="edit">delete profile</a>
      <a href="login.html" class="edit">Log out</a>



    </div>
  </header>

  <section class="home" id="home">
    <div class="home-text">
      <h1>We Have Everything <br />Your <span>Car</span> Need</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur <br />adipisicing elit.
        Tempora, at.
      </p>
      <!--Home Button-->
      <a href="#" class="btn">Discover Now</a>
    </div>
  </section>
  <section class="cars" id="cars">
    <div class="heading">
      <span>All Cars</span>
      <h2>We have all types cars</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, soluta.
      </p>
    </div>
    <div class="cars-container container">
      <!-- Box 1 -->
      <div class="box">
        <img src="img/car1.jpg" alt="" />
        <h2>Porche Car</h2>
      </div>
      <!-- Box 2 -->
      <div class="box">
        <img src="img/car2.jpg" alt="" />
        <h2>Porche Car</h2>
      </div>
      <!-- Box 3 -->
      <div class="box">
        <img src="img/car3.jpg" alt="" />
        <h2>Porche Car</h2>
      </div>
      <!-- Box 4 -->
      <div class="box">
        <img src="img/car4.jpg" alt="" />
        <h2>Porche Car</h2>
      </div>
      <!-- Box 5 -->
      <div class="box">
        <img src="img/car5.jpg" alt="" />
        <h2>Porche Car</h2>
      </div>
      <!-- Box 6 -->
      <div class="box">
        <img src="img/car6.jpg" alt="" />
        <h2>Porche Car</h2>
      </div>
    </div>
  </section>
  <!--About-->
  <section class="about container" id="about">
    <div class="about-img">
      <img src="img/about.png" alt="" />
    </div>
    <div class="about-text">
      <span>About Us</span>
      <h2>Cheap Prices With <br />Quality Cars</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
        maxime dicta minima reiciendis, eius asperiores?
      </p>
      <!--About Button -->
      <a href="#" class="btn">Learn More</a>
    </div>
  </section>
  <!--Parts Section-->
  <section class="parts" id="parts">
    <div class="heading">
      <span>What We Offer</span>
      <h2>Our Car Is Always Excellent</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, rem?</p>
    </div>
    <!--Parts Container-->
    <div class="parts-container container">
      <!-- Box 1 -->
      <div class="box">
        <img src="img/part1.png" alt="" />
        <h3>Auto Spare Parts</h3>
        <span>$120.99</span>
        <i class="bx bxs-star">(6 Reviews)</i>
        <a href="#" class="btn">Buy Now</a>
        <a href="#" class="details">View Details</a>
      </div>
      <!-- Box 2 -->
      <div class="box">
        <img src="img/part2.png" alt="" />
        <h3>Auto Spare Parts</h3>
        <span>$120.99</span>
        <i class="bx bxs-star">(6 Reviews)</i>
        <a href="#" class="btn">Buy Now</a>
        <a href="#" class="details">View Details</a>
      </div>
      <!-- Box 3 -->
      <div class="box">
        <img src="img/part3.png" alt="" />
        <h3>Auto Spare Parts</h3>
        <span>$120.99</span>
        <i class="bx bxs-star">(6 Reviews)</i>
        <a href="#" class="btn">Buy Now</a>
        <a href="#" class="details">View Details</a>
      </div>
      <!-- Box 4 -->
      <div class="box">
        <img src="img/part4.png" alt="" />
        <h3>Auto Spare Parts</h3>
        <span>$120.99</span>
        <i class="bx bxs-star">(6 Reviews)</i>
        <a href="#" class="btn">Buy Now</a>
        <a href="#" class="details">View Details</a>
      </div>
      <!-- Box 5 -->
      <div class="box">
        <img src="img/part5.png" alt="" />
        <h3>Auto Spare Parts</h3>
        <span>$120.99</span>
        <i class="bx bxs-star">(6 Reviews)</i>
        <a href="#" class="btn">Buy Now</a>
        <a href="#" class="details">View Details</a>
      </div>
      <!-- Box 6 -->
      <div class="box">
        <img src="img/part6.png" alt="" />
        <h3>Auto Spare Parts</h3>
        <span>$120.99</span>
        <i class="bx bxs-star">(6 Reviews)</i>
        <a href="#" class="btn">Buy Now</a>
        <a href="#" class="details">View Details</a>
      </div>
    </div>
  </section>

  <section class="blog" id="blog">
    <div class="heading">
      <span>Blog & News</span>
      <h2>Our Blog Content</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, optio.
      </p>
    </div>
    <!--Blog Container-->
    <div class="blog-container container">
      <!--Box 1-->
      <div class="box">
        <img src="img/car1.jpg" alt="" />
        <span>July 21 2022</span>
        <h3>How To Get Perfect Car At Low Price</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ab.
        </p>
        <a href="#" class="blog-btn">Read More<i class="bx bx-right-arrow-alt"></i></a>
      </div>
      <!--Box 2-->
      <div class="box">
        <img src="img/car2.jpg" alt="" />
        <span>July 21 2022</span>
        <h3>How To Get Perfect Car At Low Price</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ab.
        </p>
        <a href="#" class="blog-btn">Read More<i class="bx bx-right-arrow-alt"></i></a>
      </div>
      <!--Box 3-->
      <div class="box">
        <img src="img/car3.jpg" alt="" />
        <span>July 21 2022</span>
        <h3>How To Get Perfect Car At Low Price</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ab.
        </p>
        <a href="#" class="blog-btn">Read More<i class="bx bx-right-arrow-alt"></i></a>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <section class="footer">
    <div class="footer-container container">
      <div class="footer-box">
        <a href="#" class="logo">Car<span>Point</span></a>
        <a href="#" class="logo">our Socialmedia Accounts</span></a>
        <div class="social">
          <a href="#"><i class="bx bxl-facebook-circle"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
        <div class="social">
          <a href="#"><i class="bx bxl-facebook-circle"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>
      <div class="footer-box">
        <h3>Page</h3>
        <a href="#">Home</a>
        <a href="#cars">Cars</a>
        <a href="#parts">Parts</a>
        <a href="#">Sales</a>
      </div>
      <div class="footer-box">
        <h3>Legal</h3>
        <a href="#">Privacy</a>
        <a href="#">Refund Policy</a>
        <a href="#">Cookie Policy</a>
      </div>
      <div class="footer-box">
        <h3>Contact</h3>
        <p>United States</p>
        <p>Japan</p>
        <p>Germany</p>
      </div>
    </div>
  </section>
  <!--Copyright-->
  <div class="copyright">
    <p>Suhaib khazaleh</p>
    <p>Ahmad Aldawaimeh</p>
    <p>&#169: All Right Reserved</p>
  </div>

</body>

</html>