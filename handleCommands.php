<?php 
    $cmd = $_POST['command'];
    $value = $_POST['value'];

    unset($_POST);

    if($cmd)
    {
        switch($cmd)
        {
            case "demo":
                $output = shell_exec("echo $value > /var/etc/demo.txt");
            break;
        } 

        echo json_encode(array('success' => true));
    }


?>