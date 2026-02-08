<?php

class Vertebrate {
    public function printVertebrate() {
        echo "Sono un animale vertebrato.\n";
    }
}

class WarmBlood extends Vertebrate {
    public function printWarmBlood() {
        $this->printVertebrate();
        echo "Sono un animale a sangue caldo.\n";
    }
}

class ColdBlood extends Vertebrate {
    public function printColdBlood() {
        $this->printVertebrate();
        echo "Sono un animale a sangue freddo.\n";
    }
}

class Mammal extends WarmBlood {
    public function printMammal() {
        $this->printWarmBlood();
        echo "Sono un mammifero.\n";
    }
}

class Bird extends WarmBlood {
    public function printBird() {
        $this->printWarmBlood();
        echo "Sono un uccello.\n";
    }
}

class Fish extends ColdBlood {
    public function printFish() {
        $this->printColdBlood();
        echo "Splash!\n";
    }
}

class Reptile extends ColdBlood {
    public function printReptile() {
        $this->printColdBlood();
        echo "Sono un rettile.\n";
    }
}

class Amphibian extends ColdBlood {
    public function printAmphibian() {
        $this->printColdBlood();
        echo "Sono un anfibio.\n";
    }
}


$magikarp = new Fish();
$magikarp->printFish();
