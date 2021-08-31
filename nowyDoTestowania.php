<?php
namespace Tests\Test;
 
use Tests\TestCase;
 
class SuperTestsWithDataProviders extends TestCase
{

 
    /**
     * @feature wrwgrwgrwh
     * @scenario wrhwhrwhrwhrrwh
     * @case wrhwhwhwh
     * @suite: wrhwhrwhrwhrwh
     *
     * @test
     * @dataProvider testDataProvider
     */
    public function superTestWwithDataProvider(String $one, Integer $two)
    {
      // TODO implement
    }
	
    public function testDataProvider()
    {
        return [
            'test 1' => [ 'one' => 'ONE', 'two' => 1],
            'test 2' => [ 'one' => 'THREE', 'two' => 3],
            'test 3' => [ 'one' => 'THREE', 'two' => 3],
            'test 4' => [ 'one' => 'SEVEN', 'two' => 7]
        ];
    }
}
?>
