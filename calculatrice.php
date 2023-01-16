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
        class Calculatrice{
            // Attributs
            private $_resultat;

            // getters $ setters
            
            public function getResultat(){
                return $this->_resultat;
            }

            public function setResultat($total){
                $this->_resultat=$total;
            }
            // Méthodes 
            public function addition($chiffre1, $chiffre2){
               $leTotal=$chiffre1+$chiffre2;
               $this->setResultat($leTotal);
            }
            
        }
        $maCalculatrice = new Calculatrice();
        $maCalculatrice->addition(5,10);
        echo "le total est de".$maCalculatrice->getResultat();
        
    ?>
</body>
</html>