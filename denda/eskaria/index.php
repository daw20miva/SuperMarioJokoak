<?php
session_start();
include("../hizkuntzak/" . $_SESSION['hizkuntza'] . ".php");
require('../klaseak/com.leartik.mario_bros.denda.bezeroa.php');
require('../klaseak/com.leartik.mario_bros.denda.detailea.php');
require('../klaseak/com.leartik.mario_bros.denda.produktua.php');
require('../klaseak/com.leartik.mario_bros.denda.eskaria.php');
require('../klaseak/com.leartik.mario_bros.denda.eskaria_db.php');
require('../klaseak/com.leartik.mario_bros.denda.saskia.php');

use com\leartik\mario_bros\denda\Bezeroa;
use com\leartik\mario_bros\denda\Detailea;
use com\leartik\mario_bros\denda\Produktua;
use com\leartik\mario_bros\denda\Eskaria;
use com\leartik\mario_bros\denda\EskariaDB;
use com\leartik\mario_bros\denda\Saskia;

if (isset($_POST['bidali'])) {

	$izena = $_POST['izena'];
	$abizena = $_POST['abizena'];
	$helbidea = $_POST['helbidea'];
	$herria = $_POST['herria'];
	$pk = $_POST['pk'];
	$probintzia = $_POST['probintzia'];
	$emaila = $_POST['emaila'];
	


	if (strlen($izena) > 0 && strlen($abizena) > 0 && strlen($helbidea) > 0 && strlen($herria) > 0 && strlen($pk) > 0 && strlen($probintzia) > 0 && strlen($emaila) > 0) {
				
		$bezeroa = new Bezeroa();
		$bezeroa->setIzena($izena);
		$bezeroa->setAbizena($abizena);
		$bezeroa->setHelbidea($helbidea);
		$bezeroa->setHerria($herria);
		$bezeroa->setPK($pk);
		$bezeroa->setProbintzia($probintzia);
		$bezeroa->setEmaila($emaila);
		
		$saskia = unserialize($_SESSION['saskia']);
		$detaileak = $saskia->getDetaileak();
		
		$eskaria = new Eskaria();
		$eskaria->setData(date("Y/m/d"));
		$eskaria->setBezeroa($bezeroa);
		$eskaria->setDetaileak($detaileak);
		// Debugging tools. Only turn these on in your development environment.

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

// Special mail settings that can make mail less likely to be considered spam
// and offers logging in case of technical difficulties.

ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);

// The components of our email

$to      = 'recipient@example.com';
$subject = 'Email Subject';
$message = 'This is the email message body';
$headers = implode("\r\n", [
    'From: webmaster@example.com',
    'Reply-To: webmaster@example.com',
    'X-Mailer: PHP/' . PHP_VERSION
]);

// Send the email

$result = mail($to, $subject, $message, $headers);

// Check the results and react accordingly

if ($result) {
  
    // Success! Redirect to a thank you page. Use the
    // POST/REDIRECT/GET pattern to prevent form resubmissions
    // when a user refreshes the page.
  
    header('Location: http://example.com/path/to/thank-you.php', true, 303);
    exit;
  
}
else {
  
    // Your mail was not sent. Check your logs to see if
    // the reason was reported there for you.
  
}

		if (EskariaDB::insertEskaria($eskaria) > 0) {

			$saskia = new Saskia();
			$_SESSION['saskia'] = serialize($saskia);
			include('eskaria_jaso_da.php');
		
		
		

		} else {
	
			include('eskaria_ez_da_jaso.php');
		}

	} else {

		$mezua = $etiketa_eremu_guztiak_bete_behar_dira;
		include('eskari_berria.php');
	}


} else {

		$izena = "";
		$abizena = "";
		$helbidea = "";
		$herria = "";
		$pk = "";
		$probintzia = "";
		$emaila = "";
		$mezua = "";
		include('eskari_berria.php');
}

?>

