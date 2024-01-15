<?php 
    <form action="./script.php" method="GET">
        <label for="name">inserisci un nome:</label>
        <input type="text" name="name" id="name">

        <label for="age">Inserisci eta:</label>
        <input type="text" name="age" id="age">

        <label for="mail"></label>
        <input type="text" name="mail" id="mail">

        <button type="submit"></button>
    </form>
?>

<?php 
 if(strlen($_GET[$name]) > 3 && is_numeric($_GET[$age]) = int && strpos($mail, '.') !== false && strpos($mail, '@') !== false){
    echo '<h1>Accesso riuscito';
 } else {
    echo 'accesso negato';
 }
?>