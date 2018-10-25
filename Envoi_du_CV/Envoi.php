<?php 

// include autoloader


// Output the generated PDF to Browser



if(isset($_POST["action"]))
{
 require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
	use Dompdf\Dompdf;
	$file_name = md5(rand()) . '.pdf';
// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml(file_get_contents('CV.html'));

// (Optional) Setup the paper size and orientation
	$dompdf->setPaper(array(0,0,1903,1079.78), 'portrait');

// Render the HTML as PDF
	$dompdf->render();
 	$file = $dompdf->output();
 	file_put_contents($file_name, $file);
 	require_once 'PHPMailer-6.0.5/src/PHPMailer.php';
 	$mail = new PHPMailer;
 	$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
	$mail->SMTPDebug = 2;
//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
	$mail->SMTPAuth = false;
//Username to use for SMTP authentication - use full email address for gmail
// $mail->Username = "username@gmail.com";
// //Password to use for SMTP authentication
// $mail->Password = "yourpassword";
// //Set who the message is to be sent from
	$mail->setFrom('omar.bouaouina@etudiant-enit.utm.tn', 'Omar');
//Set who the message is to be sent to
	$mail->addAddress('phantomnius@gmail.com', 'Omar Bouaouina');
	// $mail->WordWrap = 50;
	// $mail->IsHTML(true);
	$mail->addAttachment($file_name);
	if (!$mail->send()) {
    	echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
   		echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="Curriculum Vitae"/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="headshot.jpg" alt="Alan Smith" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo">Bouaouina Omar</h1>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="http://www.enit.rnu.tn/" target="_blank">ENIT</a></li>
				<li>a: Rue Béchir Salem Belkhiria Campus universitaire, BP 37, 1002, Le Bélvédère, 1002, Tunis</li>
				<li>m: 01234567890</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Profil Personnel</h1>
				</div>
				
				<div class="sectionContent">
					<p>Âgé de 22 ans, un étudiant en génie informatique à l'école nationale d'ingénieurs de Tunis</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Expériences</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>Titre</h2>
					<p class="subDetails">2017 - Présent</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
				
				<article>
					<h2>Titre</h2>
					<p class="subDetails">2015 - 2017</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
				
				<article>
					<h2>Titre</h2>
					<p class="subDetails">2011 - 2015</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Compétences</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<li>Compétence</li>
					<li>Compétence</li>
					<li>Compétence</li>
					<li>Compétence</li>
					<li>Compétence</li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Etudes</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>Préparatoire</h2>
					<p class="subDetails">2015-2017</p>
					<p>IPEIM</p>
				</article>
				
				<article>
					<h2>Lycée</h2>
					<p class="subDetails">2011-2015</p>
					<p>Lycée Hammam Sousse</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				<h1>Centre d'Intêrets</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<li>Jeux Videos</li>
					<li>Cuisine</li>
					<li>Cinéma</li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				
			</div>
			
			<div class="sectionContent">
				<form method="post">
						<input type="submit" name="action" value="Envoi PDF">
				</form>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>