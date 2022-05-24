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
               // $produktua->setDetalles($erregistroa['detalles']);
                //$produktua->setDescripcion($erregistroa['descripcion']);
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
               // $produktua->setDetalles($erregistroa['detalles']);
                //$produktua->setDescripcion($erregistroa['descripcion']);
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
            $sql = "insert into produktua (id,izenburua,prezioa,xehetasunak,deskribapena) values "; 
            $sql = $sql . "('" . $produktua->getId() . "'"; 
            $sql = $sql . ",'" . $produktua->getIzenburua() . "'";
            $sql = $sql . ",'" . $produktua->getPrezioa() . "'";
            $sql = $sql . ",'" . $produktua->getXehetasunak() . "'";
            $sql = $sql . ",'" . $produktua->getDeskribapena() . "')";
           // $sql = $sql . ",'" . $produktua->getDetalles() . "'";
            //$sql = $sql . ",'" . $produktua->getDescripcion() . "')";
            $emaitza = $db->exec($sql); 
            return $emaitza; 
           //$emaitza = $db->exec($sql);
           
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateProduktua($id,$izenburua,$prezioa,$xehetasunak,$deskribapena)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "update produktua set izenburua='".$izenburua."',prezioa=".$prezioa.",xehetasunak='".$xehetasunak."',deskribapena='".$deskribapena."' where id=".$id;

            $emaitza = $db->exec($sql);
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