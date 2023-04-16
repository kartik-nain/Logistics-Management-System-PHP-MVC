<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Login Page
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="container">
    <a href="/framework-4.3.3/public/">Login</a>
    <a href="/framework-4.3.3/public/home">Home Page</a>
    <a href="/framework-4.3.3/public/warehouse">Warehouse</a>
    <p style="color:white">Kartik Nain(N01516607) - I want to be a Full-Stack Software Developer with Java and JavaScript as my main focus.</p>
    <p style="color:white">Hardeep Singh(N01512362) - I want to be a Full-Stack Software Developer with C# and JavaScript as my main focus.</p>
    <main>
        <h1>Login:</h1>
        <div id="form_data">
            <form method="post" action="<?php base_url('framework-4.3.3/public/Home/afterLogin'); ?>">
                <label for="username">Username: </label><br>
                <input type="text" id="username" name="user_name" REQUIRED><br><br>
                <label for="password">Password: </label><br>
                <input type="password" id="password" name="passwrd" REQUIRED><br><br>
                <div class="button"><input type="submit" class="submitBtn" name='submit' value="Login"></div>
                <?php if (isset($error_message)): ?>
                    <br>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
            </form>
            <br>New User? <a href='register.php'>
                <div class="button"><input type="submit" class="submitBtn" name='submit' value="Register"></div>
            </a>
        </div>
    </main>
</div>

<?= $this->endSection() ?>