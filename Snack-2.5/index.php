<?php 
    <form action="./index.php" method="GET">
        <label for="first-number">inserire primo numero</label>
        <input type="number" id="first-number" name="first-number">

        <label for="second-number">inserire secondo numero</label>
        <input type="number" id="second-number" name="second-number">

        <button type="submit">media</button>
    </form>

    if (isset($_GET['first-number']) && isset($_GET['second-number'])) {
        $firstNumber = $_GET['first-number'];
        $secondNumber = $_GET['second-number'];
    } 

    if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
        $media = ($firstNumber + $secondNumber) / 2;
    }
?>