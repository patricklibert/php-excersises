<?php
class terminal {
    public function execute($arg) {
        $output = nl2br(exec($arg, $outputArr));
        $outputString = implode("&", $outputArr);
        return $outputString;
    }
}