<?php 
if($_GET['report']) { 
require_once "formularios/recaptchalib.php";
$siteKey = get_option('public_key_rcth');
$secret = get_option('private_key_rcth');
$resp = null;
$error = null;
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
$resp = $reCaptcha->verifyResponse(
$_SERVER["REMOTE_ADDR"],
$_POST["g-recaptcha-response"] ); }
if ($resp != null && $resp->success) { 
require("formularios/class.phpmailer.php");
$msg = "";
if ($_POST['action'] == "send") {
$varname = $_FILES['archivo']['name'];
$vartemp = $_FILES['archivo']['tmp_name'];
$correo = get_option('reportemail');
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = $correo;
$mail->FromName = __( "New Report", "psythemes" );
$mail->Subject = $_POST['videos'];
$mail->AddAddress($correo);
if ($varname != "") {
$mail->AddAttachment($vartemp, $varname); }
$body = "
<strong>".__( "Reporter IP", "psythemes" ).":</strong>&nbsp;".$_POST['ip']."&nbsp;&nbsp;&nbsp;&nbsp;<strong>".__( "Post ID", "psythemes" ).":</strong>".$_POST['titulo']."<br><br>
<strong>".__( "Permalink", "psythemes" ).":</strong>&nbsp;<a href='".$_POST['enlaces']."' target='_blank'>".$_POST['enlace']."</a><br><br>
<strong>".__( "User's Email", "psythemes" ).":</strong>&nbsp; ".$_POST['email']."<br><br>
<strong>".__( "Problem Report", "psythemes" )."</strong> 
<table>
<tr><td>".__( "Video", "psythemes" ).":</td><td>".$_POST['videos']."</td></tr>
<tr><td>".__( "Audio", "psythemes" ).":</td><td>".$_POST['audio']."</td></tr>
<tr><td>".__( "Subtitle", "psythemes" ).":</td><td>".$_POST['subtitle']."</td></tr>
<tr><td>".__( "Downloads", "psythemes" )."</td><td>".$_POST['dloads']."</td></tr>
</table>
<br>
<strong>".__( "Description", "psythemes" ).":</strong><br><br>
".$_POST['detalles']."
<br><br>
<a href='".$_POST['enlace']."' style='background-color:#676767;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:500;line-height:30px;text-align:center;text-decoration:none;width:135px;-webkit-text-size-adjust:none;mso-hide:all;' target='_blank'>".__( "View Content", "psythemes" )."&nbsp;&rarr;</a>&nbsp;&nbsp;&nbsp;
<a href='".$_POST['link']."/wp-admin/post.php?post=".$_POST['id']."&action=edit' style='background-color:#79C143;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:500;line-height:30px;text-align:center;text-decoration:none;width:135px;-webkit-text-size-adjust:none;mso-hide:all;' target='_blank'>".__( "Edit Post", "psythemes" )."&nbsp;&rarr;</a>
<br><br>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();
$msg = "ok"; } ?>
<box class="test">
<script type="text/javascript">$(window).load(function(){$('.modal-report').modal('show');});</script>
<div class="aviso2 success">
<div class="icon"><b class="icon-check-circle"></b></div>
<div class="contenido32">
<span><?php _e('Report Sent','psythemes'); ?></span>
<?php _e('We have successfully received your report, thank you.','psythemes'); ?></div>
</div>
<?php } else { ?>
<box class="test">
<script type="text/javascript">
    $(window).load(function(){
        $('.modal-report').modal('show');
    });
</script>
<div class="aviso2 error">
<div class="icon"><b class="icon-exclamation-circle"></b></div>
<div class="contenido32">
<div class="report_icon"></div><div class="report_message"><span class="report_title"><?php _e('Report Error!','psythemes'); ?></span>
<?php _e('We can not send your report, try again.','psythemes'); ?></div>
</div>
</div>
<?php }  } ?>
<div class="reportform">
<p><?php _e('Please help us to describe the issue so we can fix it asap.','psythemes'); ?></p>
					
<form method="post" action="<?php the_permalink() ?>?report=<?php echo validar_key(10); ?>#uwee"> 
<div class="aff">

<?php if($dato = series_get_meta('serie_vote_average')) { ?>
<div class="rep_cont">
<label><?php _e('Episodes','psythemes'); ?></label>
<select name="videos" required style="margin-bottom: 5px;">
<option value="n/a" disabled selected><?php _e('-----','psythemes'); ?></option>
<option value="<?php _e('Incorrect episode','psythemes'); ?>"><?php _e('Incorrect episode','psythemes'); ?></option>
<option value="<?php _e('Broken link','psythemes'); ?>"><?php _e('Broken link','psythemes'); ?></option>
<option value="<?php _e('Others','psythemes'); ?>"><?php _e('Others','psythemes'); ?></option>
</select>
</div>
<div class="rep_cont">
<label><?php _e('Contents','psythemes'); ?></label>
<select name="audio" required style="margin-bottom: 5px;">
<option value="n/a" disabled selected><?php _e('-----','psythemes'); ?></option>
<option value="<?php _e('Incorrect details','psythemes'); ?>"><?php _e('Incorrect details','psythemes'); ?></option>
<option value="<?php _e("Wrong images","psythemes"); ?>"><?php _e("Wrong images","psythemes"); ?></option>
<option value="<?php _e('Others','psythemes'); ?>"><?php _e('Others','psythemes'); ?></option>
</select>
</div>
<?php } else {?>
<div class="rep_cont">
<label><?php _e('Video','psythemes'); ?></label>
<select name="videos" required style="margin-bottom: 5px;">
<option value="n/a" disabled selected><?php _e('-----','psythemes'); ?></option>
<option value="<?php _e('Wrong video','psythemes'); ?>"><?php _e('Wrong video','psythemes'); ?></option>
<option value="<?php _e('Broken video','psythemes'); ?>"><?php _e('Broken video','psythemes'); ?></option>
<option value="<?php _e('Others','psythemes'); ?>"><?php _e('Others','psythemes'); ?></option>
</select>
</div>
<div class="rep_cont">
<label><?php _e('Audio','psythemes'); ?></label>
<select name="audio" required style="margin-bottom: 5px;">
<option value="n/a" disabled selected><?php _e('-----','psythemes'); ?></option>
<option value="<?php _e('Not Synced','psythemes'); ?>"><?php _e('Not Synced','psythemes'); ?></option>
<option value="<?php _e("There's no Audio","psythemes"); ?>"><?php _e("There's no Audio","psythemes"); ?></option>
<option value="<?php _e('Others','psythemes'); ?>"><?php _e('Others','psythemes'); ?></option>
</select>
</div>
<div class="rep_cont">
<label><?php _e('Subtitle','psythemes'); ?></label>
<select name="subtitle" required style="margin-bottom: 5px;">
<option value="n/a" disabled selected><?php _e('-----','psythemes'); ?></option>
<option value="<?php _e('Not Synced','psythemes'); ?>"><?php _e('Not Synced','psythemes'); ?></option>
<option value="<?php _e('Wrong subtitle',"psythemes"); ?>"><?php _e('Wrong subtitle','psythemes'); ?></option>
<option value="<?php _e('Missing subtitle','psythemes'); ?>"><?php _e('Missing subtitle','psythemes'); ?></option>
</select>
</div>
<div class="rep_cont">
<label><?php _e('Downloads','psythemes'); ?></label>
<select name="dloads" required style="margin-bottom: 5px;">
<option value="n/a" disabled selected><?php _e('-----','psythemes'); ?></option>
<option value="<?php _e('Wrong links','psythemes'); ?>"><?php _e('Wrong links','psythemes'); ?></option>
<option value="<?php _e('Broken links',"psythemes"); ?>"><?php _e('Broken links','psythemes'); ?></option>
<option value="<?php _e('Missing download','psythemes'); ?>"><?php _e('Missing download','psythemes'); ?></option>
<option value="<?php _e('Add new mirror links','psythemes'); ?>"><?php _e('Add new mirror links','psythemes'); ?></option>
</select>
</div>
<?php }?>
<div class="rep_cont2">
<input type="email" name="email"  required placeholder="<?php _e('Enter your email. (It will not be shared)','psythemes'); ?>">
<textarea name="detalles" required placeholder="<?php _e('Describe the issue here.','psythemes'); ?>"></textarea>
<div class="g-recaptcha" data-sitekey="<?php echo get_option('public_key_rcth') ?>"></div>
<input type="submit" value="<?php _e('Send Report','psythemes'); ?>" class="btn btn-block btn-successful">
</div>
   <div class="clearfix"></div>
</div>
<input type="hidden" name="titulo" value="<?php the_title(); ?>">
<input type="hidden" name="enlace" value="<?php the_permalink() ?>">
<input type="hidden" name="id" value="<?php the_id(); ?>">
<input type="hidden" name="ip" value="<?php echo la_ip(); ?>">
<input type="hidden" name="link" value="<?php bloginfo('url'); ?>">
<input type="hidden" name="action" value="send" />
</form>
</div>