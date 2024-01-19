
<?php

    function messageReceive()
    {
        $received   = $_POST;
        $content = print_r($received, true);
        $sms_from   = $received['sms_from'];
        $sms_to     = $received['sms_to'];
        $sms_date   = $received['sms_date'];
        $sms_text   = $received['sms_text'];
        $username   = $received['username'];

        $filename = "sms.log";

        file_put_contents($filename, $content);

        if (is_file($filename)) {
            return true;
            } else {
            return false;
            }
    }

    if ($_POST) {
        if (messageReceive() === true) {
            echo "OK";
        }
    }

?>
