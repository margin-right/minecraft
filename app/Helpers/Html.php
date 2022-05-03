<?php

namespace App\Helpers;

class Html{
    public static function alert($message, $type){

        /* Запись сообщения в сессию для вывода на страницу */

        session(['alert' => $message, 'alert_type' => $type]);
    }
}

?>