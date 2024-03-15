<?php

namespace App;
class StringReverse
{
    public function getDelimiters($str): string
    {
        if (preg_match('/[`\- ,]+/', $str, $matches)) {
            return $matches[0];
        }
        return '';
    }

    public function getReverse($str): string
    {
        $delimiter = $this->getDelimiters($str);

        if ($delimiter !== '') {
            $result = [];
            $array = explode($delimiter, $str);
            foreach ($array as $arr) {
                $result[] = $this->getReverse($arr);
            }
            return implode($delimiter, $result);
        }

        $result = '';
        $newStr = strrev($str);
        $len = strlen($newStr);

        for ($i = 0; $i < $len; $i++) {
            $charNewStr = $newStr[$i];
            $charStr = $str[$i];
            $result .= ctype_lower($charStr) ? strtolower($charNewStr) : strtoupper($charNewStr);
        }
        return $result;
    }
}