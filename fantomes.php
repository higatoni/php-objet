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
         class fantomes {
             // Attributs
             private $_nom;
             private $_couleur;
             private $_velocite=1;
             private $_pv=10;

             // getters $ setters
            public function __construct($_nom, $_couleur) {
                $this->setNom($_nom); 
                $this->setCouleur($_couleur); 
            }
            public function getNom(){
                return $this->_nom;
            }
            public function setNom($Nom){
                $this->_nom=$Nom;
                return $this;
            }
            public function getCouleur(){
                return $this->_couleur;
            }
            public function setCouleur($couleur){
                $this->_couleur=$couleur;
                return $this;
            }
            public function getVelocite(){
                return $this->_velocite;
            }
            public function setVelocite($velocite){
                $this->_velocite=$velocite;
                return $this;
            }
            public function getPv(){
                return $this->_pv;
            }
            public function setPv($pv){
                $this->_pv=$pv;
                return $this;
            }

            // Méthodes
            public function manger($miam){
                $this->setPv($this->getPv()+$miam);
            }
            public function diminuer($miam) {
                $this->setPv($this->getPv()-$miam);
            }
        
            public function isAlive(){
                if ($this->getPv()<=0) {
                    return $this->getNom()." est mort.";
                }
            }
            public function info() {
                return "Mon nom est ".$this->getNom().", j'ai ".$this->getPv()."PV, ma couleur est ".$this->getCouleur()." et ma vélocité est de ".$this->getVelocite()."<br>".$this->isAlive();
            }
        }
        $clyde=new fantomes("Clyde", "jaune");
        echo $clyde->info();

        $dolly=new fantomes("Dolly","rose");
        echo $dolly->info();
        $dolly->manger(10);
        $dolly->setVelocite(2);
        echo $dolly->info();

        $clyde->diminuer(5);
        $clyde->diminuer(10);
        echo $clyde->info();
    ?>
</body>
</html>