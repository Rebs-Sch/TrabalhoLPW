<?php

class Link{
    private $linkimg;
    private $info;

    public function __construct($l, $i){
        $this->linkimg = $l;
        $this->info = $i;
    }

    /**
     * Get the value of linkimg
     */
    public function getLinkimg()
    {
        return $this->linkimg;
    }

    /**
     * Set the value of linkimg
     */
    public function setLinkimg($linkimg): self
    {
        $this->linkimg = $linkimg;

        return $this;
    }

    /**
     * Get the value of info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     */
    public function setInfo($info): self
    {
        $this->info = $info;

        return $this;
    }
}
