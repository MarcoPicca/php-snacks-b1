<?php

class Pokemon {
    public $name;
    public $color;
    public $description;
    public $principal_attack;
    public $principal_defense;

    public function __construct($_name, $_color, $_description, $_principal_attack, $_principal_defense){
        $this->name = $_name;
        $this->color = $_color;
        $this->description = $_description;
        $this->principal_attack = $_principal_attack;
        $this->principal_defense = $_principal_defense;

        $newPokemon = new Pokemon();

        $newPokemon -> $_name = 'Toradol';
        $newPokemon -> $_color = 'purple-white';
        $newPokemon -> $_description = 'A big Pokèmon in a little world';
        $newPokemon -> $_principal_attack = 'Throwing Bread';
        $newPokemon -> $_principal_defense = 'toxic feminism and machismo';
    }

}




echo Pokemon;
?>