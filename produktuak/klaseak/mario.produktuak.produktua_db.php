<?php

namespace mario\produktuak;

use PDO;

class Mario_brosDB{
    public static function selectProduktuak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from produktuak");
            $produktuak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $produktua = new Produktua();
                $produktua->setId($erregistroa['id']);
                $produktua->setProduktu_izena($erregistroa['produktu_izena']);
                $produktua->setPrezioa($erregistroa['prezioa']);
                $produktua->setXehetasunak($erregistroa['xehetasunak']);
                $produktua->setDeskribapena($erregistroa['deskribapena']);
                $produktua->setDetalles($erregistroa['detalles']);
                $produktua->setDescripcion($erregistroa['descripcion']);
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
            $erregistroak = $db->query("select * from produktuak where id=" . $id);
            $produktua = null;

            if($erregistroa = $erregistroak->fetch()) {
                $produktua = new Produktua();
                $produktua->setId($erregistroa['id']);
                $produktua->setProduktu_izena($erregistroa['produktu_izena']);
                $produktua->setPrezioa($erregistroa['prezioa']);
                $produktua->setXehetasunak($erregistroa['xehetasunak']);
                $produktua->setDeskribapena($erregistroa['deskribapena']);
                $produktua->setDetalles($erregistroa['detalles']);
                $produktua->setDescripcion($erregistroa['descripcion']);
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
            $sql = "insert into produktuak (id,produktu_izena,prezioa,xehetasunak,deskribapena,detalles,descripcion) values "; 
            $sql = $sql . "('" . $produktua->getId() . "'"; 
            $sql = $sql . ",'" . $produktua->getProduktu_izena() . "'";
            $sql = $sql . ",'" . $produktua->getPrezioa() . "'";
            $sql = $sql . ",'" . $produktua->getXehetasunak() . "'";
            $sql = $sql . ",'" . $produktua->getDeskribapena() . "'";
            $sql = $sql . ",'" . $produktua->getDetalles() . "'";
            $sql = $sql . ",'" . $produktua->getDescripcion() . "')";
            $emaitza = $db->exec($sql); 
            return $emaitza; 
           //$emaitza = $db->exec($sql);
           
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateProduktua($id,$produktu_izena,$prezioa,$xehetasunak,$deskribapena,$detalles,$descripcion)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "update produktuak set produktu_izena='".$produktu_izena."',prezioa=".$prezioa.",xehetasunak='".$xehetasunak."',deskribapena='".$deskribapena."',detalles='".$detalles."' ,descripcion='".$descripcion."' where id=".$id;

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
            $sql = "delete from produktuak" ;
            $sql = $sql . " where id=" . $id;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}