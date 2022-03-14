<?php

namespace mario\bezeroak;

use PDO;

class Mario_brosDB{
    public static function selectBezeroak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from bezeroak");
            $bezeroak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $bezero = new Bezero();
                $bezero->setNan($erregistroa['nan']);
                $bezero->setIzena($erregistroa['izena']);
                $bezero->setAbizena($erregistroa['abizena']);
                $bezero->setEmaila($erregistroa['emaila']);
                $bezero->setTelefonoa($erregistroa['telefonoa']);
                $bezero->setHelbidea($erregistroa['helbidea']);
                $bezero->setKode_postea($erregistroa['kode_postea']);
                $bezero->setProbintzia($erregistroa['probintzia']);
                $bezero->setHerrialdea($erregistroa['herrialdea']);
                $bezeroak[] = $bezero;

            }
            return $bezeroak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectBezero($nan)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from bezeroak where nan=" . $nan);
            $bezero = null;

            if($erregistroa = $erregistroak->fetch()) {
                $bezero = new Bezero();
                $bezero->setNan($erregistroa['nan']);
                $bezero->setIzena($erregistroa['izena']);
                $bezero->setAbizena($erregistroa['abizena']);
                $bezero->setEmaila($erregistroa['emaila']);
                $bezero->setTelefonoa($erregistroa['telefonoa']);
                $bezero->setHelbidea($erregistroa['helbidea']);
                $bezero->setKode_postea($erregistroa['kode_postea']);
                $bezero->setProbintzia($erregistroa['probintzia']);
                $bezero->setHerrialdea($erregistroa['herrialdea']);
            }
            return $bezero;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertBezero($bezero)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $db->prepare("insert into bezeroak (nan,izena,abizena,emaila,telefonoa,helbidea,kode_postea,probintzia,herrialdea)
            values (:nan, :izena, :abizena, :emaila, :telefonoa; :helbidea; :kode_postea, :probintzia, :herrialdea)");
            $sql->bindValue(':nan',$bezero->getNan());
            $sql->bindValue(':izena',$bezero->getIzena());
            $sql->bindValue(':abizena',$bezero->getAbizena());
            $sql->bindValue(':emaila',$bezero->getEmaila());
            $sql->bindValue(':telefonoa',$bezero->getTelefonoa());
            $sql->bindValue(':helbidea',$bezero->getHelbidea());
            $sql->bindValue(':kode_postea',$bezero->getKode_postea());
            $sql->bindValue(':probintzia',$bezero->getProbintzia());
            $sql->bindValue(':herrialdea',$bezero->getHerrialdea());

            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateBezero($bezero)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = $db->prepare("update bezeroak set  izena=:izena, abizena=:abizena, emaila=:emaila, telefonoa=:telefonoa, helbidea=:helbidea, kode_postea=:kode_postea, probintzia=:probintzia, herrialdea=:herrialdea  where nan=:nan");
            $emaitza = $sql->execute();
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteBezero($nan)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "delete from bezeroak" ;
            $sql = $sql . " where nan=" . $nan;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}