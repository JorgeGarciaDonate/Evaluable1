<?php
abstract class ReadingMaterial {
    private $id;
    private $title;
    private $pages;
    private $price;
    private $editor;

    public function __construct($id, $title, $pages, $price, $editor) {
        $this->id = $id;
        $this->title = $title;
        $this->pages = $pages;
        $this->price = $price;
        $this->editor = $editor;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getEditor() {
        return $this->editor;
    }

    public function setEditor($editor) {
        $this->editor = $editor;
    }

    public function añadirIVA() {
        if ($this instanceof Book) {
            $this->setPrice($this->getPrice() * 1.04);
        } elseif ($this instanceof Magazine) {
            $this->setPrice($this->getPrice() * 1.09);
        }
    }

    public function mostrarCategoria() {
        if ($this->getPages() < 50) {
            return "mini";
        } else {
            return "large";
        }
    }
}
?>