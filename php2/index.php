 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "mario_bros", "mario_bros", "mario_bros");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'=>$_GET["id"],  
                     'item_produktu_izena'=>$_POST["produktu_izena"],  
                     'item_prezioa'=>$_POST["prezioa"],  
                     'item_kantitatea'=>$_POST["kantitatea"] 
                    /* 'item_nan'=>$_POST["nan"] */
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Produktua dagoeneko gehitua!")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'=>$_GET["id"],  
                'item_produktu_izena'=>$_POST["produktu_izena"],  
                'item_prezioa'=>$_POST["prezioa"],  
                'item_kantitatea'=>$_POST["kantitatea"]
                /*'item_nan'=>$_POST["nan"] */
           ); 
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                       
                }  
           }  
      }  
 }  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Saskia</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
     
      <body> 
      <script>
          
          function gorde() {
               
          var nan = document.getElementById("nan").value;
          if(nan == ""){

               document.getElementById("informazioa").innerHTML="Nan-a sartu behar duzu";
               return;
          }


         var xhr = new XMLHttpRequest(); 
         var produktua_id = document.getElementById("produktua_id").value;
         var produktu_izena = document.getElementById("produktu_izena").value;
         var prezioa = document.getElementById("prezioa").value;
         var kantitatea = document.getElementById("kantitatea").value;
         var prezio_totala = document.getElementById("prezio_totala").value;
         var nan = document.getElementById("nan").value;
         xhr.onreadystatechange = function(){
              if (xhr.readyState == 4 && xhr.status == 200)
              {

              document.getElementById("texto").innerHTML = xhr.responseText;
              }
         }  
          xhr.open("GET", "saskia.php?produktua_id="+produktua_id+"&produktu_izena="+produktu_izena+"&nan="+nan+"&prezioa="+prezioa+"&kantitatea="+kantitatea+"&prezio_totala="+prezio_totala, true);
              xhr.send();
         }

     </script> 
           <div class="container" style="width:1250px;">  
                <h3 align="center">Saskia</h3><br/>  
                <?php  
                $query = "SELECT * FROM produktuak ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-3">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="../images/<?php echo $row["id"]; ?>_produktua.png" class="img-responsive" /><br/>  
                               <h4 class="text-info"><?php echo $row["produktu_izena"]; ?></h4>  
                               <h4 class="text-danger"><?php echo $row["prezioa"]; ?>€</h4>  
                               <input type="number" name="kantitatea" class="form-control" value="1" />  
                               <input type="hidden" name="produktu_izena" value="<?php echo $row["produktu_izena"]; ?>" />  
                               <input type="hidden" name="prezioa" value="<?php echo $row["prezioa"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Gehitu" />  
                          </div> 
                          <br>
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  

               <h1>Sartu zure nan zenbakia</h1>
                <p>Zure Nan-a</p><input type="text" placeholder="Idatzi hemen..." style="width:135px; text-align: center;border-radius: 5px;" name="nan" id="nan"> 
                <div style="clear:both"></div>  
                <br/>  
                <h3>Xehetasunak</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                              <th width="10%">Id-a</th>  
                               <th width="20%">Produktuaren Izena</th>  
                               <th width="10%">kantitatea</th>  
                               <th width="10%">Prezioa</th>  
                               <th width="10%">Totala</th>  
                               <th width="5%">Ezabatu</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  

                          <tr>  
                              <td><input style="border:none;"  size="4" id="produktua_id" name="produktua_id" value="<?php echo $values["item_id"]; ?>"></td>  
                               <td><input style="border:none;" size="25"  id="produktu_izena" name="produktu_izena" value="<?php echo $values["item_produktu_izena"]; ?>"></td>  
                               <td><input style="border:none;" size="3" id="kantitatea" name="kantitatea" value="<?php echo $values["item_kantitatea"]; ?>"></td>  
                               <td><input style="border:none;" size="1" id="prezioa" name="prezioa" value="<?php echo $values["item_prezioa"]; ?>">€</td>  
                               <td><input style="border:none;"  size="1"  id="prezio_totala" name="prezio_totala" value="<?php echo number_format($values["item_kantitatea"] * $values["item_prezioa"], 2); ?>">€</td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Ezabatu</span></a></td>
                              
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_kantitatea"] * $values["item_prezioa"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><input style="border:none;"  size="5" id="totala" name="totala" value="<?php echo number_format($total, 2); ?>">€</td>  
                               <td></td>  
                          </tr>  
                          
                          <?php  
                          }  
                          ?>  
                     </table> 
                     
                        
                     <form>
                        <input type="submit" id="Gorde" value="Gorde" onclick="gorde()"/>
                         </form>
                         
               </div>  
           </div>  
           <br/> 
           <div id="informazioa"></id>
           <div class="grey"><a href="select_eskaria_eta_bezeroa.html"><button type="button"  class="btn btn-outline-dark p-4 " style="font-size: 15px;">Jarraitu</button></a></div>
          
           
      </body>  
 </html>