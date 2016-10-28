<div id="slider">
   <div id="moveSlider">
    <?php
    $tab = 4;
    for($i = 0;$i < $tab; $i++){
        ?>
        <div>
            <h1><?php echo ($i + 1); ?></h1>
        </div>
        <?php
    }
    ?>
    </div>
    <div id="buttonSlider">
    <?php
    $tab = 4;
    for($i = 0;$i < $tab; $i++){
        ?>
        <a id="<?php

        echo ($i + 3) % 4; 
        
        ?>" href="#"></a>
        <?php
    }
    ?>
    </div>
    
</div>