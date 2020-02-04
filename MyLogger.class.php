<?php

class MyLogger {

    public function log($message) {
        echo $message;
    }

}

$myLogger = new MyLogger();
$myLogger->log("Hoi");