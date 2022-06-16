<?php
function validateInputs(...$inputs) {
    foreach ($inputs as $input) {
        if(!isset($input)){
            return false;
        }
        if(empty($input)){
            return false;
        }
    }
    return true ;
}
?>