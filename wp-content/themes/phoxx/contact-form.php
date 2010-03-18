<?php

/*

Template Name: Contact Form

*/

//If the form is submitted

if(isset($_POST['submitted'])) {



	$hasError=false;



	//Check to see if the honeypot captcha field was filled in

		

		//Check to make sure that the name field is not empty

		if(trim($_POST['namess']) === '') {

			$nameError = 'Required field';

			$hasError = true;

		} else {

			$namess = trim($_POST['namess']);

		}		

		if(trim($_POST['subject']) === '') {

			$subjectError = 'Required field';

			$hasError = true;

		} else {

			$subject = trim($_POST['subject']);

		}		

		if(trim($_POST['message']) === '') {

			$messageError = 'Required field';

			$hasError = true;

		} else {

			$message = trim($_POST['message']);

		}		

	



				

		//Check to make sure sure that a valid email address is submitted

		if(trim($_POST['email']) === '')  {

			$emailError = 'You forgot the email adress!';

			$hasError = true;

		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {

			$emailError = 'Email adress is not valid';

			$hasError = true;

		} else {

			$email = trim($_POST['email']);

		}



		//If there is no error, send the email

		if($hasError==false) {



			$emailTo = get_option('contactemail');

			$subject = 'Contact Form Submission from '.$name;			

			$body = "Name: $namess \n\nEmail: $email \n\Subject: $subject \n\Message: $message";

			$headers = 'From: contactmessage  <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

			

			@mail($emailTo, $subject, $body, $headers);						



			$emailSent = true;



		}	

} ?><?php get_header(); ?>

           <div id="content" class="narrowcolumn" role="main">

<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">

		<h1>Thank you,</h1>

		<p>Your message was sent successfully!</p>

	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>	

	<?php while (have_posts()) : the_post(); ?>

		<div class="page_post">
		<h2 class="title"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

           

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



			</div>

		<?php endwhile; ?>

	<?php endif; ?>            

 		<?php 

		$mycontactemail=get_option('contactemail'); 

		if ($mycontactemail!='') {

		?>       

        <div class="contact_form">
        <h2 class="title">Send a message</h2>
  

		<?php if(isset($hasError)) { ?>

			<p class="error">There was an error, please try again!<p>

		<?php } ?>

		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">

                    <div class="formrow"><label class="contact">Name:</label>
                    <input type="text" class="input_register" name="namess" value="<?php if(isset($_POST['namess'])) echo $_POST['namess'];?>" />
						<?php if($nameError != '') { ?>
                        <span class="error"><?=$nameError;?></span> 
                        <?php } ?>
                    </div>

                    <div class="formrow"><label class="contact">Email:</label>
                    <input type="text" class="input_register" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"/>
						<?php if($emailError != '') { ?>
                        <span class="error"><?=$emailError;?></span> 
                        <?php } ?>
                    </div>



                    <div class="formrow"><label class="contact">Subject:</label>
                    <input type="text" class="input_register" name="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>"/>
						<?php if($subjectError != '') { ?>
                        <span class="error"><?=$subjectError;?></span> 
                        <?php } ?>             
                    </div>


                    

                    <div class="formrow"><label class="contact">Message:</label>

                    <textarea class="textarea_register" name="message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"> </textarea>

						<?php if($messageError != '') { ?>

                        <span class="error"><?=$messageError;?></span> 

                        <?php } ?>                    

                    </div>

				<div class="formrow">
				<input type="hidden" name="submitted" id="submitted" value="true" />
                 <input type="submit" id="submit" value="Send message" class="send" />
                 </div>

		</form>
	      </div>
        <?php } ?>  
		</div>


<?php } ?>
</div>


<?php include ('sidebar-page.php'); ?>
<?php get_footer(); ?>	