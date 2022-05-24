<?php

namespace mario\produktuak;

use PDO;

class Mario_brosDB{
    public static function selectProduktuak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from produktua");
            $produktuak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $produktua = new Produktua();
                $produktua->setId($erregistroa['id']);
                $produktua->setIzenburua($erregistroa['izenburua']);
                $produktua->setPrezioa($erregistroa['prezioa']);
                $produktua->setXehetasunak($erregistroa['xehetasunak']);
                $produktua->setDeskribapena($erregistroa['deskribapena']);
               /* $produktua->setDetalles($erregistroa['detalles']);
                $produktua->setDescripcion($erregistroa['descripcion']);*/
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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from produktua where id=" . $id);
            $produktua = null;

            if($erregistroa = $erregistroak->fetch()) {
                $produktua = new Produktua();
                $produktua->setId($erregistroa['id']);
                $produktua->setIzenburua($erregistroa['izenburua']);
                $produktua->setPrezioa($erregistroa['prezioa']);
                $produktua->setXehetasunak($erregistroa['xehetasunak']);
                $produktua->setDeskribapena($erregistroa['deskribapena']);
               /* $produktua->setDetalles($erregistroa['detalles']);
                $produktua->setDescripcion($erregistroa['descripcion']);*/
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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = $db->prepare("insert into produktua (id,izenburua,prezioa,xehetasunak,deskribapena)
            values (:id ,:izenburua ,:prezioa ,:xehetasunak ,:deskribapena ,:detalles ,:deskripcion )");
            $sql->bindValue(':id',$produktua->getId());
            $sql->bindValue(':izenburua',$produktua->getIzenburua());
            $sql->bindValue(':prezioa',$produktua->getPrezioa());
            $sql->bindValue(':xehetasunak',$produktua->getXehetasunak());
            $sql->bindValue(':deskribapena',$produktua->getDeskribapena());
         /*   $sql->bindValue(':detalles',$produktua->getDetalles());
            $sql->bindValue(':descripcion',$produktua->getDescripcion());*/
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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","romario_brosot","mario_bros");
            $sql = $db->prepare("update produktua set izenburua=:izenburua,prezioa=:prezioa,xehetasunak=:xehetasunak,deskribapena=:deskribapena where id=:id");
            $emaitza = $sql->execute();
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteProduktua($id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
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