<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_play_when_player_1_wins()
        {
            // Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Rock";
            $second_input = "Scissors";

            // Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            // Assert
            $this->assertEquals("Player 1", $result);
        }

         function test_play_when_player_2_wins()
        {
            // Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Scissors";

            // Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            // Assert
            $this->assertEquals("Player 2", $result);
        }

         function test_play_when_draw()
        {
            // Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Rock";
            $second_input = "Rock";

            // Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            // Assert
            $this->assertEquals("Draw", $result);
        }

    }

?>