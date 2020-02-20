<?php
    function sendMessage($name, $email, $message) {
        $message = wordwrap($message, 70);
        mail("devinleamy@gmail.com", $name . '    ' . $email, $message);
    }
?>