<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>scanner</title>
  <link rel="stylesheet" href="dashboard.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <h1>WeSecure</h1>
    </div>
  </nav>

  <main class="formContainer">
    <div class="form">
      <div class="wrapper">
        <form method="post" action="scan.php">
          <input type="text" name="link" placeholder="Scan your links here..." id="link" class="default" required>
          <button type="submit" class="submit" id="shorten">Scan It!</button>
        </form>
      </div>
      <p class="wrongLinkText">Please add a link</p>
    </div>

    <!-- Search history section -->
    <div class="searchHistory">
      <h2>Search History</h2>
      <ul class="historyList" id="historyList">
        <!-- Dynamically populated list items will go here -->
      </ul>
    </div>
  </main>
</body>

</html>
