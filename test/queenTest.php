<?php
    require_once "src/queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase {

        function test_QueenAttack_Row() {
          //Arrange
              $test_Queen = new Queen;
              $position = "d4";
              $target = "d8";

              //Act
              $result = $test_Queen->canAttack($position, $target);

              //Assert
              $this->assertEquals(true, $result);
        }

        function test_QueenAttack_Column() {
          //Arrange
              $test_Queen = new Queen;
              $position = "d4";
              $target = "a4";

              //Act
              $result = $test_Queen->canAttack($position, $target);

              //Assert
              $this->assertEquals(true, $result);
        }
        function test_QueenAttack_UpRight() {
          //Arrange
              $test_Queen = new Queen;
              $position = "d4";
              $target = "e5";

              //Act
              $result = $test_Queen->canAttack($position, $target);

              //Assert
              $this->assertEquals(true, $result);
        }
    }
?>
