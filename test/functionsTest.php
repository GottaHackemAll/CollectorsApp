<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
   public function testProcessData_returnsAString_success() {

       $testArray = [['id' => 1, 'common_name' => 'American Persimmon', 'latin_name' => 'Diospyros virginiana', 'canopy_level' => 'CANOPY LAYER', 'life_span' => 60],
           ['id' => 2, 'common_name' => 'Nodding Saltbush', 'latin_name' => 'Einadia wutans', 'canopy_level' => 'SHRUB LAYER', 'life_span' => 10]];

       $expectedResult =  '<div class="row"><ul><li>1</li><li>American Persimmon</li><li>Diospyros virginiana</li><li>CANOPY LAYER</li><li>60</li></ul></div><div class="row"><ul><li>2</li><li>Nodding Saltbush</li><li>Einadia wutans</li><li>SHRUB LAYER</li><li>10</li></ul></div>';

       $result = processData($testArray);

       $this->assertEquals($expectedResult, $result);
   }

    public function testDisplayID_returnsAString_success() {

       $testArray = [['id' => 1], ['id' => 2], ['id' => 3]];

       $expectedResult = '<p>1</p><p>2</p><p>3</p>';

       $result = displayID($testArray);

        $this->assertEquals($expectedResult, $result);
    }

}