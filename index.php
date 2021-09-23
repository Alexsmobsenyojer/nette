<?php
require_once "vendor".DIRECTORY_SEPARATOR."autoload.php";
$mail = new Nette\Mail\Message;
$mail->setFrom('Joe Biden <joe.biden@email.cz>')
	->addTo('trejbal.docasny@ossp.cz')
	->setSubject('TRUMP NUDES')
	->setBody("Dobrý den,\nbyl jste jebaited.");
$mailer = new Nette\Mail\SmtpMailer([
        'host' => 'smtp.seznam.cz',
        'port' => ' 25',
        'username' => 'joe.biden@email.cz',
        'password' => 'donaldtrump2021',
        
    ]);
    try{$mailer->send($mail); echo "odeslano";}
    catch(Exception $e){echo $e->getMessage();}

?>