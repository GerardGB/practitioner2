<?php

//DRY - DON'T REPEAT YOURSELF vs WET WRITE EVERYTHING TWICE
function dump($var) {
    echo '<pre>';
    dvar_dump($var);
    echo '</pre>';

function dd($var) {
    die(dump($var));
}
}