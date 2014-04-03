<?php

$con=mysqli_connect("eu-cdbr-azure-north-b.cloudapp.net","b7ab42d5527c29","42a3ba38","as_aa493ccca437b79");

// Check connection
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$a = 100;
$b = mysqli_fetch_row(mysqli_query($con,"SELECT COUNT(*) FROM menu_main"))[0];
$arv = $a/$b;
$result = mysqli_query($con,"SELECT * FROM menu_main");
while($row = mysqli_fetch_array($result)){
    ?>
    <div class="menubutton" style="width= <?php echo $arv ?>%";>
        <?php echo $row['Title']; ?>
    </div>
    <?php
}
?>