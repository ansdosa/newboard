<?php


class DB extends PDO {

    public function __construct($dsn, $username = null, $password = null, $driver_options = array()) {
        parent::__construct($dsn, $username, $password, $driver_options);
    }

    public function query($statement) {
        $start = microtime(1);
        $result = parent::query($statement);
        $end = microtime(1);
        $sql = $statement;
        $time = round($end - $start, 4);
        $profiler = Profiler::getInstanse();
        $profiler->setLastQueries(array(
            'query' => $statement,
            'time' => $time
        ));
        return $result;
    }
}