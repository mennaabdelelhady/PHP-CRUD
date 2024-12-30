<?php

$title ="Simple PHP CRUD -Add / Edit Contacts";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>
<body class="container">
    <h1><?php echo $title ?></h1>
    <form action="">
        <div class="mb-3">
            <label for="name_first" class="form-label">First Name</label>
            <input type="text" class="form-control" id="name_first" name="first_name">
        </div>
        <div class="mb-3">
            <label for="name_last" class="form-label">First Name</label>
            <input type="text" class="form-control" id="name_last" name="first_name">
        </div>
        <div class="mb-3">
            <label for="name_last" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="name_last" name="first_name">
        </div>
    </form>
</body>

</html>