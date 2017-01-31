<?php namespace Tuklal\Alliance\Classes;

use Tuklal\Alliance\Classes\Fruit;

class Basket
{

    public $status;
    protected $title;
    public $size;
    protected $fruits = [];

    const STATUS_EMPTY = 'empty';
    const STATUS_FULL = 'full';
    const STATUS_NOT_EMPTY = 'not empty';

    public function __construct($size = 100)
    {
        $this->size = $size;
        $this->status = self::STATUS_EMPTY;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function addFruits(Fruit $fruit)
    {
        $this->fruits[] = $fruit;
        $count = $this->countFruits();
        if ($count > 0 && $this->size == $count) {
            $this->status = self::STATUS_FULL;
        } else if ($count > 0 && $count < $this->size) {
            $this->status = self::STATUS_NOT_EMPTY;
        } else {
            $this->status = self::STATUS_EMPTY;
        }
    }

    public function countFruits()
    {
        return count($this->fruits);
    }

    public function checkFruits()
    {

    }

    public function removeFruits()
    {

    }

}