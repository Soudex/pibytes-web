<?php 
    $cmd = $_POST['command'];
    $value = $_POST['value'];

    unset($_POST);

    if($cmd)
    {
        switch($cmd)
        {
            case "demo":
                $time = time();
                $output = shell_exec("echo $time :: $value >> /var/www/timestemp.html");
                break;

            case "green_switch":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;

            case "red_switch":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;

            case "white_switch":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;

            case "demo":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;

            case "demo":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;

        } 

        echo json_encode(array('success' => true));
    }
?>