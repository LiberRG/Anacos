<?php

namespace App\Helpers;

class DateHelper {

    public static function mysqlTime2SpanishDate($timestamp) {
        return date('d/m/Y', strtotime($timestamp));
    }

    public static function mysqlTimeIsPast($timestamp) {
        $nowDatetime = date('Y-m-d H:i');
        $timestampDatetime = date("Y-m-d H:i", strtotime($timestamp));
        return (strtotime($nowDatetime) > strtotime($timestampDatetime));
    }

    public static function instance() {
        return new DateHelper();
    }

}