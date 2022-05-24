<?php

namespace mario\detaileak;

use PDO;

class Mario_brosDB{
    public static function selectDetaileak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from detailea");
            $detaileak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $detailea = new Detailea();
                $detailea->setId($erregistroa['id']);
                $detailea->setId_eskaria($erregistroa['id_eskaria']);
                $detailea->setId_produktua($erregistroa['id_produktua']);
               // $detailea->setNan($erregistroa['nan']);
                $detailea->setKopurua($erregistroa['kopurua']);
                $detailea->setPrezioa($erregistroa['prezioa']);
               // $detailea->setPrezio_totala($erregistroa['prezio_totala']);
            
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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from detailea where id=" . $id);
            $detailea = null;

            if($erregistroa = $erregistroak->fetch()) {
                $detailea = new Detailea();
                $detailea->setId($erregistroa['id']);
                $detailea->setId_eskaria($erregistroa['id_eskaria']);
                $detailea->setId_produktua($erregistroa['id_produktua']);
                $detailea->setKopurua($erregistroa['kopurua']);
                $detailea->setPrezioa($erregistroa['prezioa']);
               
                
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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $db->prepare("insert into detailea (id,id_eskaria, id_produktua ,kopurua,prezioa)
            values (:id, :id_eskaria,:id_produktua, :kopurua,:prezioa)");
            $sql->bindValue(':id',$detailea->getId());
            $sql->bindValue(':id_eskaria',$detailea->getId_eskaria());
            $sql->bindValue(':id_produktua',$detailea->getId_produktua());  
            $sql->bindValue(':kopurua',$detailea->getKopurua());
            $sql->bindValue(':prezioa',$detailea->getPrezioa());
          

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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = $db->prepare("update detailea set  id_eskaria=:id_eskaria, id_produktua=:id_produktua, kopurua=:kopurua,prezioa=:prezioa  where id=:id");
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
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
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