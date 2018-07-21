<?php 
    $cmd = $_POST['command'];
    $value = (!empty($_POST['value'])) ? $_POST['value'] : null;

    $log = true;

    unset($_POST);

    if($cmd)
    {
        switch($cmd)
        {
            case "demo":
                $time = time();
                _log(shell_exec("echo $time :: $value >> /var/www/html/timestemp.html"));
                break;

            case "green_switch":
                _log(exec("/var/www/scripts/LED.sh T 3"));
                break;

            case "red_switch":
                _log(exec("/var/www/scripts/LED.sh T 27"));
                break;

            case "white_switch":
                _log(exec("/var/www/scripts/LED.sh T 2"));
                break;

            case "blue_switch":
                _log(exec("/var/www/scripts/LED.sh T 17"));
                break;

            case "yellow_switch":
                _log(exec("/var/www/scripts/LED.sh T 4"));
                break;

            case "on":
                _log(exec("/var/www/scripts/LED.sh 1 3"));
                _log(exec("/var/www/scripts/LED.sh 1 27"));
                _log(exec("/var/www/scripts/LED.sh 1 2"));
                _log(exec("/var/www/scripts/LED.sh 1 17"));
                _log(exec("/var/www/scripts/LED.sh 1 4"));
                break;

            case "off":
                _log(exec("/var/www/scripts/LED.sh 0 3"));
                _log(exec("/var/www/scripts/LED.sh 0 27"));
                _log(exec("/var/www/scripts/LED.sh 0 2"));
                _log(exec("/var/www/scripts/LED.sh 0 17"));
                _log(exec("/var/www/scripts/LED.sh 0 4"));
                break;

            case "toggle":
                _log(exec("/var/www/scripts/LED.sh T 3"));
                _log(exec("/var/www/scripts/LED.sh T 27"));
                _log(exec("/var/www/scripts/LED.sh T 2"));
                _log(exec("/var/www/scripts/LED.sh T 17"));
                _log(exec("/var/www/scripts/LED.sh T 4"));
            break;

            default:
                echo json_encode(array('error' => true));
                die();
                break;
        } 
       
        echo json_encode(array('success' => true));
    }

    function _log($output)
    {
        if($log)
        {        
            $time = time();
            $whoami = shell_exec("whoami");
            $pwd = shell_exec("pwd");
            shell_exec("echo $time :: $output >> /var/www/html/log.html");
        }
    }
?>