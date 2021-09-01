<?php if(get_option('display-footkey') == "enable" ) {?>
<div class="footer-tags">
<?php if($copy = get_option('footkeyword_1')) { ?><a title="<?php echo stripslashes($copy); ?>"><?php echo stripslashes($copy); ?></a>
<?php } else { ?>
<a title="Watch full movies online">Watch full movies online</a>
<?php } ?>
<?php if($copy = get_option('footkeyword_2')) { ?><a title="<?php echo stripslashes($copy); ?>"><?php echo stripslashes($copy); ?></a>
<?php } else { ?>
<a title="Free movies online">Free movies online</a>
<?php } ?>
<?php if($copy = get_option('footkeyword_3')) { ?><a title="<?php echo stripslashes($copy); ?>"><?php echo stripslashes($copy); ?></a>
<?php } else { ?>
<a title="Movietube">Movietube</a>
<?php } ?>
<?php if($copy = get_option('footkeyword_4')) { ?><a title="<?php echo stripslashes($copy); ?>"><?php echo stripslashes($copy); ?></a>
<?php } else { ?>
<a title="Free online movies full">Free online movies full</a>
<?php } ?>
<?php if($copy = get_option('footkeyword_5')) { ?><a title="<?php echo stripslashes($copy); ?>"><?php echo stripslashes($copy); ?></a>
<?php } else { ?>
<a title="Movie2k">Movie2k</a>
<?php } ?>
<?php if($copy = get_option('footkeyword_6')) { ?><a title="<?php echo stripslashes($copy); ?>"><?php echo stripslashes($copy); ?></a>
<?php } else { ?>
<a title="Watch movies 2k">Watch movies 2k</a>
<?php } ?>
</div>
<?php }?>