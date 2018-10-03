<?php

include "Player.php";
include "Deck.php";

class Game {
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
    
}

?>