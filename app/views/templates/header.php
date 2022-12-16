<?php 
if(!isset($_SESSION)){
    session_start();
    echo (!$_SESSION['user']['image']) ? BASE_URL . "/public/assets/images/user.jpg" : $_SESSION['user']['image'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'];?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/assets/css/style.css">
    <script src="https://kit.fontawesome.com/88f7f8719e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar d-flex justify-content-between">
        <div class="container">
            <div class="title">
                <h1>To Do List</h1>
            </div>
            <div class="search d-flex">
                <form action="<?= BASE_URL . "/home/search"?>" method="POST" class="d-flex">
                    <input type="text" class="form-control search-input" name="search">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="profile d-flex align-items-center">
                <p class="mb-0 me-3"><?= $_SESSION['user']['username']; ?></p>
                <img src="<?= $_SESSION['user']['img'];?>" class="rounded-circle" alt="user-img" width="50" height="50">
                <button type="button" data-bs-toggle="modal" data-bs-target="#settingModal" class="ms-3 btn btn-info" data-username="<?= $_SESSION['user']['username'];?>" data-email="<?= $_SESSION['user']['email'];?>" data-image="" id="settings"><i class="fa fa-solid fa-gear"></i></button>
                <a href="<?= BASE_URL ?>/auth/logout" class="ms-3 btn btn-danger"><i class="fa fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </div>