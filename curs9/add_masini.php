<!DOCTYPE html>
<html lang="en">
<?php 
// validare HTML5
//https://code-boxx.com/html-form-validation/
include('layout/head.php');?>
<body>

<div class="container py-3">
<?php include('layout/meniu.php');?>
<div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
<h2>Adauga masina</h2> 

<form action="add_masini.php" method="post" enctype="multipart/form-data">
<fieldset>
    <legend><strong>Formular de adaugare masini</strong></legend>
    <label id="nume-label" class="nume">
        <strong>Nume</strong><br>
        <input type="text" value="" name="nume" id="nume" oninvalid="this.setCustomValidity('Acest camp este obligatoriu!')" required />
    </label>
    <br>
    <label id="model-label" class="model">
        <strong>Model</strong><br>
        <input type="text" value="" name="model" id="model" required/>
    </label>
    <br>
    <label id="pret-label" class="pret">
        <strong>Pret</strong><br>
        <input type="text" value="" name="pret" id="pret"  required/>
    </label>
    <br>
    <label id="an-label" class="an">
        <strong>An</strong><br>
        <input type="text" value="" name="an" id="an" required/>
    </label>
    <br>
    <label id="culoare-label" class="culoare">
            <strong>Culoare</strong><br>
        <input type="text" value="" name="culoare" id="culoare" required/>
    </label>
    <br>
    <label id="poza-label" class="poza">
            <strong>Poza</strong><br>
        <input type="file" value="" name="poza" id="poza" required/>
    </label>
    <br>
    <br><br>
    <label  class="submit">
        <input class="btn btn-primary btn-block" type="submit" value="Trimite" name="submit"/>
    </label>
    <input type="reset">
    <input type="hidden" name="hash" value="cheie_secreta_generata_pe_sesiune"  />
</fieldset>
</form>
            </article></div>
<?php include('layout/footer.php');?>
</div>  
</body>
</html>
