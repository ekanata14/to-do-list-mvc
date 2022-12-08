<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List MVC</title>
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
                <input type="text" class="form-control search-input">
                <button class="btn btn-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="profile d-flex align-items-center">
                <p class="mb-0 me-3">Username</p>
                <img src="https://source.unsplash.com/50x50/?person" class="rounded-circle" alt="image" width="50" height="50">
            </div>
        </div>
    </div>