
<div class="row w-50 auth-container d-flex align-items-center rounded">
    <div class="auth-wrapper-register d-flex align-items-center">
        <div class="col-6 d-flex justify-content-center align-items-center h-100 auth-left text-center">
            <h3 class="bg-dark text-white">Welcome to Your To Do List Website</h3>
        </div>
        <div class="col-6 d-flex justify-content-center h-100 bg-success">
            <form action="#" class="w-75 d-flex flex-column justify-content-center align-items-center">
                <h2>REGISTER</h2>
                <div class="input-group my-3 d-flex flex-column">
                    <label for="username" class="mb-3 f fs-5">Username</label>
                    <input type="text" name="username" class="form-control w-100 rounded">
                </div>
                <div class="input-group my-3 d-flex flex-column">
                    <label for="email" class="mb-3 f fs-5">Email</label>
                    <input type="email" name="email" class="form-control w-100 rounded">
                </div>
                <div class="input-group my-3 d-flex flex-column">
                    <label for="password" class="mb-3 fs-5">Password</label>
                    <input type="password" name="password" class="form-control w-100 rounded">
                </div>
                <button type="submit" class="btn btn-primary w-50 mt-3">Register</button>
                <a href="<?= BASE_URL ?>/auth" class="text-decoration-none text-white mt-2">Have an Account?</a>
            </form>
        </div>
    </div>
</div>