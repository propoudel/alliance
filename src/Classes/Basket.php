<?php namespace Tuklal\Alliance\Classes;

abstract class Basket
{
    public $status;
    public $size;
    private $title;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getStatus(){
       return $this->size;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function count()
    {
        return count($this->items);

    }

    public function check()
    {

    }

    public function remove()
    {

    }

}