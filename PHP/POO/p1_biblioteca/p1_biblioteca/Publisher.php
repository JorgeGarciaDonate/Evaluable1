<?php
 class Publisher {
    private $id;
    private $name;
    private $address;
    private $telephone;
    private $website;

    public function __construct($id, $name, $address, $telephone, $website) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->website = $website;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }
}

?>
