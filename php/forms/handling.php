<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forms 101 App &#x1F680;</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      --font-1: "Luckiest Guy", cursive;
      --font-2: "Montserrat", sans-serif;

      --color-dark: #334443;
      --color-dark-2: #34656d;

      --color-light: #fffbdf;
      --color-light-2: #c6ffc1;
    }

    body {
      background-color: var(--color-light);
      font-family: var(--font-2);
    }

    .heading {
      font-family: var(--font-1);
    }
  </style>
</head>

<body class="bg-dark text-light">
  <header class="bg-danger p-4">
    <h1 class="heading">
      FORMS &#x1F525;
    </h1>
  </header>

  <?php

  $errors = [];

  if (sizeof($_POST) > 0) {
    if ($_POST['username'] === '') {
      array_push($errors, 'username is required');
    }

    if ($_POST['password'] === '') {
      array_push($errors, 'password is required');
    }
  }


  if (sizeof($errors) !== 0 || !isset($_POST['username'])) {
  ?>
    <main class="container card mt-4 text-dark p-5">
      <?php
      foreach ($errors as $error) {
      ?>
        <span class="alert alert-danger"><?php echo $error; ?></span>
      <?php
      }
      ?>
      <form class="card-body" action="./handling.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-danger">Login</button>
        </div>

      </form>
    </main>
  <?php
  } else {
  ?>
    <main class="container card mt-4 text-dark p-5">
      <h1>Username</h1>
      <h2><?php echo $_POST['username']; ?></h2>

      <h1>Password</h1>
      <h2><?php echo $_POST['password']; ?></h2>

      <div class="btn-container">
        <button class="btn btn-danger" onclick="resetPage()">Reset</button>
      </div>

    </main>
  <?php
  }
  ?>

  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <script>
    function resetPage() {
      window.location.href = "/handling.php";
    }
  </script>

</body>

</html>