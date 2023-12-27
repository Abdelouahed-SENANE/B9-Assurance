<?php 

class Claims {
    private $description;
    private Article $article;

    public function __construct()
    {
        
    }




    public function __get($name)
    {
        if (property_exists($this , $name)) {
            return $this->$name;
        }else {
            echo "Proprety Not exists";
            return null;
        }
        
    }
    public function __set($name, $value)
    {
        if (property_exists($this , $name)) {
            return $this->$name = $value;
        }else {
            echo "Proprety Not exists";
            return null;
        }
    }
    public function getArticle() {
        return $this->article;
    }
    public function setArticle(Article $objet) {
        return $this->article = $objet;
    }

}
?>