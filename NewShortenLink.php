<?php
namespace modules\punyshort;

class NewShortenLink {
    private $link;
    private $fullLink;
    private $error;

    public function __construct($link, $fullLink, $error){
        $this->link = $link;
        $this->fullLink = $fullLink;
        $this->error = $error;
    }

    public function getFullLink(){
        return $this->fullLink;
    }

    public function setFullLink($fullLink){
        $this->fullLink = $fullLink;
        return $this;
    }

    public function getError(){
        return $this->error;
    }

    public function setError($error){
        $this->error = $error;
        return $this;
    }

    public function getLink(){
        return $this->link;
    }

    public function setLink($link){
        $this->link = $link;
        return $this;
    }
}