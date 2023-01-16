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
        class compte{
            private $_solde=0;
            private $_nom;

            public function __construct($_nom){
                $this->setNom($_nom);
            }
            // getters $ setters
            public function getNom(){
                return $this->_nom;
            }
            public function setNom($Nom){
                $this->_nom=$Nom;
                return $this;
            }
            public function getSolde(){
                return $this->_solde;
            }
            public function setSolde($Solde){
                $this->_solde=$Solde;
                return $this;
            }
            // Méthodes
            public function depot($montant){
                $this->setSolde($this->getSolde()+$montant);
            }
            public function retrait($montant){
                $this->setSolde($this->getSolde()-$montant);
            }
            public function virement($destinataire,$montant){
                $this->retrait($montant);
                $destinataire->depot($montant);
            }
            public function infos(){
                return "Le solde de Mr ".$this->getNom()." est de ".$this->getSolde()."<br>";
            }
        }
        $smith= new compte("Smith");
        echo $smith->infos();
        $smith->depot(1000);
        $smith->retrait(250);
        echo $smith->infos();
        
        
        $anderson = new compte("Anderson");
        echo $anderson->infos();
        $anderson->depot(1000);
        echo $anderson->infos();

        $smith->virement($anderson,500);
        echo $smith->infos();
        echo $anderson->infos();
    ?>
</body>
</html>