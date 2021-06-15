<?php
// Parametri DB
define("HOST", "localhost");
define("USER", "sam");
define("PSW", "sammydeni01");
define("DB_NAME", "php2021");

// Procedurale --> funzioni
$connessione = mysqli_connect(HOST, USER, PSW, DB_NAME) or die("connessione fallita"); //tenta la connessione

echo "In Ondaaa!";

include "studenti.php";

foreach ($studenti as $value) {
    mysqli_query($connessione, "insert into studenti (nome, cognome, anno) values ('".$value[0]."','".$value[1]."', 2000)") or die("Mannaggia".mysqli_error($connessione));
}
// Create = insert into studenti...
//mysqli_query($connessione, "insert into studenti (nome, cognome, anno) values ('Samuele','Denicola', 2001)") or die("Mannaggia".mysqli_error($connessione));
// Retrieve / Read = select * from studenti
// mysqli_query($connessione, "delete from studenti where id < 4");
$result = mysqli_query($connessione, "select * from studenti");
while($riga = mysqli_fetch_assoc($result)) {
    echo $riga["nome"]."<br>";
}
// Update = update studenti set .. (nomi dei campi da modificare)
mysqli_query($connessione, "update studenti set anno = 2001 where cognome like '%o'");

// Delete = delete from studenti where id = ...
?>