<?php

// define("nama", "budiono");


class Profil {
    const sekolah = "gk sekolah";
    const NAMA = "Budiono Siregar";
    const CITA = "kapal lawd";
    
    public static function getname(){
        $data = "Perkenalkan nama saya " . self::NAMA . " cita-cita saya jadi " . self::CITA . " saya berada di kelas " 
        .  __CLASS__ . " dimethod " . __FUNCTION__ ;
        return $data;
    }
}

echo Profil::getname();

