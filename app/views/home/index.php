<div class="container text-center mt-3">
    <h1>Welcome <?= $_SESSION['user']['username'];?></h1>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php foreach($data['users'] as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>