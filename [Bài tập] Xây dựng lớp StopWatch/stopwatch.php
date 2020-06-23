<?php

class Stopwatch {
    private $startTime;
    private $endTime;

    function __construct($startTime,$endTime)
    {
        $this->startTime=$startTime;
        $this->endTime=$endTime;
    }

    function get_startTime(){
        return $this->startTime;
    }
    function get_endTime(){
        return $this->endTime;
    }

    function startTime(){
        return date("h:i:s");
    }
    function start() {
        return $this->startTime;
    }
}

