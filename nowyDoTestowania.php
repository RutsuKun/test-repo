<?php
namespace Tests\Test;
 
use Tests\TestCase;
 
class SuperTestsWithDataProviders extends TestCase
{

    /**
     * @feature superTestWwithDataProvider edited
     * @scenario yaaaaaaaaaaaaaaaaa edited
     * @case yoooooooooooooooo dgwrgwrgrggr
     *
     * @feature svwrgwgwgwgwgrwg
     * @scenario wrgrwgrwgrwgrwgrwg
     * @case wrgrwgrwgrwgrwgrwg
     *
     * @suite egegrgwgwrgrwg
     * @suite yeeeeeeeeeeeeeee
     * @description super test weffqg
     * @test
     * @dataProvider testDataProvider
     * @dataProvider testDataProviderSecond
     */
    public function superTestWwithDataProvide(String $one, Integer $expected)
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
            'test 1' => ['one' => 'ONE', 'two' => 1],
            'test 2' => ['one' => 'THREE', 'two' => 3],
            'test 3' => ['one' => 'THREE', 'two' => 3],
            'test 4' => ['one' => 'SEVEN', 'two' => 7],
            'dodaje nowy - edited' => ['one' => 'test1', 'two' => 'test2'],
            'aaaaaaaaaa' => ['one' => 'aaaaaaaaaaa', 'two' => 'aaaaaaaaaaaaaaaaaa'],
        ];
    }
    public function testDataProviderSecond()
    {
        return [
            'test 7' => ['one' => 'THREE', 'two' => 3],
            'test 8' => ['one' => 'SEVEN', 'two' => 7],
            'aaaaa' => ['one' => 123, 'two' => true],
            'test 5' => ['one' => 'TWO', 'two' => 2],
            'test 6' => ['one' => 'ONE', 'two' => 1],
            'ergreggwgwg' => ['one' => 'wrgrwgrwgrwg', 'two' => 'wgrwgwgwrg'],
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
