<?php
class Moto
{
    private $id;
    private $brand;
    private $model;
    private $type;
    private $picture;

    public function __construct($id, $brand, $model,$type, $picture)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->type= $type;
        $this->picture = $picture;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getBrand()
    {
        return htmlentities ($this->brand);
    }
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }
    public function getModel()
    {
        return htmlentities ($this->model);
    }
    public function setModel($model): void
    {
        $this->model = $model;
    }
    public function getType()
    {
        return htmlspecialchars ($this->type);
    }
    public function setType($type): void
    {
        $this->type = $type;
    }
    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }
}
