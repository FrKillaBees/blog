<?php

    class log
    {
        public static function yamaha($e) {
             $date = new DateTime();
            $date -> setTimezone(new DateTimeZone('Europe/Paris'));


            public $log = array(
                "Date" => $date -> format('Y-m-d h:i:s');
                "Message" => $e -> getMessage()
            );

            $log_file = fopen ("./logs/logs_" . $date -> format ('d-m-y') . "csv", "a+");
            foutcsv($log_file,$log, ",");
            fclose($log_file);
        }
    }
