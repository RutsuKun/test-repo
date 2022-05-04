<?php
namespace Tests\Test;
 
use Tests\TestCase;
 
class SuperTestsWithDataProviders extends TestCase
{

    /**
     * @feature Feature with data providers
     * @scenario yaaaaaaaaaaaaaaaaa edited
     * @case yoooooooooooooooo dgwrgwrgrggr
     *
     * @feature Feature with data providers
     * @scenario 1 scenario with data providers
     * @case 1 case with data provider
     *
     * @feature aaa
     * @scenario aaa
     * @case aaa
     *
     * @feature aaa
     * @scenario aaa
     * @case aaa
     *
     * @feature aaa
     * @scenario aaa
     * @case aaa
     *
     * @feature aaa
     * @scenario aaa
     * @case aaa
     *
     * @suite egegrgwgwrgrwg
     * @suite yeeeeeeeeeeeeeee
     * @expectation i dont know, we'll see, something must surely return, EDITED IN APPEND FSC, another
     * edit and new line
     *
     * @description super test weffqg
     * @test
     * @dataProvider dataProvider
     * @dataProvider dataProviderSecond
     */
    public function testWithDataProviders(String $one, Integer $expected)
    {
      // TODO implement
    }

    /**
     * @feature Feature with data providers
     * @scenario yaaaaaaaaaaaaaaaaa-edited
     * @case yooooooooooooooooo
     *
     * @suite yeeeeeeeeeeeeeee
     * @expectation nothing
     * @description idk
     * @test
     * @dataProvider dataProviderWithError
     */
    public function superTestWwithDataProviderWithError(String $one, Integer $two)
    {
      // TODO implement
    }

    public function dataProvider()
    {
        return [
            'test 1' => ['one' => 'ONE', 'two' => 1],
            'test 2' => ['one' => 'THREE', 'two' => 3],
            'test 3' => ['one' => 'THREE', 'two' => 3],
            'test 4' => ['one' => 'SEVEN', 'two' => 7],
            'dodaje nowy - edited' => ['one' => 'test1', 'two' => 'test2'],
            'dataset z obiektem' => ['one' => [ 'one' => 'ONE', 'two' => 1 ], 'two' => [ 'one' => 'ONE', 'two' => 1 ]]
        ];
    }
    public function dataProviderSecond()
    {
        return [
            'test 7' => ['one' => 'THREE', 'two' => 3],
            'test 8' => ['one' => 'SEVEN', 'two' => 7],
            'test 5' => ['one' => 'TWO', 'two' => 2],
            'test 6' => ['one' => 'ONE', 'two' => 1],
            'test aaa' => ['one' => 'aaaaa', 'two' => 'aaaaaaaa'],
            'aaaaaaaabbbcccccccc' => ['one' => 1, 'two' => true],
        ];
    }
    public function dataProviderWithError()
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
