function updatetime() {
    $time = date("H:i:s");
    $time_hour = date("H");
    return array($time, $time_hour);
}