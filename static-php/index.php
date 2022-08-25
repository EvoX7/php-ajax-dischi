<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Local CSS  -->
    <link rel="stylesheet" href="../style.css">
    <title>PHP Records</title>
</head>

<?php
include "../db.php";

?>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div>
                    <img class="brandlogo" src="../img/musiclogo.png" alt="brand_logo" />
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Link</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#" tabindex="-1">Contacts</a>
                        </li>
                    </ul>

                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <select class="form-select" name="Select genres">
                                    <option value="">Select genre</option>
                                    <option value="">Rock</option>
                                    <option value="">Pop</option>
                                    <option value="">Jazz</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>



    <main>
        <div class="container">
            <div class="row">
                <?php
                foreach ($records as $record) {
                ?>
                    <div class="col-3 d-flex flex-wrap p-5">
                        <div class="card p-2">
                            <img class="img-fluid" src="<?php echo  $record['cover']; ?>" class="card-img-top p-3" alt="cover" />
                            <div class="card-body">

                                <h5 class="card-title text-white fw-bold"> <?php echo $record['title']; ?></h5>
                                <p class="card-text fw-bold"><?php echo $record['author']; ?></p>
                                <p class="card-text"><?php echo $record['year']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>


</html>