<?php


class Profiler {
    private $last_queries = array();
    static $instance;

    public static function getInstanse() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {}
    private function __clone() {}

    public function getLastQueries() {
        return $this->last_queries;
    }

    public function setLastQueries($l) {
        $this->last_queries[] = $l;
    }
}