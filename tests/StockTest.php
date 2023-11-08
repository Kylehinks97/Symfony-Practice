<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StockTest extends KernelTestCase
{

    public function testItWorks()
    {
        function returnArrayOfZeros($num)
        {
            if ($num === 0) return [];
            $result4 = [];
            for ($i=0; $i < $num; $i++) { 
                $array = array_fill(0, $num, 0);
                array_push($result4, $array);
            }
            return $result4;
        };
        $result0 = returnArrayOfZeros(0);
        $result4 = returnArrayOfZeros(4);

        $this->assertCount(4, $result4);
        $this->assertCount(4, $result4[0]);
        $this->assertCount(4, $result4[1]);
        $this->assertCount(4, $result4[2]);
        $this->assertCount(4, $result4[3]);
        $this->assertIsArray($result4);
        $this->assertIsNotString($result4);
  
        $this->assertEmpty($result0);
    }
}
