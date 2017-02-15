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

    function test_execute_multipleWords()
    {
        //Arrange
        $test_FindAndReplace = new FindAndReplace;
        $input1 = "hello world world";
        $input2 = "world";
        $input3 = "universe";

        //Act
        $result = $test_FindAndReplace->execute($input1, $input2, $input3);

        //Assert
        $this->assertEquals("hello universe universe", $result);
    }

    function test_execute_partials()
    {
        //Arrange
        $test_FindAndReplace = new FindAndReplace;
        $input1 = "I'm walking my cat to the cathedral";
        $input2 = "cat";
        $input3 = "dog";

        //Act
        $result = $test_FindAndReplace->execute($input1, $input2, $input3);

        //Assert
        $this->assertEquals("I'm walking my dog to the doghedral", $result);
    }
}
?>
