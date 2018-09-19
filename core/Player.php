<?php

class Player {
    private $name = null;
    private $image = null;
    private $score = null;
    private $hand = null;
    private $playerNum = null;
    
    public function __construct() {
        $this->$name = "";
        $this->$image = "";
        $this->$score = 0;
        $this->$hand = array();
    }
    
    
    //Setters
    public function setName($name) {
        $this->$name = $name;
    }
    
    public function setImage($image) {
        $this->$image = $image;
    }

    
    // Modifiers
    public function addCard($card) {
        // Arguments: Card object.
        // Abstract: Add a card object.
        $this->$hand[] = $card;
    }
    
    public function updateScore() {
        // Arugments: None
        // Abstract: Iterates through cards, calculates score.
        $newScore = 0;
        
        foreach ($this->hand as $card) {
            $newScore += $card->getValue();    
        }
        
        $this->$score = $newScore;
    }
    
    
    // Displayers
    public function displayPlayer() {
        echo "<div id = 'player'>"; 
        echo "<h3 id = 'playerName'>" . $this->$name . "</h3>";
        echo "<h3 id = 'playerScore'>" . $this->$score . "</h3>";
        echo "<br />";
        echo "<img src = '" . $this->$image . "' alt = '" . $this->$name . "'/>";
        echo "</div>";
    }
    
    
}


?>