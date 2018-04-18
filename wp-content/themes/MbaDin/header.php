<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta name="msvalidate.01" content="ED6971644B28E8BA58EDEED681481CDB" />
<meta charset="utf-8">
<meta content='index,follow' name='alexabot'/>
<meta content='English' name='Language'/>
<meta content='document' name='resource-type'/>
<meta content='Global' name='Distribution'/>
<meta content='no-cache' http-equiv='cache-control'/>
<meta content='no-cache' http-equiv='pragma'/>
<meta content='general' name='rating'/>
<meta content='global' name='target'/>
<meta content='follow' name='Googlebot-Image'/>
<meta content='follow' name='Scooter'/>
<meta content='follow' name='msnbot'/>
<meta content='follow' name='Slurp'/>
<meta content='follow' name='ZyBorg'/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); } else 
{ ?><?php  wp_title(''); ?> - <?php bloginfo('name'); } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico" type="image/x-icon" />

<?php if ( is_search() || is_tag() ) : ?><link rel="canonical" href="<?php bloginfo('url');?>/opt/<?php $ab=strtolower($s); echo str_replace(' ', '-',$ab); ?>/" />
<meta name="keywords" content="<?php the_search_query(); ?> "/>
<meta name="description" content="<?php echo spp(get_search_query(), 'metadesc.html'); ?> "/>


<?php endif ?>

<?php wp_head(); ?>
<script type="text/javascript">
 <!--
    if (top.location!= self.location) {
      top.location = self.location.href
    }
  //-->
</script>
</head>
<body <?php body_class(''); ?>> 
<div id="wandrun">
<div id="header">

<center>
<a href="<?php bloginfo('url'); ?>"><?php $header_image = get_header_image();
if ( ! empty( $header_image ) ) : ?><img src="<?php header_image(); ?>" width="450" height="75" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/></a><?php else : ?><div class="logo"><?php bloginfo('name'); ?></a></div><?php endif;?>	
<form method="get" id="golek" action="<?php bloginfo('url'); ?>/">
<input id="golek-box" type="text" value="Search ... " onfocus="if
(this.value==this.defaultValue) this.value='';" name="s" size="40" />
<input id="gomuno" type="submit" value="Search" />
</form>
</center></div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'dropdown', 'container_id' => 'navwrap', 'fallback_cb' => '', ) ); ?>
<div style="clear: both"></div>
