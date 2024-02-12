
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <title>wesecure</title>

  <!-- Linking the CSS Sheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

</head>

<body>

  <nav class="navbar">
    <div class="logo">
      <h1>WeSecure</h1>
    </div>

    <div class="burger-icon" onclick="toggleNav()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <div class="buttons">
      <a href="login/login.php"><button id="login" class="navbarButtons">Login</button></a>
      <a href="login/register.php"><button id="signUp" class="navbarButtons">Sign Up</button></a>
    </div>
  </nav>

  <header class="header">
    <article class="content">
      <h1 class="txt-page-title txt-white marg-b-small" data-component="Title">Website vulnerability scanner</h1>
      <p>Scan the code and infrastructure that support your website for security vulnerabilities.</p>
      <button onclick="checkLogin()" class="getStarted">Get Started</button>
    </article>
    <div class="illustration">
      <img src="images/illustration-working.webp" alt="">
    </div>
  </header>
  <main class="formContainer">
   
    <div class="linksContainer">
    </div>
    <div class="infoContainer">
      <h2>Website security matters</h2>
      <p>Vulnerability management is a critical requirement for anyone running web applications or interactive and static websites. These public-facing assets are common attack vectors for malicious actors seeking unauthorized access to systems and data, so it’s important to make sure they’re secured properly with website security checks. You can scan website code and dependencies with wesecure in three steps
      </p>
    </div>
    <div class="boxesContainer">
      <div class="cards" id="brand">
        <div class="icon">
          <img src="add-user (1).png" alt="" srcset="">
        </div>
        <div class="cardsContent">
          <h2>1. Create an account</h2>
          <p>Create a wesecure account and connect your project repsitories.</p>
        </div>
      </div>
      <div class="cards" id="detailed">
        <div class="icon">
          <img src="pngwing.com (1).png" alt="" srcset="">
        </div>
        <div class="cardsContent">
          <h2>2. click scan</h2>
          <p>Enter your website link.</p>
        </div>
      </div>
      <div class="cards" id="custom">
        <div class="icon">
          <img src="pngwing.com (2) (1).png" alt="" srcset="">
        </div>
        <div class="cardsContent">
          <h2>3. Show results</h2>
          <p>Review the scan results and make fixes to your website code based on the details of the issues found.</p>
        </div>
      </div>
    </div>

  </main>

  <footer class="footer">

<ul class="footerList">
  <li class="fListItem">About</li>
  <li class="fListItem">Our Team</li>
  <li class="fListItem">Careers</li>
  <li class="fListItem">Contact</li>
</ul>

<ul class="socialIcons">
  <!-- Other social icons here -->
  <li class="sListItem">
    <a href="https://www.instagram.com/sabaree.x3">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
        <path fill="#FFF" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
      </svg>
    </a>
  </li>
</ul>

</footer>
<script>
    function checkLogin() {
      <?php
      if (isset($_SESSION['username'])) {
        echo 'window.location.href = "dashboard.php";';
      } else {
        echo 'alert("Please login to continue."); window.location.href = "login/login.php";';
      }
      ?>
    }

    function toggleNav() {
      var navButtons = document.querySelector('.buttons');
      navButtons.classList.toggle('show');
    }
  </script>
</body>
</html>