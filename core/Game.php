<?php

include "Player.php";
include "Deck.php";

class Game {
<<<<<<< HEAD
    private $player0;
    private $player1;
    private $player2;
    private $player3;
    private $deck;
    // 4 players
    // 1 deck
    public function __construct() {
        $player0 = new Player;
        $player1 = new Player;
        $player2 = new Player;
        $player3 = new Player;
        $deck = new Deck;
        $players = array(
            array($player0, $player0->displayPlayer()),
            array($player1, $player1->displayPlayer()),
            array($player2, $player2->displayPlayer()),
            array($player3, $player3->displayPlayer())
            );
    }
    // Constructor -> make 4 player objects, and the deck
    // takes an array of arrays { {player name, player image path} * 4}
    
    
    // play function
    public function play() {
        
    }
    
    // play round function - keeps track of # games
    public function rounds() {
        
    }
    
    // logic for scores
    public function score() {
        
    }
    
    // determine winner
    public function winner() {
        $p0 = abs($player0->getScore() - 42);
        $p1 = abs($player1->getScore() - 42);
        $p2 = abs($player2->getScore() - 42);
        $p3 = abs($player3->getScore() - 42);
        $winner = array($p0, $p1, $p2, $p3);
        sort($winner);
        $playerWin;
        if ($winner[0] == $p0) {
            $playerWin = $player0;
        } else if ($winner[0] == $p1) {
            $playerWin = $player1;
        } else if ($winner[0] == $p2) {
            $playerWin = $player2;
        } else {
            $playerWin = $player3;
        }
        return $playerWin;
    }
    
    // time elapsed + average time
    public function totalTime() {
        $starttime = microtime(true);
        $endtime = microtime(true);
        $timediff = $endtime - $starttime;
        echo $timediff;
    }
    
    // Display Winner
    public function displayWinner() {
        $playerWin = winner();
        $playerWin->displayPlayer();
    }
    // Generate players
=======
    private $playerNames = array("Jeremy", "Andy", "Elizabeth", "Eric");
    private $playerImages = array("imgs/", "imgs/", "imgs/", "imgs/");
    private $players = null;
    private $deck = null;
    private $numRounds = null;
    
    public function __construct() {
        $deck = new Deck();
    }
    
    public function play() {
        
    }
    
    public function winner() {
        
    }
    
    public function timeElapsed() {
        
    }
    
    public function displayWinner() {
        
    }
    
>>>>>>> 81c3f77a6e3746a98ecd1b7ce0096c6c88914bd2
}

?>