<?php

namespace App\Helpers;

class StringHelper {

    public static function getHostFromUrl($url) {
        $parse = parse_url($url);
        if (!$parse) { return false; }
        return $parse['host'];
    }

    /** Devuelve los bytes pasados a la medida que más se ajuste para que sea legible
     * Por ejemplo: 20597B serían 21KB, 996147B serían 0,95MB
     */
    public static function formatBytesSize($bytes) {
        $bytes = intval($bytes);
        $letters = ['B', 'KB', 'MB', 'GB', 'TB'];
        $i = 0;
        $step = 1024;
        while (($i < count($letters)) && ($bytes > $step)) {
            $bytes = $bytes / $step;
            $i++;
        }
        return round($bytes, 2) . $letters[$i];
    }

    public static function instance() {
        return new StringHelper();
    }

}