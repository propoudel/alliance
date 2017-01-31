<?php namespace Tuklal\Alliance\Classes;

abstract class Fruit
{

    public $color;
    private $size;
    private $appearDate;
    private $expireIn;
    private $status;
    private $consumedQty;


    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getAppearDate()
    {
        return $this->appearDate;
    }

    public function setAppearDate($date)
    {
        $this->appearDate = $date;
    }

    public function getExpiredIn()
    {
        return $this->expireIn;
    }

    public function setExpireIn($date)
    {
        $this->expireIn = $date;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getConsumedQty()
    {
        return $this->consumedQty;
    }

    public function setConsumeQty($qty)
    {
        $this->consumedQty = $qty;
    }

    public function eat()
    {

    }


    public function fall()
    {

    }


    public function grow()
    {

    }

    public function addToBasket()
    {

    }

}