<?php namespace Tuklal\Alliance\Classes;

use Tuklal\Alliance\Classes\Basket;

class Fruit
{
    public $color;
    public $size;
    public $dateOfAppearance;
    public $expireIn;
    public $status;
    public $consumed;
    public static $fruits = [];

    const STATUS_ON_TREE   = 'on tree';
    const STATUS_ON_GROUND = 'on ground';

    public function __construct($color)
    {
        $this->color      = $color;
        $this->status     = self::STATUS_ON_TREE;
        $this->size       = 1;
        $this->consumed   = 0;
        $this->expireIn   = 7;
        self::$fruits[] = $this;
    }

    public function eat($consumed)
    {
        if ($this->status != self::STATUS_ON_TREE && $consumed > 0) {
            $this->size -= $consumed/100;
        }
    }

    public function fallToGround()
    {
        $this->status = self::STATUS_ON_GROUND;
        $this->dateOfAppearance = time();
    }

    public function lost_hour(Basket $basket)
    {
        $this->dateOfAppearance -= 3600;
    }

    public function putToTheBasket(Basket $basket)
    {
        $basket->addFruits($this);
    }

    public function growOld()
    {

    }
}