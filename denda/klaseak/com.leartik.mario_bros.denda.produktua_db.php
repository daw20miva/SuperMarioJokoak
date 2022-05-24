<?php

namespace com\leartik\mario_bros\denda;

use PDO;

class ProduktuaDB{
    public static function selectProduktuak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $erregistroak = $db->query("select * from produktua");
            $produktuak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $produktua = new Produktua();
                $produktua->setId($erregistroa['id']);
                $produktua->setIzenburua($erregistroa['izenburua']);
                $produktua->setXehetasunak($erregistroa['xehetasunak']);
                $produktua->setDeskribapena($erregistroa['deskribapena']);
                $produktua->setDetalles($erregistroa['detalles']);
                $produktua->setDescripcion($erregistroa['descripcion']);
                $produktua->setPrezioa($erregistroa['prezioa']);
                $produktuak[] = $produktua;

            }
            return $produktuak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectProduktua($id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $erregistroak = $db->query("select * from produktua where id=" . $id);
            $produktua = null;

            if($erregistroa = $erregistroak->fetch()) {
                $produktua = new Produktua();
                $produktua->setId($erregistroa['id']);
                $produktua->setIzenburua($erregistroa['izenburua']);
                $produktua->setXehetasunak($erregistroa['xehetasunak']);
                $produktua->setDeskribapena($erregistroa['deskribapena']);
                $produktua->setDetalles($erregistroa['detalles']);
                $produktua->setDescripcion($erregistroa['descripcion']);
                $produktua->setPrezioa($erregistroa['prezioa']);
            }
            return $produktua;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertProduktua($produktua)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $sql = $db->prepare("insert into produktua (id,izenburua,xehetasunak,deskribapena,detalles,deskripcion)
            values (:id ,:izenburua ,:xehetasunak ,:deskribapena ,:detalles, :deskripcion )");
            $sql->bindValue(':id',$produktua->getId());
            $sql->bindValue(':izenburua',$produktua->getIzenburua());
            $sql->bindValue(':xehetasunak',$produktua->getXehetasunak());
            $sql->bindValue(':deskribapena',$produktua->getDeskribapena());
            $sql->bindValue(':detalles',$produktua->getDetalles());
            $sql->bindValue(':descripcion',$produktua->getDescripcion());
            $sql->bindValue(':prezioa',$produktua->getPrezioa());
            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateProduktua($produktua)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $sql = $db->prepare("update produktua set izenburua=:izenburua,xehetasunak=:xehetasunak,deskribapena=:deskribapena,detalles=:detalles,descripcion=:descripcion,prezioa=:prezioa where id=:id");
            $emaitza = $sql->execute();
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteProduktua($id_produktua)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
            $sql = "delete from produktua" ;
            $sql = $sql . " where id=" . $id;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}