<?php

use App\Capicua;
use PHPUnit\Framework\TestCase;

class CapicuaTest extends TestCase
{
    /**
     * @test
     * @dataProvider capicuas
     */
    public function capicua($number, $expected)
    {
        $capicua = new Capicua();
        $this->assertEquals($expected, $capicua->get($number));
    }

    public function capicuas()
    {
        return [
            [11, 11],
            [12, 33],
            [13, 44],
            [14, 55],
            [15, 66],
            [16, 77],
            [17, 88],
            [18, 99],
            [19, 121],
            [20, 22],
            [21, 33],
            [22, 22],
            [23, 55],
            [24, 66],
            [25, 77],
            [26, 88],
            [27, 99],
            [28, 121],
            [29, 121],
            [30, 33],
            [31, 44],
            [32, 55],
            [33, 33],
            [34, 77],
            [35, 88],
            [36, 99],
            [37, 121],
            [38, 121],
            [39, 363],
            [40, 44],
            [41, 55],
            [42, 66],
            [43, 77],
            [44, 44],
            [45, 99],
            [46, 121],
            [47, 121],
            [48, 363],
            [49, 484],
            [50, 55],
            [51, 66],
            [52, 77],
            [53, 88],
            [54, 99],
            [55, 55],
            [56, 121],
            [57, 363],
            [58, 484],
            [59, 1111],
            [60, 66],
            [61, 77],
            [62, 88],
            [63, 99],
            [64, 121],
            [65, 121],
            [66, 66],
            [67, 484],
            [68, 1111],
            [69, 4884],
            [70, 77],
            [71, 88],
            [72, 99],
            [73, 121],
            [74, 121],
            [75, 363],
            [76, 484],
            [77, 77],
            [78, 4884],
            [79, 44044],
            [80, 88],
            [81, 99],
            [82, 121],
            [83, 121],
            [84, 363],
            [85, 484],
            [86, 1111],
            [87, 4884],
            [88, 88],
            [89, 8813200023188],
            [90, 99],
            [91, 121],
            [92, 121],
            [93, 363],
            [94, 484],
            [95, 1111],
            [96, 4884],
            [97, 44044],
            [98, 8813200023188],
            [99, 99],
        ];
    }
}
