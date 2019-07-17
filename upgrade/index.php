<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>UpGrade</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="stylesheet" href="static/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="static/plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="static/plugins/highlight/hybrid.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

  <style>
  :root{
    --primary-color:#000000;
    --secondary-color:#f9f9f9;
    --text-color:#636363;
    --text-color-dark:#242738;
    --white-color:#ffffff;
  }  
  </style>

  <link rel="stylesheet" href="assets/css/style.css" integrity="" media="screen">
  <link rel="icon" href="assets/images/laptop-icon.png" type="image/x-icon">

</head>

<body>
  <header class="hero-section overlay banner">
    <div class="container mb-100">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Welcome to UpGrade</a>
        <div class="navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-dark" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="about-us.php">About Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center mx-auto">
          <h1 class="text-white mb-3">Upgrade your Laptop</h1> 
          <p class="text-white mb-4">don't buy a new one</p>    

          <div>
            <ul class="search-img">
              <li class="ti-search position-absolute"></li>
            </ul>
              <form action="test.php" method="POST" id="searchForm">
                <input id="search" class="form-control" name="laptop" type="text" placeholder="Input your laptop type here . . ." > 
                <input style="display: none" type="submit" id="enterdata" >
              </form>
               
            </form>
            
          </div>
        </div>
      </div>
    </div>

  </header>

  <div id="content">
    <section class="section bg-gray">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
             <h2 class="section-title">What are you looking for?</h2> 
          </div>
          
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="#" class="px-4 py-5 bg-white shadow text-center d-block">
              <i class="ti-credit-card icon text-dark d-block mb-4"></i>
              <h3 class="mb-3">Solid State Disk</h3>
              <p class="mb-0">You need fast processing data? Time to add SSD to your laptop!</p>
            </a>
          </div>

          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="#" class="px-4 py-5 bg-white shadow text-center d-block">
              <i class="ti-panel icon text-dark d-block mb-4"></i>
              <h3 class="mb-3">Random Access Memory</h3>
              <p class="mb-0">So much workspace that need large memory? Go add more RAM!</p>
            </a>
          </div>
          
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="#" class="px-4 py-5 bg-white shadow text-center d-block">
              <i class="ti-printer icon text-dark d-block mb-4"></i>
              <h3 class="mb-3">Equipment</h3>
              <p class="mb-0">Need a better equipment for work? Such as keyboard, mouse, monitor, etc</p>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="section bg-gray pb-0">
    <div class="container">
      <p>tugas akhir semantik web. Erlangga, Alfin, Bariq</p>  
    </div>
  </footer>

<script src="assets/js/script.js"></script>
  
</body>
</html>