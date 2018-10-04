<?php

include "Player.php";
include "Deck.php";

class Game {
    private $players;
    private $deck;
    private $timeElapsed;
    private $totalScore;
    private $totalRounds;
    
    private $playerNames = array("Jeremy", "Andy", "Elizabeth", "Eric");
    private $playerImages = array("imgs/", "imgs/", "imgs/", "imgs/");
    
    
    public function __construct() {
        shuffle($this->playerNames);
        shuffle($this->playerImages);
        $this->deck = new Deck;
        $this->players = array(
            new Player($this->playerNames[0], $this->playerImages[0]),
            new Player($this->playerNames[1], $this->playerImages[1]),
            new Player($this->playerNames[2], $this->playerImages[2]),
            new Player($this->playerNames[3], $this->playerImages[3])
            );
        
        $totalRounds = 0;
    }
    
    // play function
    public function play() {
        $starttime = microtime(true);
        
        $hits = array(true, true, true, true);
        
        while ($hits[0] || $hits[1] || $hits[2] || $hits[3]) {
            if ($hits[0]) {
                $this->players[0]->addCard($this->deck->hit());
                $hits[0] = $this->players[0]->hit();
            }
            
            if ($hits[1]) {
                $this->players[1]->addCard($this->deck->hit());
                $hits[1] = $this->players[1]->hit();
            }
            
            if ($hits[2]) {
                $this->players[2]->addCard($this->deck->hit());
                $hits[2] = $this->players[2]->hit();
            }
            
            if ($hits[3]) {
                $this->players[3]->addCard($this->deck->hit());
                $hits[3] = $this->players[3]->hit();
            }
            
            $this->totalRounds++;
        }
        
        foreach ($this->players as $player) {
            $player->displayPlayer();
            $player->displayHand();
        }
        $endtime = microtime(true);
        $this->timeElapsed = $endtime - $starttime;
        
        $this->displayWinner();
    }
    
    // determine winner
    public function winner() {
        $p0 = 42 - $this->players[0]->getScore();
        $p1 = 42 - $this->players[1]->getScore();
        $p2 = 42 - $this->players[2]->getScore();
        $p3 = 42 - $this->players[3]->getScore();
        $winner = array( $p0 < 0 ? $p0 * -100 : $p0,
                         $p1 < 0 ? $p1 * -100 : $p1,
                         $p2 < 0 ? $p2 * -100 : $p2,
                         $p3 < 0 ? $p3 * -100 : $p3);
        sort($winner);
        $playerWin;
        if ($winner[0] == $p0) {
            $playerWin = $this->players[0];
        } else if ($winner[0] == $p1) {
            $playerWin = $this->players[1];
        } else if ($winner[0] == $p2) {
            $playerWin = $this->players[2];
        } else {
            $playerWin = $this->players[3];
        }
        $this->totalScore = 0;
        for ($i = 1; $i < 4; ++$i) {
            $this->totalScore += $winner[$i];
        }
        
        return $playerWin;
    }
    
    // Display Winner
    public function displayWinner() {
        $playerWin = $this->winner();
        echo "<h4>" . $playerWin->getName() . " wins " . $this->totalScore . "points!! </h4> <br />";
        echo "<h4> Time elapsed: " . $this->timeElapsed . " secs </h4><br />";
        echo "<h4> Rounds played: " . $this->totalRounds . "</h4><br />";
    }

    
    
}

?>