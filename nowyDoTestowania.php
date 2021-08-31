<?php
namespace Tests\Test;
 
use Tests\TestCase;
 
class SuperTestsWithDataProviders extends TestCase
{

 
    /**
     * @feature superTestWwithDataProvider
     * @scenario yaaaaaaaaaaaaaaaaa
     * @case yooooooooooooooooo
     * @suite: yeeeeeeeeeeeeeee
     *
     * @test
     * @dataProvider testDataProvider
     * @dataProvider testDataProviderSecond
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
    public function testDataProviderSecond()
    {
        return [
            'test 5' => [ 'one' => 'ONE', 'two' => 1],
            'test 6' => [ 'one' => 'THREE', 'two' => 3],
            'test 7' => [ 'one' => 'THREE', 'two' => 3],
            'test 8' => [ 'one' => 'SEVEN', 'two' => 7]
        ];
    }
}
?>
