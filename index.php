<?php
$yourEmail = 'tushar02614902014@msi-ggsip.org';
if(isset($_POST['submitted'])) { 
    if($_POST['contact_name'] === '') { 
            $hasError = true;
    } else {
            $name = $_POST['contact_name'];
    }

    if($_POST['contact_email'] === '')  { 
            $hasError = true;
    } else if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST['contact_email'])) {
            $hasError = true;
    } else {
            $email = $_POST['contact_email'];
			}
			
    if($_POST['contact_textarea'] === '') {
            $hasError = true;
    } else {
            $comments = $_POST['contact_textarea'];
    }

    if(!isset($hasError)) {

            $emailTo = $yourEmail;
            $subject = "Message From Your Website";
            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
            $headers = 'From : my site <'.$emailTo.'>' . "\r\n" . 'answer to : ' . $email;

            mail($emailTo, $subject, $body, $headers);
			
			$subject = "WEmp.org Team";
			$body = "Dear user,\n\nThank you for contacting www.WEmp.org. We have received your query and our team will be responding to you soon. You may also refer to our FAQs at http://www.WEmp.org/faq for more information.\n\nPlease note our working hours are 0830 to 1730 (GMT +0800) from Monday to Friday and we regret the delay in reply over the non-working hours.\n\nBest regards\nwww.WEmp.org\nTel: +91-9958250076";
			mail($email, $subject, $body);
			
            $emailSent = true;
			
			$servername="localhost";
			$username="root";
			$dbname="notify";
			try {
				$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username);
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$sql="INSERT INTO `qform`(`Name`,`Email`,`Comments`) VALUES('$name','$email','$comments')";
				$conn->exec($sql);
				}
			catch(PDOException $e)
				{
				echo $sql."<br>".$e->getMessage();
				}
			$conn=null;
    }
    
}
?>
<html>
	<head>
		<title>Empowering Women</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/contact.css">
		<link rel="stylesheet" href="assets/css/card.css">
	</head>
	<body style="overflow-x: hidden">
	<section style="background: url(images/tab.png); height: 15%;">
	<div class="container">
	<br>
	<a href="#one" style="color: white; box-shadow: inset 0 0 0 0px rgba(144, 144, 144, 0.5)" class="button scrolly">Meaning</a>
	&nbsp;
	<a href="#two" style="color: white; box-shadow: inset 0 0 0 0px rgba(144, 144, 144, 0.5)" class="button scrolly">Gender Equality</a>
	&nbsp;
	<a href="#three" style="color: white; box-shadow: inset 0 0 0 0px rgba(144, 144, 144, 0.5)" class="button scrolly">Blog</a>
	&nbsp;
	<a href="#form" style="color: white; box-shadow: inset 0 0 0 0px rgba(144, 144, 144, 0.5)" class="button scrolly">Query Form</a>
	&nbsp;
	<a href="faq.html" class="button special">FAQ</a>
	&nbsp;
	<button style="font-family: inherit;" type=button class="button special">Contact Us</button>
	<div class="wrap">
	<div class=content>
	<b><h3 style="float: left" class=y>CONTACT US<h6  style="float: right"><button class="button">X</button></h6></h3></b>
	<br><br><br><br><br><br>
	<i class=x>Tushar Arora<br>
	<a href="tel:+919958250076">+91-9958250076</a><br>
	<a href="mailto:tushararora.1996@gmail.com?subject=WEmp.org">tushararora.1996@gmail.com</a></i>
	</div>	
	</div>
	<br>
	</section>
			<section id="header" style="z-index: -1;">
				<div class="inner">
					<?php
					if(isset($emailSent) && $emailSent == true)
					{
						echo '<script> alert("Thanks, user.\nYour message has been sent successfully. You will receive a response shortly.") </script>';
					}
					if(isset($hasError) && $hasError == true)
					{
						echo '<script> alert("Sorry, Your message can\'t be sent.\nCheck if your email is correct or else a field is left empty.") </script>';
					}
					?>					
					<img style="position: relative; top: -50px;" src="images\a1.png" height=100 width=120>
					<h1 style="position: relative; top: -30px;">नारी प्रीत में राधा बने,<br>गृहस्थी में जानकी।<br>काली बन कर शीश काटे,<br>जब बात हो सम्मान की।।</h1>
					
					<p><b><i>"A feminist is anyone who recognizes the equality and<br>
					full humanity of women and men."</i></b></p>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<header class="major">
							
								<h2>MEANING</h2>
							</header>
							<p>Women Empowerment refers to increasing and improving the social, economic, political and legal strength of the women, to ensure equal-right to women. Women empowerment helps women to control and benefit from resources, assets, income and their own time, as well as the ability to manage risk and improve their economic status and well-being.</p>
						</div>
						<div class="6u$ 12u$(medium) important(medium)">
							<span class="image fit"><img src="images\b1.jpg"></span>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main style2">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<ul class="major-icons">
								<li><span class="icon style1 major fa-code"></span></li>
								<li><span class="icon style2 major fa-bolt"></span></li>
								<li><span class="icon style3 major fa-camera-retro"></span></li>
								<li><span class="icon style4 major fa-cog"></span></li>
								<li><span class="icon style5 major fa-desktop"></span></li>
								<li><span class="icon style6 major fa-calendar"></span></li>
							</ul>
						</div>
						<div class="6u$ 12u$(medium)">
							<header class="major">
								<h2>GENDER EQUALITY</h2>
							</header>
							<p>What a man and a woman should/should not do was never a role given to society! Yet we created gender roles and then the battle of sex began! With this powerful thought in our minds young Womenites took to the Raahgiri for the second time to reach out to fellow Delhites and know their views and thoughts on the topic of ‘Gender Equality’.</p>
							<br>
							<p>Voicing their views over issues such as ‘girls wearing short clothes in public’ and ‘girls asked to change their surname post marriage’; people had mixed reactions. Some found it ‘cool’ while some considered it a stereotype in the society. Although people agreed that modern perceptions have changed, our nation is still entangled in the web of inequality.</p>
							<br>
							<p>Neverthless, it was a fun filled experience and another achievement in the book of ‘Womenite’s endeavours’ to spread the message of change and to bring about that change.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main style1 special">
				<div class="container">
					<header class="major">
						<h2>OUR LATEST BLOGS</h2>
					</header>
					<p>Sign up to get notified about our latest blogs right as they get published.</p>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<span class="image fit"><img src="images/impw2.jfif" height=220 alt="" /></span>
							<h3><b>Importance of women's empowerment in India</b></h3>
							<p><i>"A woman is like a tea bag—you never know how strong she is until she gets in hot water."</i></p>
							<ul class="actions">
								<li><a href="impw.html" target=_blank class="button">More</a></li>
							</ul>
						</div>
						<div class="4u 12u$(medium)">
							<span class="image fit"><img src="images/mindset.jpg" height=220 alt="" /></span>
							<h3><b>Not women, mindsets need empowerment</b></h3>
							<p><i>"The empowered woman is powerful beyond measure, and beautiful beyond description."</i></p>
							<ul class="actions">
								<li><a href="mindset.html" target=_blank class="button">More</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<span class="image fit"><img src="images/wchange.jpg" height=220 alt="" /></span>
							<h3><b>7 ways women could change the world</b></h3>
							<p><i>"If you want something said, ask a man; if you want something done, ask a woman."</i></p>
							<ul class="actions">
								<li><a href="7ways.html" target=_blank class="button">More</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>Have any queries?</h2>
					</header>
					<p>You can also sign up for our weekly blogs.</p>
					<ul class="actions uniform">
						<li><a href="#form" class="button scrolly"  class="button special">Submit Query</a></li>
						<li><a href="faq.html" class="button special">faq</a></li>
					</ul>
				</div>
			</section>
		<!-- Five -->
		<a id=form></a>
		<section id="five" class="main style1">
		<div class="container">
						<h4><center><b>Query Form</b></center></h4>
						<form method="post" action="#">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="contact_name" id="demo-name" placeholder="Name" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="contact_email" id="demo-email" placeholder="Email" />
								</div>
								<div class="12u$">
									<textarea name="contact_textarea" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="6u 12u$(small)">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Sign me up for your weekly blogs.</label>
								</div>
								<div class="12u$">
									<ul class="actions">
										<input type="hidden" name="submitted" id="submitted" value="true" />
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
			</div>
		</section>
		<hr style="border-width: 5px; border-color: powderblue;">
		<!-- Six -->
			<section id="six" class="main style">
				<div class="container">
					<center><h2>NON-GOVERNMENTAL ORGANIZATIONS IN ACTION</h2><center>
					<br><br>
					<a href="http://www.womenite.com" target=_blank>
					<ul>
					<li type=none style="width: 33%; float: left">
					<div class="card" style="width: 300; height: 310">
					<center><img src="images/ngo1.jpg" height="175" width="260" style="border-radius: 5px 5px 0 0"></center>
					<div class="container" style="padding: 2px 16px;">
						<br>
						<h4 style="text-align: left">
						<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Womenite</b></h4>
						<p style="text-align: left">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Changemakers</p>
						<br>
					</div></a>
					</li>
					
					<li type=none style="width: 33%; float: left">
					<a href="http://www.azadfoundation.com" target=_blank>
					<div class="card" style="width: 300; height: 310">
					<center><img src="images/ngo2.png" height="175" width="260" style="border-radius: 5px 5px 0 0"></center>
					<div class="container" style="padding: 2px 16px;">
						<br>
						<h4 style="text-align: left">
						<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azad Foundation</b></h4>
						<p style="text-align: left">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Changemakers</p>
						<br>
					</div></a>
					</li>
					
					<li type=none style="width: 33%; float: left">
					<a href="http://www.sapnaindia.org" target=_blank>
					<div class="card" style="width: 300; height: 310">
					<center><img src="images/ngo3.png" height="175" width="260" style="border-radius: 5px 5px 0 0"></center>
					<div class="container" style="padding: 2px 16px;">
						<br>
						<h4 style="text-align: left">
						<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sapna</b></h4>
						<p style="text-align: left">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Realising a dream</p>
						<br>
					</div></a>
					</li></ul>
				</div>
			</section>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="http://twitter.com/empowerwomenrr" class="icon alt fa-twitter" target=_blank><span class="label">Twitter</span></a></li>
					<li><a href="http://fb.com/woemp" class="icon alt fa-facebook" target=_blank><span class="label">Facebook</span></a></li>
					<li><a href="http://instagram.com/empoweringwomennow" class="icon alt fa-instagram" target=_blank><span class="label">Instagram</span></a></li>
					<li><a href="mailto:tushararora.1996@gmail.com?subject=WEmp.org" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; 2017</li><li>Design: <a href="http://fb.com/t.arora96" target=_blank>Tushar Arora</a></li>
				</ul>
			</section>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/contact.js"></script>
	</body>
</html>