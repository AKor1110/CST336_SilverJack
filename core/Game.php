<?php

include "Player.php";
include "Deck.php";

class Game {
    private $players;
    private $deck;
    private $timeElapsed;
    
    private $playerNames = array("Jeremy", "Andy", "Elizabeth", "Eric");
    private $playerImages = array("imgs/", "imgs/", "imgs/", "imgs/");
    
    
    public function __construct() {
        shuffle($playerNames);
        shuffle($playerImages);
        $deck = new Deck;
        $players = array(
            new Player($playerNames[0], $playerImages[0]),
            new Player($playerNames[1], $playerImages[1]),
            new Player($playerNames[2], $playerImages[2]),
            new Player($playerNames[3], $playerImages[3])
            );
    }
    
    // play function
    public function play() {
        $starttime = microtime(true);
        
        
        
        $endtime = microtime(true);
        $timeElapsed = $endtime - $starttime;
    }
    
    // play round function - keeps track of # games
    public function rounds() {
        
    }
    
    // logic for scores
    public function score() {
        
    }
    
    // determine winner
    public function winner() {
        $p0 = abs($players[0]->getScore() - 42);
        $p1 = abs($players[1]->getScore() - 42);
        $p2 = abs($players[2]->getScore() - 42);
        $p3 = abs($players[3]->getScore() - 42);
        $winner = array($p0, $p1, $p2, $p3);
        sort($winner);
        $playerWin;
        if ($winner[0] == $p0) {
            $playerWin = $players[0];
        } else if ($winner[0] == $p1) {
            $playerWin = $players[1];
        } else if ($winner[0] == $p2) {
            $playerWin = $players[2];
        } else {
            $playerWin = $players[3];
        }
        return $playerWin;
    }
    
    // Display Winner
    public function displayWinner() {
        $playerWin = winner();
        $playerWin->displayPlayer();
    }
    // Generate players
  
    
}

?>