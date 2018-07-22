<?php 
    $cmd = $_POST['command'];
    $value = (!empty($_POST['value'])) ? $_POST['value'] : null;

    $led = array("2","3","14","17","27");

    $white = 2;
    $green = 3;
    $yellow = 14;
    $blue = 17;
    $red = 27;
    
    unset($_POST);

    if($cmd)
    {
        switch($cmd)
        {
            case "demo":
                $time = time();
                exec("echo $time :: $value >> timestemp.html");
                break;

            case 'init':
                exec("/var/www/scripts/initio.sh");
                break;
            case "green_switch":
                exec("/var/www/scripts/LED.sh T $green");
                break;

            case "red_switch":
                exec("/var/www/scripts/LED.sh T $red");
                break;

            case "white_switch":
                exec("/var/www/scripts/LED.sh T $white");
                break;

            case "blue_switch":
                exec("/var/www/scripts/LED.sh T $blue");
                break;

            case "yellow_switch":
                exec("/var/www/scripts/LED.sh T $yellow");
                break;

            case "on":
                exec("/var/www/scripts/LED.sh 1 $green");
                exec("/var/www/scripts/LED.sh 1 $red");
                exec("/var/www/scripts/LED.sh 1 $white");
                exec("/var/www/scripts/LED.sh 1 $blue");
                exec("/var/www/scripts/LED.sh 1 $yellow");
                break;

            case "off":
                exec("/var/www/scripts/LED.sh 0 $green");
                exec("/var/www/scripts/LED.sh 0 $red");
                exec("/var/www/scripts/LED.sh 0 $white");
                exec("/var/www/scripts/LED.sh 0 $blue");
                exec("/var/www/scripts/LED.sh 0 $yellow");
                break;

            case "toggle":
                exec("/var/www/scripts/LED.sh T $green");
                exec("/var/www/scripts/LED.sh T $red");
                exec("/var/www/scripts/LED.sh T $white");
                exec("/var/www/scripts/LED.sh T $blue");
                exec("/var/www/scripts/LED.sh T $yellow");
            break;
            
            case "random_led":
                $randomLED = $led[rand(0,4)];
                exec("/var/www/scripts/LED.sh T $randomLED");
                break;
            
            case "start_luft_filter":
                require_once('inccludes/config.php');
                
                break;

            default:
                echo json_encode(array('error' => "wrong command"));
                die();
                break;
        } 


        _log($cmd);
       
        echo json_encode(array('success' => true));
    }

    function _log($output)
    {
        $time = time();
        $output = ($output) ? $output : "";
        exec("echo '<b>$time</b> :: $output </br>' >> log.html");
    }
?>