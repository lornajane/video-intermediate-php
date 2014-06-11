<?php

namespace MyApp;

class Article {
    protected $body;
    protected $title;

    public function __construct() {
        // magically populate properties
    }
    public function getBody() {
        return $this->body;
    }
    public function getTitle() {
        return $this->title;
    }
}
