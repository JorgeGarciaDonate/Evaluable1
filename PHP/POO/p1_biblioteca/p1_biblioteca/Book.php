<?php
 class Book extends ReadingMaterial {
    private $chapters;
    private $authors;

    public function __construct($id, $title, $pages, $price, $editor, $chapters, $authors) {
        parent::__construct($id, $title, $pages, $price, $editor);
        $this->chapters = $chapters;
        $this->authors = $authors;
    }

    public function getChapters() {
        return $this->chapters;
    }

    public function setChapters($chapters) {
        $this->chapters = $chapters;
    }

    public function getAuthors() {
        return $this->authors;
    }

    public function setAuthors($authors) {
        $this->authors = $authors;
    }
}
?>