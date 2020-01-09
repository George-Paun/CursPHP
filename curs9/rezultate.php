<!DOCTYPE html>
<html lang="en">
<?php include('layout/head.php');?>
    <body>
<?php
include_once("connect.php");
$sql = "SELECT id, prenume, nume , email, datanastere, sex, telefon,poza, dataadaugare FROM utilizatori";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) :?>
        <div class="container py-3">
<?php include('layout/meniu.php');?>
            <h2>Rezultatele din baza de date sunt:</h2>    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Prenume</th>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Data nastere</th>
                        <th>Sex</th>
                        <th>Telefon</th>
                        <th>Poza</th>
                    </tr>
                </thead>
                <tbody>
<?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo htmlentities($row["id"]);?></td>
                        <td><?php echo htmlentities($row["prenume"]);?></td>
                        <td><?php echo htmlentities($row["nume"]);?></td>
                        <td><?php echo htmlentities($row["email"]);?></td>
                        <td><?php echo htmlentities($row["datanastere"]);?></td>
                        <td><?php echo htmlentities($row["sex"]);?></td>
                        <td><?php echo htmlentities($row["telefon"]);?></td>
                        <td>
                            <img style="max-width:50px;" src="uploads/<?php echo $row["poza"];?>" alt="poza">
                            </td>
                    </tr>
<?php endwhile;?>
                </tbody>
            </table>
<?php else:?>
    echo "0 rezultate";
<?php endif;?>
<?php include('layout/footer.php');?>
        </div>
    </body>
</html>
<?php
mysqli_close($con);
 ?>
