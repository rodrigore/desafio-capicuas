<?php

namespace App;

class Capicua
{
    public function generate($from, $to)
    {
        foreach(range($from, $to) as $number) {
            print("[{$number}, {$this->get($number)}],\n");
        }
    }

    public function get($number)
    {
        $stringNumber = strval($number);

        while (! $this->isPalindrome($stringNumber)) {
            $stringNumber =  $this->sum($stringNumber);
        }
        return intval($stringNumber);
    }

    private function isPalindrome($stringNumber)
    {
        return $stringNumber == strrev($stringNumber);
    }

    private function sum($stringNumber)
    {
        return strval(intval(strrev($stringNumber)) + intval($stringNumber));
    }
}
