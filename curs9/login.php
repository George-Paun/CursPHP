<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
<body>
<div class="container py-4">
<?php include 'layout/meniu.php';?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
                <h4 class="card-title mt-3 text-center">Login</h4>


<form action="logat.php" method="post">
    <label>Email:</label>
    <input type="email" id="uid" name="email" placeholder="Adresa de email" required>
    <label>Password:</label>
    <input type="password" id="passid" name="parola" required>
    <input type="submit" value="Login" class="btn btn-primary btn-block" />
</form>
</article>
        </div>

</body>
</html>
