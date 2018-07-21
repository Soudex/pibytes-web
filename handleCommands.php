<?php 
    $cmd = $_POST['command'];
    $value = (!empty($_POST['value'])) ? $_POST['value'] : null;

    $led = array("2","3","22","17","27");

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
                _log(exec("/var/www/scripts/initio.sh"));
                break;
            case "green_switch":
                _log(exec("/var/www/scripts/LED.sh T $green"));
                break;

            case "red_switch":
                _log(exec("/var/www/scripts/LED.sh T $red"));
                break;

            case "white_switch":
                _log(exec("/var/www/scripts/LED.sh T $white"));
                break;

            case "blue_switch":
                _log(exec("/var/www/scripts/LED.sh T $blue"));
                break;

            case "yellow_switch":
                _log(exec("/var/www/scripts/LED.sh T $yellow"));
                break;

            case "on":
                _log(exec("/var/www/scripts/LED.sh 1 $green"));
                _log(exec("/var/www/scripts/LED.sh 1 $red"));
                _log(exec("/var/www/scripts/LED.sh 1 $white"));
                _log(exec("/var/www/scripts/LED.sh 1 $blue"));
                _log(exec("/var/www/scripts/LED.sh 1 $yellow"));
                break;

            case "off":
                _log(exec("/var/www/scripts/LED.sh 0 $green"));
                _log(exec("/var/www/scripts/LED.sh 0 $red"));
                _log(exec("/var/www/scripts/LED.sh 0 $white"));
                _log(exec("/var/www/scripts/LED.sh 0 $blue"));
                _log(exec("/var/www/scripts/LED.sh 0 $yellow"));
                break;

            case "toggle":
                _log(exec("/var/www/scripts/LED.sh T $green"));
                _log(exec("/var/www/scripts/LED.sh T $red"));
                _log(exec("/var/www/scripts/LED.sh T $white"));
                _log(exec("/var/www/scripts/LED.sh T $blue"));
                _log(exec("/var/www/scripts/LED.sh T $yellow"));
            break;
            
            case "random_led":
                $randomLED = $led[rand(0,4)];
             
                _log(exec("/var/www/scripts/LED.sh T $randomLED"));
                break;

            default:
                echo json_encode(array('error' => "wrong command"));
                die();
                break;
        } 
       
        echo json_encode(array('success' => true));
    }

    function _log($output)
    {
        $time = time();
        $html = "<b>".$time."</b> :: ".$output."</br>";
        exec("echo $html >> log.html ");
    }
?>