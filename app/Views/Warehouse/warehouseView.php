<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title> Add Warehouse</title>
</head>

<body>
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/framework-4.3.3/public/home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/framework-4.3.3/public/warehouse">Warehouses</a></li>
        <li class="nav-item" style="float:right"><a class="nav-link" href="/framework-4.3.3/public/">Logout</a></li>
    </ul>

    <h2>Add a New Warehouse</h2>
    <form method="post">
        <label for="warehouse_id">Warehouse ID:</label>
        <input type="text" name="warehouse_id" maxlength="8" required><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" maxlength="50" required><br><br>
        <label for="area_sqr_feet">Area (in Square Feet):</label>
        <input type="number" name="area_sqr_feet" max=2147483647 step="0.01" required><br><br><br>
        <div class="button">
            <input type="submit" name="submit" value="Add" class="submitBtn">
        </div><br><br>
        <?php if (isset($add_message)): ?>
            <div>
                <?php echo $add_message; ?>
            </div>
        <?php endif; ?>

    </form>
    </main>

    <footer>
        <p>© 2023 Copyright: Kartik Nain & Hardeep SIngh
        </p>
    </footer>
</body>

</html>