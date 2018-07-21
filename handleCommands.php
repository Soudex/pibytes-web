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
                $output = exec("../scripts/LEDW.sh T");
                break;

            case "red_switch":
                $output = exec("../scripts/LEDW.sh T");
                break;

            case "white_switch":
                $output = exec("../scripts/LEDW.sh T");
                break;

            case "blue_switch":
                $output = exec("../scripts/LEDW.sh T");
                break;

            case "yellow_switch":
                $output = exec("../scripts/LEDW.sh T");
                break;
            default:
                echo json_encode(array('error' => true));
                die();
                break;
        } 

        _log($output);
       
        echo json_encode(array('success' => true, 'log' => $output));
    }

    function _log($output)
    {
        $time = time();
        $whoami = shell_exec("whoami");
        $pwd = shell_exec("pwd");
        shell_exec("echo $time :: $whoami :: $pwd :: $output >> /var/www/html/log.html");
    }
?>