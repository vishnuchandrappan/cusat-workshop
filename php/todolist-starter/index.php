<?php
$todos = [
  [
    'id' => 1,
    'content' => 'Test',
    'completed' => '0'
  ],
  [
    'id' => 2,
    'content' => 'Test 2',
    'completed' => '1'
  ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todolist App &#x1F680;</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
  <header>
    <h1 class="heading">
      <i class="bi bi-card-checklist"></i> TodoList &#x1F525;
    </h1>
  </header>

  <main class="container">
    <form class="form-group custom-group jumbotron" id="todo-form">
      <input type="text" name="content" class="form-control" />
      <button class="btn btn-custom" type="submit">
        <i class="bi bi-plus"></i> Add todo
      </button>
    </form>

    <ul id="todo-container" class="list-group">
      <?php
      if (sizeof($todos) > 0) {
        foreach ($todos as $todo) {
      ?>
          <li class="list-group-item custom-group-item <?php echo $todo['completed'] !== '0' ? 'completed' : ''; ?>">
            <span><?php echo $todo['content']; ?></span>
            <button type="button" class="btn btn-danger">
              <i class='bi bi-x'></i>
            </button>
          </li>
      <?php
        }
      }
      ?>
    </ul>
  </main>

  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- custom js -->
  <script src="./assets/js/app.js"></script>
</body>

</html>