<?php
    if (!function_exists('toKhmerNumber')) {
        function toKhmerNumber($number) {
            $khmerDigits = ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];
            $number = (string) $number;
            $khmerNumber = '';
            foreach (str_split($number) as $digit) {
                if (is_numeric($digit)) {
                    $khmerNumber .= $khmerDigits[$digit];
                } else {
                    $khmerNumber .= $digit;
                }
            }   
            $khmerNumber = str_replace('-', '/', $khmerNumber);
            return $khmerNumber;
        }
    }
?>