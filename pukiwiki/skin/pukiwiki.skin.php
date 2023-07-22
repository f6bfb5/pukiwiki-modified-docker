<?php
// PukiWiki - Yet another WikiWikiWeb clone.
// pukiwiki.skin.php
// Copyright
//   2002-2021 PukiWiki Development Team
//   2001-2002 Originally written by yu-ji
// License: GPL v2 or (at your option) any later version
//
// PukiWiki default skin

// ------------------------------------------------------------
// Settings (define before here, if you want)

// Set site identities
$_IMAGE['skin']['logo']     = 'pukiwiki.png';
$_IMAGE['skin']['favicon']  = 'favicon.ico'; // Sample: 'image/favicon.ico';

// SKIN_DEFAULT_DISABLE_TOPICPATH
//   1 = Show reload URL
//   0 = Show topicpath
if (! defined('SKIN_DEFAULT_DISABLE_TOPICPATH'))
	define('SKIN_DEFAULT_DISABLE_TOPICPATH', 1); // 1, 0

// Show / Hide navigation bar UI at your choice
// NOTE: This is not stop their functionalities!
if (! defined('PKWK_SKIN_SHOW_NAVBAR'))
	define('PKWK_SKIN_SHOW_NAVBAR', 1); // 1, 0

// Show / Hide toolbar UI at your choice
// NOTE: This is not stop their functionalities!
if (! defined('PKWK_SKIN_SHOW_TOOLBAR'))
	define('PKWK_SKIN_SHOW_TOOLBAR', 1); // 1, 0

// ------------------------------------------------------------
// Code start

// Prohibit direct access
if (! defined('UI_LANG')) die('UI_LANG is not set');
if (! isset($_LANG)) die('$_LANG is not set');
if (! defined('PKWK_READONLY')) die('PKWK_READONLY is not set');

$lang  = & $_LANG['skin'];
$link  = & $_LINK;
$image = & $_IMAGE['skin'];
$rw    = ! PKWK_READONLY;

// MenuBar
$menu = arg_check('read') && exist_plugin_convert('menu') ? do_plugin_convert('menu') : FALSE;
// RightBar
$rightbar = FALSE;
if (arg_check('read') && exist_plugin_convert('rightbar')) {
	$rightbar = do_plugin_convert('rightbar');
}
// ------------------------------------------------------------
// Output

// HTTP headers
pkwk_common_headers();
header('Cache-control: no-cache');
header('Pragma: no-cache');
header('Content-Type: text/html; charset=' . CONTENT_CHARSET);

?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CONTENT_CHARSET ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if ($nofollow || ! $is_read)  { ?> <meta name="robots" content="NOINDEX,NOFOLLOW" /><?php } ?>
<?php if ($html_meta_referrer_policy) { ?> <meta name="referrer" content="<?php echo htmlsc(html_meta_referrer_policy) ?>" /><?php } ?>

 <title><?php echo $title ?> - <?php echo $page_title ?></title>

 <link rel="SHORTCUT ICON" href="<?php echo IMAGE_DIR . $image['favicon'] ?>" />
 <link rel="stylesheet" type="text/css" href="<?php echo SKIN_DIR ?>pukiwiki.css" />
 <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $link['rss'] ?>" /><?php // RSS auto-discovery ?>
 <script type="text/javascript" src="skin/main.js" defer></script>
 <script type="text/javascript" src="skin/search2.js" defer></script>

<?php echo $head_tag ?>

<!-- FontAwesome -->
<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet" >
</head>
<body>
<?php echo $html_scripting_data ?>

<div class="container">

<div id="header">
 <a href="<?php echo $link['top'] ?>"><img id="logo" src="<?php echo IMAGE_DIR . $image['logo'] ?>" width="80" height="80" alt="[PukiWiki]" title="[PukiWiki]" /></a>

 <h1 class="title"><?php echo $page ?></h1>

<?php if ($is_page) { ?>
 <?php if(SKIN_DEFAULT_DISABLE_TOPICPATH) { ?>
   <a href="<?php echo $link['canonical_url'] ?>"><span class="small"><?php echo $link['canonical_url'] ?></span></a>
 <?php } else { ?>
   <span class="small">
   <?php require_once(PLUGIN_DIR . 'topicpath.inc.php'); echo plugin_topicpath_inline(); ?>
   </span>
 <?php } ?>
<?php } ?>

</div>

<div id="navigator">
<?php if(PKWK_SKIN_SHOW_NAVBAR) { ?>
<?php
function _navigator($key, $value = '', $javascript = ''){
	$lang = & $GLOBALS['_LANG']['skin'];
	$link = & $GLOBALS['_LINK'];
	if (! isset($lang[$key])) { echo 'LANG NOT FOUND'; return FALSE; }
	if (! isset($link[$key])) { echo 'LINK NOT FOUND'; return FALSE; }

	echo '<a href="' . $link[$key] . '" ' . $javascript . '>' .
		(($value === '') ? $lang[$key] : $value) .
		'</a>';

	return TRUE;
}
?>
 [ <?php _navigator('top') ?> ] &nbsp;

<?php if ($is_page) { ?>
 [
 <?php if ($rw) { ?>
	<?php 
		// _navigator('edit')
		global $vars;echo '<a href="./?cmd=viewedit&page='.$vars['page'].'">編輯</a>'; 
	?> |
	<?php if ($is_read && $function_freeze) { ?>
		<?php (! $is_freeze) ? _navigator('freeze') : _navigator('unfreeze') ?> |
	<?php } ?>
	<?php _navigator('copy') ?> |
	<?php _navigator('rename') ?> |
 <?php } ?>
 <?php _navigator('diff') ?>
 <?php if ($do_backup) { ?>
	| <?php _navigator('backup') ?>
 <?php } ?>
 <?php if ($rw && (bool)ini_get('file_uploads')) { ?>
	| <?php _navigator('upload') ?>
 <?php } ?>
 | <?php _navigator('reload') ?>
 ] &nbsp;
<?php } ?>

 [
 <?php if ($rw) { ?>
	<?php _navigator('new') ?> |
 <?php } ?>
   <?php _navigator('list') ?>
 <?php if (arg_check('list')) { ?>
	| <?php _navigator('filelist') ?>
 <?php } ?>
 | <?php _navigator('search') ?>
 | <?php _navigator('recent') ?>
 | <?php _navigator('help')   ?>
 <?php if ($enable_login) { ?>
 | <?php _navigator('login') ?>
 <?php } ?>
 <?php if ($enable_logout) { ?>
 | <?php _navigator('logout') ?>
 <?php } ?>
 ] &nbsp;

 <?php // add RSS and sitemap ?>
 [
 <?php _navigator('rss10')   ?>
 | <?php echo'<a href="' . $GLOBALS['_LINK']['top'] . '?plugin=sitemap">Sitemap</a>';   ?>
 ] &nbsp;

<?php
if (PKWK_SKIN_SHOW_SEARCH && !arg_check('search')) {
	global $script, $_btn_and, $_btn_or, $_btn_search, $_title_site_search, $s_word;

	echo <<<EOD
<div class="searchbar">
<form action="$script?cmd=search" method="post" id="head_search" style="display: inline-block;">
  <input type="text"  name="word" value="$s_word" size="16" />
  &nbsp;<input type="submit" value="$_btn_search" />
</form>
</div>
EOD;
}
?>

<?php } // PKWK_SKIN_SHOW_NAVBAR ?>
</div>

<?php echo $hr ?>

<div id="contents">
 <div id="body"><?php echo $body ?></div>
<?php if ($menu) { ?>
 <div id="menubar"><?php echo $menu ?></div>
<?php } ?>
<?php if ($rightbar) { ?>
 <div id="rightbar"><?php echo $rightbar ?></div>
<?php } ?>
</div>

<?php if ($notes != '') { ?>
<div id="note"><?php echo $notes ?></div>
<?php } ?>

<?php if ($attaches != '') { ?>
<div id="attach">
<?php echo $hr ?>
<?php echo $attaches ?>
</div>
<?php } ?>

<?php echo $hr ?>

<!-- Last Modified -->
<?php if ($lastmodified != '') { ?>
<div id="lastmodified">Last-modified: <?php echo $lastmodified ?></div>
<?php } ?>

<!-- Related -->
<?php if ($related != '') { ?>
<div id="related">Link: <?php echo $related ?></div>
<?php } ?>

<!-- Footer -->
<div id="footer">
 Site admin: <a href="<?php echo $modifierlink ?>"><?php echo $modifier ?></a>
 <p>
 <?php echo S_COPYRIGHT ?>.
 Powered by PHP <?php echo PHP_VERSION ?>. HTML convert time: <?php echo elapsedtime() ?> sec.
 </p>
 <p>
 本站所有非來自第三方的內容皆採用
 <a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh_TW">創用 CC 姓名標示-非商業性-相同方式分享 4.0 國際 授權條款</a> 授權.
 <i class="fab fa-creative-commons fa-fw"></i><i class="fab fa-creative-commons-by fa-fw"></i><i class="fab fa-creative-commons-nc fa-fw"></i><i class="fab fa-creative-commons-sa fa-fw"></i>
 </p>
</div>

</div>
</body>
</html>
