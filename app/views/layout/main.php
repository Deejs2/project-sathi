<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Layout</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <!--    font awesome icons-->
    <script src="https://kit.fontawesome.com/cbeb993ef9.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include_once __DIR__ . '/../partials/navbar.php'; ?>
  <?php include_once __DIR__ . '/../' . $view . '.php'; ?>
  <?php include_once __DIR__ . '/../partials/footer.php'; ?>
</body>

</html>