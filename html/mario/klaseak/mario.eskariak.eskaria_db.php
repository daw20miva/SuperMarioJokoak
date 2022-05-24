<?php

namespace mario\eskariak;

use PDO;

class Mario_brosDB{
    public static function selectEskariak()
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from eskaria");
            $eskariak = array();

            while($erregistroa = $erregistroak->fetch()) {
                $eskaria = new Eskaria();
                $eskaria->setId($erregistroa['id']);
                $eskaria->setData($erregistroa['data']);
                $eskaria->setIzena($erregistroa['izena']);
                $eskaria->setAbizena($erregistroa['abizena']);
                $eskaria->setHelbidea($erregistroa['helbidea']);
              //  $eskaria->setTelefonoa($erregistroa['telefonoa']);
                $eskaria->setHerria($erregistroa['herria']);
                $eskaria->setPk($erregistroa['Pk']);
                $eskaria->setProbintzia($erregistroa['probintzia']);
                $eskaria->setEmaila($erregistroa['emaila']);
                $eskariak[] = $eskaria;

            }
            return $eskariak;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }

    }
    public static function selectEskaria($id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $erregistroak = $db->query("select * from eskaria where id=" . $id);
            $eskaria = null;

            if($erregistroa = $erregistroak->fetch()) {
                $eskaria = new Eskaria();
                $eskaria->setId($erregistroa['id']);
                $eskaria->setData($erregistroa['data']);
                $eskaria->setIzena($erregistroa['izena']);
                $eskaria->setAbizena($erregistroa['abizena']);
                $eskaria->setHelbidea($erregistroa['helbidea']);
               // $eskaria->setTelefonoa($erregistroa['telefonoa']);
                $eskaria->setHerria($erregistroa['herria']);
                $eskaria->setPk($erregistroa['Pk']);
                $eskaria->setProbintzia($erregistroa['probintzia']);
                $eskaria->setEmaila($erregistroa['emaila']);
                $eskariak[] = $eskaria;
            }
            return $eskaria;

        }catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return null;
        }
    }
    public static function insertEskaria($eskaria)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $db->prepare("insert into eskaria (id,data,izena,abizena,helbidea,herria,Pk,probintzia,emaila)
            values (:id; :data, :izena, :abizena, :helbidea, :herria; :Pk, :probintzia, :emaila)");
            $sql->bindValue(':id',$eskaria->getId());
            $sql->bindValue(':data',$eskaria->getData());
            $sql->bindValue(':izena',$eskaria->getIzena());
            $sql->bindValue(':abizena',$eskaria->getAbizena());
            $sql->bindValue(':helbidea',$eskaria->getHelbidea());
            $sql->bindValue(':herria',$eskaria->getHerria()); 
            $sql->bindValue(':Pk',$eskaria->getPk());
            $sql->bindValue(':probintzia',$eskaria->getProbintzia());
            $sql->bindValue(':emaila',$eskaria->getEmaila());
            
            $emaitza = $sql->execute();
           //$emaitza = $db->exec($sql);
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }

               
        }
    

    public static function updateEskaria($eskaria)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = $db->prepare("update eskaria set  izena=:izena, abizena=:abizena, helbidea=:helbidea, herria=:herria, Pk=:Pk, probintzia=:probintzia, emaila=:emaila  where id=:id");
            $emaitza = $sql->execute();
            return $emaitza;
       } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
                }
    }

    public static function deleteEskaria($id)
    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=mario_bros","mario_bros","mario_bros");
            $sql = "delete from eskaria" ;
            $sql = $sql . " where id=" . $id;
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch (Exception $e) {
            echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
            return 0;
        }
    }
}