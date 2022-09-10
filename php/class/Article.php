<?php

class Article
{
    private $title;
    private $content;
    private $homeImage;
    
    public function __construct($title = "",$content = "",$homeImage = "")
    {
        $this->title = $title;
        $this->content = $content;
        $this->homeImage = $homeImage;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get the value of homeImage
     */ 
    public function getHomeImage()
    {
        return $this->homeImage;
    }
}