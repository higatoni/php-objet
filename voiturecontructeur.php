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
        class voiture {
            // Attributs
            private $_nom;
            private $_annee;

            // getters $ setters
            public function __construct($_nom, $_annee) {
                $this->setNom($_nom); 
                $this->setAnnee($_annee); 
            }
            
            public function getNom(){
                return $this->_nom;
            }
            public function setNom($Nom){
                $this->_nom=$Nom;
            }
            public function getAnnee(){
                return $this->_annee;
            }
            public function setAnnee($annee){
                $this->_annee=$annee;
            }
           
            // Méthodes 
            public function getAge(){
                $age=date('Y')-$this->getAnnee();
                return $age;
            }
            public function infoVoiture() {
                echo "C'est une {$this->getNom()}, créé en {$this->getAnnee()}, elle a donc {$this->getAge()} ans .<br>";
            }
        }
        $jaguar = new voiture("jaguar",1970);
        $jaguar->infoVoiture();
       
        $la308 = new voiture("308",2010);
        $la308->infoVoiture();
        
    ?>
</body>
</html>