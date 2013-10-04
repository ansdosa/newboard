<?php


class Template {
    private $store = array();

    public function set($key, $value = 0) {
        if (is_array($key)) {
            foreach($key as $key1=>$value1) {
                $this->store[$key1] = $value1;
            }
        } else {
            $this->store[$key] = $value;
        }
    }

    public function render($file) {
        $path = ROOT.'app/views/'.$file.'.php';
        if (file_exists($path)) {
            extract($this->store);

            $profiler = Profiler::getInstanse();

            ob_start();

            include_once $path;

            $_tmp = ob_get_clean();

            require_once ROOT.'app/views/index.php';
        } else {
            throw new Exception('Template '. $path .' not found');
        }
    }
}