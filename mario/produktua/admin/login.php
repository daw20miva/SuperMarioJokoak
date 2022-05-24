<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Produktuak</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src= ' https://www.google.com/recaptcha/api.js?hl=es'></script>
  
  <style>
      
        body{
        background-image: url("../../../images/bg_stripe.png");
  background-repeat:repeat;
  text-align: center;
  font-family: Nhas;
       }
       @font-face {
  font-family: Nhas;
  src: url(../../../Nhas.ttf);
}
       h1{
    font-family: Nhas;
    text-align: center;
    color:white;
    font-size:80px;
}
h2{
    font-family: Nhas;
    text-align: center;
    color:white;
    font-size:20px;
}
label{
    color:white;
    font-size:30px;
}
      

.formlario{
    margin: auto;
  width: 40%;
  border: 3px solid white;
  padding: 10px;
}
.g-recaptcha  {
        margin-left:20%;
                       }
    
      </style>

          
  </script>
    </head>
    
<?php 
//require_once ('../../recaptchalib.php');
require_once ('../../validad.php');

/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lcr1f4fAAAAAPfoNfbsoDe1jyUFQ7JK0A4lYiuC',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...

        // Paste mail function or whatever else you want to happen here!
        echo '<br><p>CAPTCHA was completed successfully!</p><br>';
    }
} else { ?>
    
   

<?php }*/ 


if(isset($_POST['formlario'])) {
    if(!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        echo 'reCAPTHCA verification failed, please try again.';
    } else {
        $secret = '6Lcr1f4fAAAAAPfoNfbsoDe1jyUFQ7JK0A4lYiuC';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);

        if($response->success) {
            // What happens when the CAPTCHA was entered incorrectly
            echo 'Successful login.';
        } else {
            // Your code here to handle a successful verification
            echo 'reCAPTHCA verification failed, please try again.';
        }
    }
}
?>

<body>
        <br>
        <br>
    <img src="../../../images/Block.png" style="max-width:250px;">
        <h1>Produktuak</h1>
        <h2 >Administrazio gunea</h2>
        <br>
        <p><?php echo $mezua ?></p>
        <div class="formlario">
        <form id="mar" action="index.php" method="post">
        <p>
        <label for="erabiltzailea">Erabiltzailea</label><br>
        <input type="text" id="erabiltzailea" name="erabiltzailea" />
        </p>
        <p>
        <label for="pasahitza">Pasahitza</label><br>
        <input type="password" id="pasahitza" name="pasahitza" />
        </p>
        <div class="g-recaptcha" data-sitekey="6Lcr1f4fAAAAAJLzpwCSV-uDXpAxD5laxfM-WS-2"></div>
        
     <input  id="sartu" type="submit"  value="Sartu"  name="sartu" />
</form>
    
</div>


<br>
        <a href="../../index.php" style="text-decoration:none; color:white;font-size:30px;">Itzuli</a>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>
