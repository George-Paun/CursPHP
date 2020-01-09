<!DOCTYPE html>
 <html lang="en">
<?php include('layout/head.php');?>
    <body>

<?php
//https://www.guru99.com/learn-sql-injection-with-practical-example.html
include_once("connect.php");
if(isset($_POST['email']) && !empty($_POST['email'])){
    echo $sql = "SELECT *
            FROM utilizatori WHERE email = '".$_POST['email']."' and parola ='".sha1($_POST['parola'])."'";
    $result = mysqli_query($con, $sql);
    if(isset($result) && !empty($result)){
        $row = mysqli_fetch_assoc($result);
        echo "<pre>"; print_r($row);
        $mess_error= "Salut $row[prenume]. Logarea s-a efectuat cu succes";
    }
    else{
        $mess_error= "Email si parola gresite";
    }
    echo '<div class="alert alert-danger" role="alert">'.
    $mess_error.'<br><br><a class="alert-link" href="login.php"> << Introduceti datele corect!</a>
    </div>';


}



mysqli_close($con);
 ?>

      

</body>
</html>