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
        
        $hits = array(true, true, true, true);
        
        while ($hits[0] || $hits[1] || $hits[2] || $hits[3]) {
            if ($hits[0]) {
                $players[0]->addCard($deck->hit());
                $hits[0] = $players[0]->hit();
            }
            
            if ($hits[1]) {
                $players[1]->addCard($deck->hit());
                $hits[1] = $players[1]->hit();
            }
            
            if ($hits[2]) {
                $players[2]->addCard($deck->hit());
                $hits[2] = $players[2]->hit();
            }
            
            if ($hits[3]) {
                $players[3]->addCard($deck->hit());
                $hits[3] = $players[3]->hit();
            }
            
        }
        
        $endtime = microtime(true);
        $timeElapsed = $endtime - $starttime;
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

    
    
}

?>