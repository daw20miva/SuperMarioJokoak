<?php
$returnMsg = ''; 
 
if(isset($_POST['submit'])){ 
    
	// Form fields validation check
    if(!empty($_POST['erabiltzailea']) && !empty($_POST['erabiltzailea'])){ 
         
        // reCAPTCHA checkbox validation
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
            // Google reCAPTCHA API secret key 
            $secret_key = '6LeERv0fAAAAAN2lRbmlZEDnQyHG835u3g7Bf9hz'; 
             
            // reCAPTCHA response verification
            $verify_captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeERv0fAAAAAN2lRbmlZEDnQyHG835u3g7Bf9hz'.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode reCAPTCHA response 
            $verify_response = json_decode($verify_captcha); 
             
            // Check if reCAPTCHA response returns success 
            if($verify_response->success){ 
                
                $erabiltzailea = $_POST['erabiltzailea']; 
                $erabiltzailea = $_POST['erabiltzailea']; 
                 
               
                $returnMsg = 'Your registration has been submitted successfully.'; 
            }else{ 
                $returnMsg = 'reCaptch verification failed, please verify again.'; 
            } 
        }else{ 
            $returnMsg = 'Please check the CAPTCHA box.'; 
        } 
    }else{ 
        $returnMsg = 'Please fill all the required fields.'; 
    } 
} 
echo $returnMsg;
?>