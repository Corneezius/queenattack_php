<?php
    require_once "src/queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase {

        function test_QueenAttack_Row() {
          //Arrange
              $test_Queen = new Queen;
              $position = "d6";
              $target = "d8";

              //Act
              $result = $test_Queen->canAttack($position, $target);

              //Assert
              $this->assertEquals(true, $result);
        }
    }
?>
