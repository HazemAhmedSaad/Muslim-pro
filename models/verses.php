<?php
class Verse
{
    private $id;
    private $content;
    private $NumberOfVerses;
    private $NameOfSurah;


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
    public function getNumberOfVerses()
    {
        return $this->NumberOfVerses;
    }
    public function setNumberOfVerses($NumberOfVerses)
    {
        $this->NumberOfVerses = $NumberOfVerses;
    }
    public function getNameOfSurah()
    {
        return $this->NameOfSurah;
    }
    public function setNameOfSurah($NameOfSurah)
    {
        $this->NameOfSurah = $NameOfSurah;
    }
}
