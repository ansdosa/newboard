<?php
// TODO: Выпилить

function countDate($time) {
    $h = $time / 3600;
    $h = ceil($h) > $h ? ceil($h) - 1 : ceil($h);
    $m = ($time - $h * 3600) / 60;
    $m = ceil($m) > $m ? ceil($m) - 1 : ceil($m);
    $s = $time - ($h * 3600 + $m * 60);
    $s = ceil($s) > $s ? ceil($s) - 1 : ceil($s);

    return $h . 'ч, ' . $m . 'мин, ' . $s . ' сек';
}

function get_size($size) {
    if ($size > pow(1024, 4)) return ceil($size / pow(1024, 4)) . ' Тб';
    elseif ($size > pow(1024, 3)) return ceil($size / pow(1024, 3)) . ' Гб'; elseif ($size > pow(1024, 2)) return ceil($size / pow(1024, 2)) . ' Мб'; elseif ($size > 1024) return ceil($size / 1024) . ' Кб'; else return $size . ' байт';
}

function get_bitrate($size) {
    if ($size > pow(1024, 4)) return ceil($size / pow(1024, 4)) . ' Тбит/сек.';
    elseif ($size > pow(1024, 3)) return ceil($size / pow(1024, 3)) . ' Гбит/сек.'; elseif ($size > pow(1024, 2)) return ceil($size / pow(1024, 2)) . ' Мбит/сек.'; elseif ($size > 1024) return ceil($size / 1024) . ' Кбит/сек.'; else return $size . ' бит/с';
}