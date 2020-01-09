<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
<body>

<div class="container py-3">
<?php include 'layout/meniu.php';?>

<h2>Rezultatele statice scrise direct in HTML sunt:</h2>
<table class="table table-hover">
    <thead class="bg-light">
        <th>Nume</th>
        <th>Model</th>
        <th>Pret</th>
        <th>An</th>
        <th>Culoare</th>
        <th>Poza</th>
    </thead>
    <tbody>
        <tr>
        <td>Audi</td>
        <td>Q1</td>
        <td>10000</td>
        <td>2005</td>
        <td>maro</td>
        <td><img src="images/q7.jpg" style="max-width:150px"/></td>
        </tr>
        <tr>
        <td>BMW</td>
        <td>X5</td>
        <td>10000</td>
        <td>2005</td>
        <td>negru</td>
        <td><img src="images/bmwx5.jpg" style="max-width:150px"/></td>
        </tr>
    </tbody>
</table>


<h2>Rezultatele semi - dinamice din array sunt:</h2>
<?php
$masini = array(
    array('nume' => 'Audi', 'model' => 'Q7', 'pret' => 10000, 'an' => 2002, 'culoare' => 'negru', 'poza' => 'q7.jpg'),
    array('nume' => 'BMW', 'model' => 'X5', 'pret' => 10000, 'an' => 2005, 'culoare' => 'negru', 'poza' => 'bmwx5.jpg'),
    array('nume' => 'Alfa Romeo', 'model' => 'Julieta', 'pret' => 14000, 'an' => 2010, 'culoare' => 'rosu', 'poza' => 'alfa.jpg'),
);

?>
<table class="table table-hover">
    <thead class="bg-dark text-light">
        <th>Nume</th>
        <th>Model</th>
        <th>Pret</th>
        <th>An</th>
        <th>Culoare</th>
        <th>Poza</th>
    </thead>
    <tbody>
        <?php
//php5
// function sortByOrder($a, $b) {
//     return $a['nume'] - $b['nume'];
// }
// usort($masini, 'sortByOrder');
//php7
// usort($masini, function($a, $b) {
//     return $a['nume'] <=> $b['nume'];
// });
foreach ($masini as $key => $m): ?>
        <?php //if($m['an'] > 2005):?>
        <tr>
        <td><?php echo $m['nume']; ?></td>
        <td><?php echo $m['model']; ?></td>
        <td><?php echo $m['pret']; ?></td>
        <td><?php echo $m['an']; ?></td>
        <td><?php echo $m['culoare']; ?></td>
        <td><img src="images/<?php echo $m['poza']; ?>" style="max-width:150px"/></td>
        </tr>
    <?php //endif;?>
    <?php endforeach;?>
    </tbody>
</table>
<h2>Rezultatele dinamice din baza de date sunt:</h2>
<table class="table table-hover">
    <thead class="bg-success text-light">
        <th>Nume</th>
        <th>Model</th>
        <th>Pret</th>
        <th>An</th>
        <th>Culoare</th>
        <th>Poza</th>
        <th>Editeaza</th>
        <th>Sterge</th>
    </thead>
    <tbody>
    </tbody>
</table>

<?php include 'layout/footer.php';?>
</div>
</body>
</html>
