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
                $output = shell_exec("echo $time :: $value >> /var/www/html/timestemp.html");
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

            case "blue_switch":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;

            case "yellow_switch":
                $output = shell_exec("../scripts/LEDW.sh T");
                break;
            default:
                echo json_encode(array('error' => true));
                die();
                break;
        } 

        _log($output);
       
        echo json_encode(array('success' => true));
    }

    function _log($output)
    {
        $time = time();
        shell_exec("echo <b>$time</b> :: <span style='color:blue;'>$output</span> >> /var/www/html/log.html");
    }
?>