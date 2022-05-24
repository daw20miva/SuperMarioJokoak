<?php

namespace com\leartik\mario_bros\denda;

use PDO;

class DetaileaDB{
    public static function selectDetaileak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $erregistroak = $db->query("select * from detailea");
            $detaileak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $detailea = new Detailea();
                $detailea->setId($erregistroa['id']);
                $detailea->setProduktua($erregistroa['produktua']);
                $detailea->setKopurua($erregistroa['kopurua']);
               
                $detaileak[] = $detailea;

            }
            return $detaileak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectDetailea($id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $erregistroak = $db->query("select * from detailea where id=" . $id);
            $detailea = null;

            if($erregistroa = $erregistroak->fetch()) {
                $detailea = new Detailea();
                $detailea->setId($erregistroa['id']);
                $detailea->setProduktua($erregistroa['produktua']);
                $detailea->setKopurua($erregistroa['kopurua']);
                
            }
            return $detailea;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertDetailea($detailea)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $sql = $db->prepare("insert into detailea (id,produktua,kopurua)
            values (:id ,:produktua ,:kopurua )");
            $sql->bindValue(':id',$detailea->getId());
            $sql->bindValue(':produktua',$detailea->getProduktua());
            $sql->bindValue(':kopurua',$detailea->getKopurua());
            
            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateDetailea($detailea)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $sql = $db->prepare("update detailea set produktua=:produktua,kopurua=:kopurua where id=:id");
            $emaitza = $sql->execute();
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteDetailea($id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $sql = "delete from detailea" ;
            $sql = $sql . " where id=" . $id;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}