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
        // Arguments: Player name as string.
        // Abstract: Sets member variable 'name' to value.
        $this->$name = $name;
    }
    
    public function setImage($image) {
        // Arguments: Image path as string.
        // Abstract: Sets member variable 'image' to path value.
        $this->$image = $image;
    }

    
    // Modifiers
    public function addCard($card) {
        // Arguments: Card object.
        // Abstract: Add a card object.
        array_push($this->$hand, $card);
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
        // Arguments: None
        // Abstract: Displays the player name, score, and image.
        
        echo "<div id = 'player'>"; 
        echo "<h3 id = 'playerName'>" . $this->$name . "</h3>";
        echo "<h3 id = 'playerScore'>" . $this->$score . "</h3>";
        echo "<br />";
        echo "<img src = '" . $this->$image . "' alt = '" . $this->$name . "'/>";
        echo "</div>";
    }
    
    public function displayHand() {
        // Arguments: None
        // Abstract: Displays the players hand, via card image.
        echo "<div id = 'playerHand'>";
        
        foreach ($this->$hand as $card) {
            $card->$displayCard();
        }
        
        echo "</div>";
    }
    
}


?>