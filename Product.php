<?php


class Product
{
    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct($id, $title, $price, $instock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->instock = $instock;
    }
    // TODO Skriv getters för alla properties
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getInstock()
    {
        return $this->inStock;
    }
}
