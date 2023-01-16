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
         class perso {
             // Attributs
             private $_nom;
             private $_xp=0;
             private $_pv;

             // getters $ setters
            public function __construct($_nom,$_pv) {
                $this->setNom($_nom);
                $this->setPv($_pv);
            }
            public function getNom(){
                return $this->_nom;
            }
            public function setNom($Nom){
                $this->_nom=$Nom;
                return $this;
            }
            public function getXp(){
                return $this->_xp;
            }
            public function setXp($xp){
                $this->_xp=$xp;
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
            public function degat($montant){
                $this->setPv($this->getPv()-$montant);
            }
            public function experience($gain) {
                $this->setXp($this->getXp()+$gain);
            }
            public function attaque($cible,$montant,$gain){
                $cible->degat($montant);
                $this->experience($gain);
            }
            public function isAlive(){
                if ($this->getPv()<=0) {
                    return $this->getNom()." est mort.";
                }
            }
            public function info() {
                return "Mon nom est ".$this->getNom().", j'ai ".$this->getPv()."PV et mon expérience est de ".$this->getXp()."<br>".$this->isAlive()."<br>";
            }
        }
        $golum=new perso("Golum", 10);
        echo $golum->info();

        $frodon=new perso("Frodon",2);
        echo $frodon->info();
        $golum->attaque($frodon,10,1);
        echo $golum->info();
        echo $frodon->info();
        

    
    ?>
</body>
</html>