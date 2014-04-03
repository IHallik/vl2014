<div id="menubar">
    <?php
        $a = 100;
        $b = mysqli_fetch_row(mysqli_query($con,"SELECT COUNT(*) FROM menu_main"))[0];
        $arv = $a/$b;
        $result = mysqli_query($con,"SELECT * FROM menu_main");
        $i = 0; 
        while($row = mysqli_fetch_array($result)){
            $i=$i+1;
            ?>
            <div class="menubutton" style="width:<?php echo $arv ?>%;";>
                <div class="menubuttonin" id="<?php echo "mainmenu"; echo $i; ?>">
                    <?php echo $row['Title']; ?>
                </div>
            </div>
            <?php
        }
    mysqli_close($con);
    ?>
    
</div>