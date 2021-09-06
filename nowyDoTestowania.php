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
	
    /**
     * @feature superTestWwithDataProviderWithError
     * @scenario yaaaaaaaaaaaaaaaaa
     * @case yooooooooooooooooo
     * @suite: yeeeeeeeeeeeeeee
     *
     * @test
     * @dataProvider testDataProviderWithError
     */
    public function superTestWwithDataProviderWithError(String $one, Integer $two)
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
    public function testDataProviderWithError()
    {
        return [
            'test 5' => [ 'one' => 'ONE', 'two' => ],
            'test 6' => [ 'one' => 'THREE', 'two' => 3],
            'test 7' => [ 'one' => 'THREE', 'two' => 3],
            'test 8' => [ 'one' => 'SEVEN', 'two' => 7],
	    'test 9' => [ 'one' => 'SEVEN', 'two' => 7]
            'test 10' => [ 'one' => 'SEVEN', 'two' => 7]
	    'test 11' => [ 'one' => 'SEVEN', 'two' => 7]
        ];
    }
}
?>
