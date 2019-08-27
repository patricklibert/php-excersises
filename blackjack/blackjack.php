<?php

class blackjack {
    var $score = 0;
    function hit() {
        $this->score = $this->score + rand(1,11);
    }
    function stand() {

    }
    function surrender() {

    }


}

?>
