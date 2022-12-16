<div class="container text-center mt-3">
    <?php  $numberNotDone = 1; $numberDone = 1?>
    <h1>Welcome <?= $_SESSION['user']['username'];?></h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Todo
    </button>
    <?php if($data['todos']){?>
        <h3 class="mt-3">Hasn't Done To Do</h3>
        <table class="table">
        <thead>
            <th>No</th>
            <th>To Do</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($data['todos'] as $todo): ?>
                <?php if($todo['isDone'] == 0){?>
                <tr>
                    <td><?= $numberNotDone ?></td>
                    <td><?= $todo['todo']; ?></td>
                    <td>
                        <?php
                        if($todo['isDone'] == 0){
                            echo "Not Finished Yet";
                        } else{
                            echo "Finished";
                        }
                        ?>
                    </td>
                    <td class="d-flex justify-content-center gap-2">
                        <form action="<?= BASE_URL . "/todo/done"?>" method="POST">
                            <input type="hidden" name="id" value="<?= $todo['id'];?>">
                            <button type="submit" class="btn btn-success"><i class="fa fa-solid fa-check"></i></button>
                        </form>
                        <form action="<?= BASE_URL . "/todo/delete"?>" method="POST">
                            <input type="hidden" name="id" value="<?= $todo['id'];?>">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <?php } else{} ?>
            <?php $numberNotDone += 1; endforeach ?>
        </tbody>
    </table>
    <h3>Done Todo</h3>
    <table class="table">
        <thead>
            <th>No</th>
            <th>To Do</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($data['todos'] as $todo): ?>
                <?php if($todo['isDone'] == 1){?>
                <tr>
                    <td><?= $numberDone ?></td>
                    <td><?= $todo['todo']; ?></td>
                    <td>
                        <?php
                        if($todo['isDone'] == 0){
                            echo "Not Finished Yet";
                        } else{
                            echo "Finished";
                        }
                        ?>
                    </td>
                    <td class="d-flex justify-content-center gap-2">
                        <form action="<?= BASE_URL . "/todo/undone"?>" method="POST">
                            <input type="hidden" name="id" value="<?= $todo['id'];?>">
                            <button type="submit" class="btn btn-warning"><i class="fa fa-solid fa-x"></i></button>
                        </form>
                        <form action="<?= BASE_URL . "/todo/delete"?>" method="POST">
                            <input type="hidden" name="id" value="<?= $todo['id'];?>">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <?php } else{} ?>
            <?php $numberDone += 1; endforeach ?>
        </tbody>
    </table>
    <?php } else {?>
        <h3 class="mt-3">Nothing Found</h3>
    <?php } ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Todo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?= BASE_URL . "/todo/addTodo"?>" method="POST" class="w-100">
                <div class="input-group">
                    <label for="todo">To Do</label>
                    <input type="text" name="todo" id="todo" class="form-control w-100 rounded mt-2" required autofocus>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Todo</button>
            </form>
        </div>
        </div>
    </div>
    </div>

    <!-- Setting Modal -->
    <div class="modal fade" id="settingModal" tabindex="-1" aria-labelledby="settingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Settings</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?= BASE_URL . "/user/updateUser"?>" method="POST" class="w-100" enctype="multipart/form-data">
                <input type="hidden" value="<?= $_SESSION['user']['id'];?>" name="id">
                <img src="<?= $_SESSION['user']['img'] ?>" alt="user-img" width="125" height="125" class="my-4 border rounded-circle">
                <input type="file" class="form-control my-2 w-50 mx-auto" name="img">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username-setting" class="form-control w-100 rounded mt-2" required autofocus>
                </div>
                <div class="input-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email-setting" class="form-control w-100 rounded mt-2" required autofocus>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>