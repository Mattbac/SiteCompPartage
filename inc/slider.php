<div id="slider">
   <div>
    <?php
    $tab = 4;
    for($i = 0;$i < $tab; $i++){
        ?>
        <div id="<?php echo ($i + 1); ?>" nbPlace="<?php echo ($i + 1); ?>">
            <h1><?php echo ($i + 1); ?></h1>
        </div>
        <?php
    }
    ?>
    </div>
</div>