<?php

/**
 * Pokemon Class.
 * @author Thomas Hirter <t.hirter@outlook.com>
 * @git https://github.com/n30nl1ght/Pokemon-Notifier
 */
class Pokemon
{


    /**
     * Ladet das Config file für mit den benötigten parameter
     * @param string $file
     */
    public function __construct($file) {
        $this->file = $file;
    }

    /**
     * Liest die Telegramsticker ID aus und gibt diese zurück
     * @param int $pokemonid
     * @return mixed
     */
    public function getSticker($pokemonid){
        return $this->getPokemon($pokemonid, "Sticker");
    }

    /**
     * Liest die Notify angabe aus und gibt diese zurück.
     * @param $pokemonid
     * @return boolean
     */
    public function getNotify($pokemonid){
            return $this->getPokemon($pokemonid, "Notify");

    }

    /**
     * Sucht anhand der Pokemon ID den Namen
     * @param int $pokemonid
     * @return string
     */
    public function getName($pokemonid){
        return $this->getPokemon($pokemonid, "Name");
    }

    /**
     * Sucht anhand des Pokemon Namen die ID
     * @param string $pokemonname
     * @return int
     */
    public function getID($pokemonname){
        foreach($this->pokemonArray() as $id => $value){
            if(strtolower($value['Name']) == trim(strtolower($pokemonname))){
                return $id;
            }
        }
    }

    /**
     * Bereitet das Pokemon Array für den zugriff vor
     * @param int $pokemonid
     * @param string $info
     * @return array
     */
    protected function getPokemon($pokemonid, $info){
        $pokemon = $this->pokemonArray();
        return $pokemon[$pokemonid][$info];

    }

    /**
     * Ladet das Pokemon JSON und wandelt es in ein Array
     * @return array
     */
    public function pokemonArray(){
        return json_decode(file_get_contents($this->file), TRUE);
    }

}