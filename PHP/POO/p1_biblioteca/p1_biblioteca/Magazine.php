<?php
 class Magazine extends ReadingMaterial {
    private $additionalResources;

    public function __construct($id, $title, $pages, $price, $editor, $additionalResources) {
        parent::__construct($id, $title, $pages, $price, $editor);
        $this->additionalResources = $additionalResources;
    }

    public function getAdditionalResources() {
        return $this->additionalResources;
    }

    public function setAdditionalResources($additionalResources) {
        $this->additionalResources = $additionalResources;
    }
}
?>