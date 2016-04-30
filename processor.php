<?php

// branch on the basis of 'calculate' value 
switch ($_POST['calculate']) {
      // if calculate => add
      case 'add':
            echo $_POST['number_1'] . " + " . $_POST['number_2'] . " = " . ($_POST['number_1']+$_POST['number_2']);
            break;

      // if calculate => subtract
      case 'subtract':
            echo $_POST['number_1'] . " - " . $_POST['number_2'] . " = " . ($_POST['number_1']-$_POST['number_2']);
            break;

      // if calculate => multiply
      case 'multiply':
            echo $_POST['number_1'] . " x " . $_POST['number_2'] . " = " . ($_POST['number_1']*$_POST['number_2']);
            break;
}

?>