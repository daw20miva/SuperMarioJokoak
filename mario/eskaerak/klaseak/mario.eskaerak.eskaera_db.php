<?php

namespace mario\eskaerak;

use PDO;

class Mario_brosDB{
    public static function selectEskaerak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from eskaerak");
            $eskaerak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $eskaera = new Eskaera();
                $eskaera->setEskaera_id($erregistroa['eskaera_id']);
                $eskaera->setProduktua_id($erregistroa['produktua_id']);
                $eskaera->setEskari_data($erregistroa['eskari_data']);
                $eskaera->setProduktu_izena($erregistroa['produktu_izena']);
                $eskaera->setKantitatea($erregistroa['kantitatea']);
                $eskaera->setPrezio_totala($erregistroa['prezio_totala']);
                $eskaera->setBezero_nan($erregistroa['bezero_nan']);
                $eskaerak[] = $eskaera;

            }
            return $eskaerak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectEskaera($eskaera_id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from eskaerak where eskaera_id=" . $eskaera_id);
            $eskaera = null;

            if($erregistroa = $erregistroak->fetch()) {
                $eskaera = new Eskaera();
                $eskaera->setEskaera_id($erregistroa['eskaera_id']);
                $eskaera->setProduktua_id($erregistroa['produktua_id']);
                $eskaera->setEskari_data($erregistroa['eskari_data']);
                $eskaera->setProduktu_izena($erregistroa['produktu_izena']);
                $eskaera->setKantitatea($erregistroa['kantitatea']);
                $eskaera->setPrezio_totala($erregistroa['prezio_totala']);
                $eskaera->setBezero_nan($erregistroa['bezero_nan']);
                
            }
            return $eskaera;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertEskaera($eskaera)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $db->prepare("insert into eskaerak (eskaera_id,produktua_id,eskari_data, produktu_izena,kantitatea,prezio_totala,bezero_nan)
            values (:eskaera_id, :produktua_id, :eskari_data, :produktu_izena, :kantitatea, :prezio_totala; :bezero_nan)");
            $sql->bindValue(':eskaera_id',$eskaera->getEskaera_id());
            $sql->bindValue(':produktua_id',$eskaera->getProduktua_id());
            $sql->bindValue(':eskari_data',$eskaera->getEskari_data());
            $sql->bindValue(':produktu_izena',$eskaera->getProduktu_izena());
            $sql->bindValue(':kantitatea',$eskaera->getKantitatea());
            $sql->bindValue(':prezio_totala',$eskaera->getPrezio_totala());
            $sql->bindValue(':bezero_nan',$eskaera->getBezero_nan());

            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateEskaera($eskaera_id,$produktua_id,$eskari_data,$produktu_izena,$kantitatea,$prezio_totala,$bezero_nan)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "update eskaerak set produktua_id=".$produktua_id.",eskari_data='".$eskari_data."',produktu_izena='".$produktu_izena."',kantitatea=".$kantitatea.",prezio_totala=".$prezio_totala." ,bezero_nan='".$bezero_nan."' where eskaera_id=".$eskaera_id;
            echo $sql;
            $emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteEskaera($eskaera_id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "delete from eskaerak" ;
            $sql = $sql . " where eskaera_id=" . $eskaera_id;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}