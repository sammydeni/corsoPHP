<form action="" method="post">
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome">

    <label for="cognome">cognome</label>
    <input type="text" name="cognome" id="cognome">

    <label for="foto">foto</label>
    <input type="text" name="foto" id="foto">
    <input type="submit" value="invio">

</form>

<?php

if (isset($_POST['nome'])) {
    foreach ($_POST as $key => $value) {
        echo $key;
        echo ": ";
        echo $value;
        echo "<br>";
    }
}

?>