<style>
    .square {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin: 0px;
        text-align: center;
        line-height: 30px;
        background-color: orange;
        border: 1px solid black;
    }
</style>

<?php
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<div class="square">' . $j . '</div>';
    }
    echo '<br>';
}
?>




