<?php if($dato = series_get_meta('next-ep')) { ?>
<?php if( series_get_meta('countdown') == true ) { ?>
<script>var countDownDate=new Date("<?php echo $dato; ?> <?php echo series_get_meta('time');?> <?php echo series_get_meta('timezone');?>").getTime(),x=setInterval(function(){var e=(new Date).getTime(),t=countDownDate-e,n=Math.floor(t/864e5),o=Math.floor(t%864e5/36e5),a=Math.floor(t%36e5/6e4);document.getElementById("date").innerHTML="<i>( "+n+" days "+o+" hours "+a+" minutes )</i>",0>t&&(clearInterval(x),document.getElementById("date").innerHTML="- <?php _e('RELEASED!','psythemes'); ?>")},1e3);</script>
<?php }?>
<style>#next-ep-notice .alert-warning { color: #<?php echo get_option('ep-sched-text'); ?>; background-color: #<?php echo get_option('ep-sched-bg'); ?>; border-color: #<?php echo get_option('ep-sched-border'); ?>;}</style>
<div id="next-ep-notice">
<div class="alert alert-warning" style="margin-bottom: 0; border-radius: 0;">
<i class="fa fa-warning mr5"></i> 
<?php if ($note = get_option('sched_note') ) { 
if( series_get_meta('countdown') == true ) { $cd = '<span id="date"></span>' ;} else { $cd = ''; }
$tags = array("{date}", "{time}", "{countdown}");
$value =  array($dato, series_get_meta('timezone'), $cd);
$message = $note; ?>
<?php echo str_replace($tags, $value, $message); ?>
<?php }?>
</div>
</div>
<?php }?>