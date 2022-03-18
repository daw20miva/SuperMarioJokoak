<?php

namespace mario\stockak;

use PDO;

class Mario_brosDB{
    public static function selectStockak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from stock");
            $stockak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $stock = new Stock();
                $stock->setProduktua_id($erregistroa['produktua_id']);
                $stock->setKopurua($erregistroa['kopurua']);
                $stockak[] = $stock;

            }
            return $stockak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectStock($produktua_id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from stock where produktua_id=" . $produktua_id);
            $stock = null;

            if($erregistroa = $erregistroak->fetch()) {
                $stock = new Stock();
                $stock->setProduktua_id($erregistroa['produktua_id']);
                $stock->setKopurua($erregistroa['kopurua']);
            }
            return $stock;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertStock($stock)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = $db->prepare("insert into stock (produktua_id, kopurua)
            values (:produktua_id, :kopurua)");
            $sql->bindValue(':produktua_id',$stock->getProduktua_id());
            $sql->bindValue(':kopurua',$stock->getKopurua());
            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateStock($stock)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "update stock set" ; 
            $sql = $sql . " kopurua='" . $stock->getKopurua() . "'"; 
            $sql = $sql . " where produktua_id=" . $stock->getProduktua_id(); 
            $emaitza = $db->exec($sql); 
            return $emaitza; 
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteStock($produktua_id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "delete from stock" ;
            $sql = $sql . " where produktua_id=" . $produktua_id;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}