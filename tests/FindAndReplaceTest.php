<?php
require_once "src/FindAndReplace.php";

class FindAndReplaceTest extends PHPUnit_Framework_TestCase
{
    function test_execute_singleWord()
    {
        //Arrange
        $test_FindAndReplace = new FindAndReplace;
        $input1 = "hello world";
        $input2 = "world";
        $input3 = "universe";

        //Act
        $result = $test_FindAndReplace->execute($input1, $input2, $input3);

        //Assert
        $this->assertEquals("hello universe", $result);
    }

    function test_execute_beginningSingleWord()
    {
        //Arrange
        $test_FindAndReplace = new FindAndReplace;
        $input1 = "world hello";
        $input2 = "world";
        $input3 = "universe";

        //Act
        $result = $test_FindAndReplace->execute($input1, $input2, $input3);

        //Assert
        $this->assertEquals("universe hello", $result);
    }
}
?>
