<?php

namespace mario\saskiak;

use PDO;

class Mario_brosDB{
    public static function selectSaskiak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from saskia");
            $saskiak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $saskia = new Saskia();
                $saskia->setId_saskia($erregistroa['id_saskia']);
                $saskia->setProduktua_id($erregistroa['produktua_id']);
                $saskia->setProduktu_izena($erregistroa['produktu_izena']);
                $saskia->setNan($erregistroa['nan']);
                $saskia->setKantitatea($erregistroa['kantitatea']);
                $saskia->setPrezioa($erregistroa['prezioa']);
                $saskia->setPrezio_totala($erregistroa['prezio_totala']);
            
                $saskiak[] = $saskia;

            }
            return $saskiak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectSaskia($id_saskia)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from saskia where id_saskia=" . $id_saskia);
            $saskia = null;

            if($erregistroa = $erregistroak->fetch()) {
                $saskia = new Saskia();
                $saskia->setId_saskia($erregistroa['id_saskia']);
                $saskia->setProduktua_id($erregistroa['produktua_id']);
                $saskia->setProduktu_izena($erregistroa['produktu_izena']);
                $saskia->setNan($erregistroa['nan']);
                $saskia->setKantitatea($erregistroa['kantitatea']);
                $saskia->setPrezioa($erregistroa['prezioa']);
                $saskia->setPrezio_totala($erregistroa['prezio_totala']);
               
                
            }
            return $saskia;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertSaskia($saskia)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $db->prepare("insert into eskaerak (id_saskia,produktua_id, produktu_izena,nan ,kantitatea,prezioa,prezio_totala)
            values (:id_saskia, :produktua_id,:produktu_izena,; :nan, :kantitatea,:prezioa, :prezio_totala)");
            $sql->bindValue(':id_saskia',$saskia->getId_saskia());
            $sql->bindValue(':produktua_id',$saskia->getProduktua_id());
            $sql->bindValue(':produktu_izena',$saskia->getProduktu_izena());  
            $sql->bindValue(':nan',$saskia->getNan());
            $sql->bindValue(':kantitatea',$saskia->getKantitatea());
            $sql->bindValue(':prezioa',$saskia->getPrezioa());
            $sql->bindValue(':prezio_totala',$saskia->getPrezio_totala());
          

            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateSaskia($saskia)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = $db->prepare("update saskia set  produktua_id=:produktua_id, produktu_izena=:produktu_izena, nan=:nan  kantitatea=:kantitatea,prezioa=:prezioa, prezio_totala=:prezio_totala  where id_saskia=:id_saskia");
            $emaitza = $sql->execute();
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteSaskia($id_saskia)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "delete from saskia" ;
            $sql = $sql . " where id_saskia=" . $id_saskia;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}