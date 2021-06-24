<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheets/dashboard.css">
</head>
<body>
    <div class="container">
        <h1 class="mb-5">Welcome <?php echo $user["name"] ?>!</h1>
        <h3 class="mb-3">Your Subjects:</h3>
        <div class="d-flex">
            <?php if(!$subjects) { ?>
                <div class="alert alert-danger" role="alert">You are not enrolled in any subjects!</div>
            <?php } else { ?>
                <?php foreach($subjects as $subject) { ?>
                    <div class="card mx-3">
                        <img src="../img/<?php echo $subject["name"] ?>.png" alt="<?php echo $subject["name"] ?> icon" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $subject["name"] ?></h5>
                            <p class="card-text"><b>Grade: </b><?php echo $subject["grade"] ?>%</p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <form action="index.php" class="mt-4" method="POST">
            <button name="log_out" class="btn btn-primary">Log Out</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>