<?php
class Hadith{
    private $id;
    private $content;
    private $NameOfNarrator;
    private $NameOfsahih;
    //getter and setter for this class
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getNameOfNarrator()
    {
        return $this->NameOfNarrator;
    }
    public function setNameOfNarrator($NameOfNarrator)
    {
        $this->NameOfNarrator = $NameOfNarrator;
    }
    public function getNameOfsahih()
    {
        return $this->NameOfsahih;
    }
    public function setNameOfsahih($NameOfsahih)
    {
        $this->NameOfsahih = $NameOfsahih;
    }
}
?>