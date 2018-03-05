<?php
 /*
   template name:contact
*/
get_header(); ?>	
<div class="container">
<div class="contacts_form">




<div class="row">
<div class="col-sm-7">

<form id="newsletter-footer" action="" method="POST">
	<h5><strong>Sign up</strong> for email updates</h5>
	<div class="newsletter-form">
		<div class="newsletter-email" style="margin-bottom:10px; " >
			<input type="email" name="subscriber_email" placeholder="Email address">
		</div>
		<div class="newsletter-submit">
			<input type="hidden" name="kv_submit_subscription" value="Submit">
			<input type="submit" name="submit_form" value="Submit">							
		</div>
	</div>
</form>


   <h1>SEND US MESSAGE</h1>

<?php

If($_POST['Submit']) {
// run validation if you're not doing it in js
global $wpdb;

$yourname=$_POST['yourname'];
$youremail=$_POST['youremail'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$messages=$_POST['messages'];

if($wpdb->insert(
'bank',
array(
'name' => $yourname,
'email' => $youremail,
'phone' => $phone,
'email' => $youremail,
'subject' => $subject,
'messages' => $messages

)
) == false) wp_die('Database Insertion failed');
else echo 'Database insertion successful<p />';

?>
<?php
}
else // else we didn't submit the form, so display the form
{
?>
      <form action="" method="post" id="addcourse">
           <div class="row">
                    <div class="col-sm-6">
                             <label id=""><input type="text"
                                  name="yourname" size="40" placeholder="name" required="required"/></label>
                   </div>
                   <div class="col-sm-6">
                              <label id=""><input type="email"
                               name="youremail" size="40" placeholder="email" required="required" /></label>
                    </div>
                    
                    <div class="col-sm-6">
                              <label id=""><input type="text"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                               name="phone" size="40" placeholder="phone"  required="required" /></label>
							   

                   </div>
                    <div class="col-sm-6">
                                 <label id=""><input type="text"
                                  name="subject" size="40" placeholder="subject" required="required" /></label>
                   </div>
                    <div class="col-sm-12">
                            <textarea id="contact_sum" name="messages" placeholder="Write something.." style="height:200px"></textarea>
                           <label id="contact_submit">  <input type="submit" name="Submit"  value="Submit" /></label>
	                </div>
			</div>
   
    </form>


<?php
}

{
}
?>
    </div>
<div class="col-sm-5">
	      <h1>LOCATION</h1>
                     	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88503.86883066315!2d77.84585421352521!3d11.3817152223285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9640247c497c7%3A0x2eca54419e3d9762!2sK.S.Rangasamy+College+of+Engineering.!5e0!3m2!1sen!2sin!4v1519285862865" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                     	
          <div class="side_resent side_resent1 ">
                        <ul>
					       <li><span class="icons fa fa-map-marker"></span>K.S.R,Kalvinager,Thiruchangode<br>TamilNadu.</li>
                           <li><span class="icons fa fa-phone"></span>0123456789</li>
                           <li><span class="icons fa fa-envelope-o"></span>hello@ivisual.com</li>
                        </ul>



	</div>

</div>


</div>
</div>




<?php get_footer(); ?>	
