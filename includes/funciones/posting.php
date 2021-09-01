<div style="display:none">
<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {
if (isset ($_POST['title'])) {
$title =  $_POST['title'];
} else {
echo _('Please enter the wine name','psythemes');
}
if (isset ($_POST['description'])) {
$description = $_POST['description'];
} else {
echo _('Please enter some notes','psythemes');
}
$tags = $_POST['post_tags'];
# Register custom field
$imdb = $_POST['Checkbx2']; #####################
# Add items to new post
$new_post = array(
    'post_title'    =>   $title,
    'post_content'  =>   $description,
    'post_category' =>   array($_POST['cat']), // Enable category taxonomy.
    'tags_input'    =>   array($tags),
    'post_status'   =>   'draft', // Choose publish status: publisher, preview, future, draft, etc.
    'post_type' =>   'post' // Choose post_type
);
# Save Publication
$pid = wp_insert_post($new_post);
# Adding custom field
add_post_meta($pid, 'Checkbx2', $imdb, true); #####################
# Inserting Labels
wp_set_post_tags($pid, $_POST['post_tags']);
# Redirect
#wp_redirect(home_url());
} 
# Adding Image
if ($_FILES) {
array_reverse($_FILES);
$i = 0;
foreach ($_FILES as $file => $array) {
if ($i == 0) $set_feature = 1; 
else $set_feature = 0; 
$newupload = insert_attachment($file,$pid, $set_feature);
 $i++; } } 
# Inserting publication to the database.
do_action('wp_insert_post', 'wp_insert_post');
# End of function.
?>
</div>