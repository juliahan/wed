<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"/>
<link rel="icon" href="favicon.ico" type="image/x-ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RSVP Here for Julia and Andy's Wedding</title>                         
<meta name="description" content="RSVP Here to Attend Julia Han and Andy Duddleston's Wedding" />
<meta name="keywords" content="Julia, Andy, Wedding, RSVP, Han, Duddleston, Rerserve, Reservation, Guests Only, Official, Invitation, Reply Card" />
<meta name="author" content="Julia Han and Andy Duddleston" />

<?php include 'header.php'; ?>


<div id="mainContent" class="rsvp">
 <div class="main">
   <h4>RSVP <span>by July 15, 2012</span></h4>
 <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Julia&Andy'; 
    $to = 'handudds@gmail.com'; 
    $subject = 'Our Wedding RSVP';
    $human = $_POST['human'];
    $rsvp = $_POST['rsvp'];	
    $guests = $_POST['guests'];		
    $body = "From: $name\n E-Mail: $email\n RSVP: $rsvp\n Guest Name(s): $guests\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p class="machineMessage">Your RSVP has been sent!</p>';
	} else { 
	    echo '<p class="machineMessage">Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p class="machineMessage">You answered the anti-spam question incorrectly!</p>';
    }
 ?>
    
     <form method="post" action="rsvp.php">
        <p>
        	<label>Name</label>
            <input name="name" placeholder="Type Here" class="text"/>
        </p>
        <p>
        	<label>Email</label>
            <input name="email" type="email" placeholder="Type Here" class="text" />
        </p>
        <p class="yourResponse">
        	<label class="radioTitle">Your Response</label>
            <span>
              <input class="radio" type="radio" name="rsvp" value="Yes"  />
              <label class="inline">Yes, can't wait!</label>
            </span>
            <span>  
    		  <input class="radio" type="radio" name="rsvp" value="Nopes" />
    		  <label class="inline">No, so sorry!</label>
    		</span>  
    	</p>	
        <p><label>Name(s) of Guest(s)*</label><input name="guests" type="guests" placeholder="Type Here"class="text" />
        </p>
        <div class="note">*Please note: Guestlist is open to invitees only. Due to the intimate nature of our wedding, dates of guests are permitted only if the date is a spouse or a domestic/live-in partner. Contact us with any questions.</div>
         <p>
         	<label>Message</label>
            <textarea name="message" placeholder="Type Here"></textarea>
         </p>
         <p>   
            <label>*What is 2+2? (Anti-Spam)</label>
            <input name="human" placeholder="Type Here" class="text"/>
         </p>   
         <p> <input id="submit" name="submit" type="submit" value="Submit" /></p>
        
        </form>
        
  </div>  
</div> <!-- mainContent end !-->
<?php include 'footer.php'; ?>