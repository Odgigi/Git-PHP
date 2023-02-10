<?php

class Article{
    public string $titre;
    public string $contenu;
    public string $dt_creation;

    public function __construct(string $titre_p, string $contenu_p, string $dt_creation_p){
        $this->titre = $titre_p;
        $this->contenu = $contenu_p;
        $this->dt_creation = $dt_creation_p;
    }

    public function genererHTML() : string{
        return "<article> 
        <h2> {$this->titre} </h2>
        <p>{$this->contenu}</p>
        <p>{$this->dt_creation}</p>
        </article>";
    }
}

class ArticleTechnique extends Article{
    public function __construct(){
        parent::__construct("Article technique", "lorem ipsum", date("d/m/Y"));
    }
}

$a = new ArticleTechnique();
echo $a->genererHTML();

// https://www.php.net/manual/fr/datetime.formats.date.php

