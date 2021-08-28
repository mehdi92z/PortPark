<?php
namespace App\Services;


class OrderService {


    public static function calTarif($taille,$nombre_jours){

        $tarif=0;
        $tva=0;
        $timbre=0;
        $prix_total=0;
        if ($taille>0 && $taille<4) {
            $tarif=88.32;
            $tva=0.09*$tarif;
            $timbre=347;
            $prix_total=$tarif*$nombre_jours+$tva+$timbre;
            return $prix_total;
        } elseif ($taille>=4 && $taille<5) {
        $tarif=100.80;
        $tva=0.09*$tarif;
        $timbre=396;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=5 && $taille<6) {
        $tarif=115.20;
        $tva=0.09*$tarif;
        $timbre=452;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=6 && $taille<7){
        $tarif=127.66;
        $tva=0.09*$tarif;
        $timbre=501;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=7 && $taille<8) {
        $tarif=148.66;
        $tva=0.09*$tarif;
        $timbre=583;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        } elseif ($taille>=8 && $taille<9) {
        $tarif=162.26;
        $tva=0.09*$tarif;
        $timbre=637;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=9 && $taille<10) {
        $tarif=238.83;
        $tva=0.09*$tarif;
        $timbre=750;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=10 && $taille<11) {
        $tarif=258.80;
        $tva=0.09*$tarif;
        $timbre=1055;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=11 && $taille<12) {
        $tarif=288;
        $tva=0.09*$tarif;
        $timbre=1130;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=12 && $taille<13) {
        $tarif=349.46;
        $tva=0.09*$tarif;
        $timbre=1371;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=13 && $taille<14) {
        $tarif=359.06;
        $tva=0.09*$tarif;
        $timbre=1409;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }elseif ($taille>=14) {
        $tarif=576;
        $tva=0.09*$tarif;
        $timbre=2260;
        $prix_total=$tarif*$nombre_jours+$tva+$timbre;
        return $prix_total;
        }

    }

}

?>