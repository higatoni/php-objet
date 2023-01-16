<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        class Chaineplus{
            // Attributs
            private $_texte;

            // getters $ setters
            
            public function getTexte(){
                return $this->_texte;
            }

            public function setTexte($leTexte){
                $leTexte="<p>{$leTexte}</p>";
                $this->_texte=$leTexte;
            }
            // Méthodes 
            public function gras(){
               return "<b>".$this->getTexte()."</b>";
            }
            public function italique() {
                return "<em>{$this->getTexte()}</em>";
            }
            public function souligner() {
                return "<u>{$this->getTexte()}</u>";
            }
        
            public function majuscule() {
                return "<em>".strtoupper($this->getTexte())."</em>";
            }
            
        }
        $maChaineplus = new Chaineplus();
        $maChaineplus->setTexte("Programmation Orientée Objet en PHP");
        echo $maChaineplus->gras();
        echo $maChaineplus->italique();
        echo $maChaineplus->souligner();
        echo $maChaineplus->majuscule();
    ?>
</body>
</html>