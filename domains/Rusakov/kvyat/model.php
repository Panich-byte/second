<?php
class Article{
    protected $title;
    protected $body;
    protected $fontSizeTitle;
    protected $backBody;
    protected $alaginText;
    protected $borderOne;

    public function __construct($title, $body, $fontSizeTitle="2rem", $backBody="gray", $alaginText="center", $borderOne="2px solid black")
    {
        $this->title=$title;
        $this->body=$body;
       $this->fontSizeTitle=$fontSizeTitle;
        $this->backBody=$backBody;
        $this->alaginText=$alaginText;
        $this->borderOne=$borderOne;

    }
    public function outArticle (){
        echo "<div style='background:{$this->backBody}; text-align:{$this->alaginText}; border: {$this->borderOne};'>    
        <h3
        style='font-size: {$this->fontSizeTitle};'> {$this->title}</h3>
         <p> {$this->body}         
         </p>\";
        
            </div>";
    }
}
class SportArticle extends Article{
    private $img;
    public function __construct  ($title, $body, $img, $fontSizeTitle="2rem", $backBody="gray", $alaginText="center", $borderOne="2px solid black"){
        parent::__construct($title, $body, $fontSizeTitle, $backBody, $alaginText, $borderOne);
        $this->img=$img;
    }
    public function outArticle() {
        echo "<div style='background:{$this->backBody}; text-align:{$this->alaginText}; border: {$this->borderOne};'>
        <h3
        style='font-size: {$this->fontSizeTitle};'> {$this->title}</h3>
         <p> {$this->body}
         <img src='{$this->img}'>
         </p>\";
        
            </div>";
    }
}
