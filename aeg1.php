<form action="mail.php" method="POST">
    <p>Nimi:</p> <input type="text" name="nimi">
    <p>Perenimi:</p> <input type="text" name="perenimi">
</form>

<?php
$nimi = $_POST['nimi'];
$perenimi = $_POST['perenimi'];
?>

<select name = "day">
    <option>Päev</option>
    <?php
    for($day = 1; $day <= 31; $day++){
        echo "<option value = '".$day."'>".$day."</option>";
    }
    ?>
</select>

<select name = "month">
	<option>Kuu</option>
	<?php
		for($month = 1; $month <= 12; $month++)
            echo"<option value = '".$month."'>".$month."</option>";
	?>
</select>

<select name = "year">
    <option>Aasta</option>
    <?php
    $y = date("Y", strtotime("+8 HOURS"));
    for($year = 1900; $y >= $year; $y--){
        echo "<option value = '".$y."'>".$y."</option>";
    }
    ?>
</select>
<br>
<input type="submit" value="Saada">