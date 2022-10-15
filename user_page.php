<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<link
  rel="stylesheet" href="stylesheet.css" 
/>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div id="page-wrapper">
  <header id="header">
    <div class="logo">
      <img
        id="header-img"
        src="_banner2.png"
        alt="Kimberly-clark logo"
      />
    
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#video">Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#product">Products</a>
            </li>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="container"></div>
  <br>
  <br>
  <br>
  <br>
  <section id="hero">
    <h2><strong>Kimberly-clark</strong></h2>
    <p>For more than a century, Kimberly-Clark has transformed ideas into innovative products.<br>
       We lead the world in providing essentials for a better life, and our global brands are a trusted<br>
       part of the lives of nearly one-quarter of the world's population in more than 175 countries.</p>
  </section>

  <div class="container">
    <section id="features">
      <div class="grid">
        <div class="icon"><i class="fa fa-3x fa-fire"></i></div>
        <div class="desc">
          <h2><strong>Upcoming live session with gynaecologist</strong></h2>
          <ul style="text-align: left;">
              <li>Date: 02/11/2022</li>
              <li>Time: 5PM</li>
              <li>Topic: PMS</li>
          </ul>
        </div>
      </div>
      <div class="grid">
        <div class="icon"><i class="fa fa-3x fa-truck"></i></div>
        <div class="desc">
          <h2>Drop your questions</h2>
          <form action="/url" method="GET">
            <p>Enter your question in the textbox given below:</p>
            <input type="text">
          <input type="submit" value="Submit" ></button>
          </form>
        </div>
      </div>
    <div class="grid">
        <div class="icon">
          <i class="fa fa-3x fa-battery-full" aria-hidden="true"></i>
        </div>
        <div class="desc">
          <h2>Book 1-1 consultant with gynaecologist</h2>
          <p>
           You can book 1-1 consultant call with gynaecologist who is conducting live session<br>
            this week (virtual or real). Click on the link below to book a call.<br>
            <a href="https://en.wikipedia.org/wiki/Gynaecology">Link to gynaecologist website </a>
          </p>
        </div>
      </div>
    </section>
    <section id="how-it-works">
      <a
        id="video"
        href="https://www.roblox.com/games/11240674373/CodeRed" 
        frameborder="0"
        allowfullscreen>
        <video  height="315px" controls autoplay muted loop>
          <source src="game.mp4" type="video/mp4">
        </video></a>
    </section>
    <div id="products">
    <section id="pricing">
      <div class="product" id="tenor">
        <div class="level">Kotex Overnight Period Panties</div>
        <h2>₹139.00</h2>
        <img src="download.jpeg" height="200px" width="200">
        <a href="https://amzn.to/3Tm13cD" target="_blank">
        <button class="btn">
        Buy now
      </button>
       </a>
      </div>
      <div class="product" id="bass">
        <video width="335" height="335" controls autoplay loop muted>
          <source src="KCad.mp4" type="video/mp4">
      </div>
      <div class="product" id="valve">
        <div class="level">U Kotex Overnight Maxi Pads </div>
        <h2> ₹1,339</h2>
        <img src="download (1).jpeg" height="200" width="200">
        <a href="https://amzn.to/3Tg4zpa">
        <button class="btn">Buy now</button>
        </a>
      </div>
    </section>
    </div>
    
    <footer>
      <ul>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <span>Copyright 2022, CodeRED</span>
    </footer>
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>