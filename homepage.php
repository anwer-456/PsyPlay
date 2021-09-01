		<div class="home-main">
            <div class="hm-logo"><a title="<?php bloginfo('name') ?>" href="<?php bloginfo('url'); ?>" id="logo-home"></a></div>
            <div class="addthis_inline_share_toolbox mb10"></div>	
            <div id="hm-search">
                <div id="search-homepage" class="search-content">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
				<input class="form-control search-input" type="text" placeholder="<?php _e('Search..', 'psythemes'); ?>" name="s" id="s" value="<?php echo $_GET['s'] ?>" data-swpconfig="home-search" <?php if(get_option('live-search') == "true") { echo 'data-swplive="true"';}?>>
					<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					<div id="search-homepage-results">
					</div>
                </div>
            </div>
            <div class="hm-button"><a href="<?php echo get_option('psy_home');?>" class="btn btn-lg btn-successful"><?php if($btn = get_option('homepage-search-custom-button')) { echo $btn; }else {_e('Use the old '.get_bloginfo('name').'? Click here');}?></a></div>
        </div>
