<?php
class Hijj
{
    private $id;
    private $hijj_image;
    private $hijj_place;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getHijjImage()
    {
        return $this->hijj_image;
    }
    public function setHijjImage($hijj_image)
    {
        $this->hijj_image = $hijj_image;
    }
    public function getHijjPlace()
    {
        return $this->hijj_place;
    }
    public function setHijjPlace($hijj_place)
    {
        $this->hijj_place = $hijj_place;
    }
}