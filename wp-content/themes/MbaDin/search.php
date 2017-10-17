<?php
if($_GET['s']!=''){
$replace = array('+',' ');
$urlredirect = get_settings('home') . '/gps/' . str_replace($replace,'-',$_GET['s']) . '/';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
?><?php get_header(); ?>
<div style="clear: both"></div>
<div id="nuyunu">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content"><div class="post"><div id="breadchumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
<?php echo spp(get_search_query( '', false ), 'pdf.html', ' filetype:pdf');?>
<input type="hidden" name="IL_IN_TAG" value="1"/>
<?php echo spp(get_search_query( '', false ), 'imgamazon.html', ' filetype:pdf');?>

<?php echo spp(get_search_query( '', false ), 'pdf2.html');?>  

</div></div>	
<div style="clear: both"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>