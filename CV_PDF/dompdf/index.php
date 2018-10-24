<?php

$message = '';
if(isset($_POST["action"]))
{
	include('pdf.php');
	$file_name = md5(rand()) . '.pdf';
	$pdf = new Pdf();
	$pdf->load_html();
	$pdf->render();
	$file = $pdf->output();
	file_put_contents($file_name,$file);
	require 'class/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->Host='smtpout.secureserver.net';

	$mail->Port = '80';

	$mail->SMTPAuth = false;
	$mail->SMTPSecure ='';
	$mail->AddAdress('omar.bouaouina@etudiant-enit.utm.tn','CV');
	$mail->WordWrap = 50;
	$mail->IsHTML(true);
	$mail->AddAttachment($file_name);

	$mail->Subject = 'Curriculum Vitae';

	if($mail->Send())
	{
		$message = '<label class="text-success">CV has been send successfully...</label>';
	}
	unlink($file_name);
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
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
	<form method="post">
		<input type="submit" name="action" value="PDF send"><?php echo $message; ?>
	</form>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
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
					<p class="subDetails">Avril 2011 - Présent</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
				
				<article>
					<h2>Titre</h2>
					<p class="subDetails">Janvier 2007 - Mars 2011</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
				
				<article>
					<h2>Titre</h2>
					<p class="subDetails">Octobre 2004 - Decembre 2006</p>
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
					<p class="subDetails">Qualification</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
				</article>
				
				<article>
					<h2>Lycée</h2>
					<p class="subDetails">Qualification</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
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
					<li>Intêret</li>
					<li>Intêret</li>
					<li>Intêret</li>
					<li>Intêret</li>
				</ul>
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