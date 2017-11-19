<?php

if (function_exists('register_sidebar')) {
	register_sidebar(array('name' => 'Sidebar 1'));
	register_sidebar(array('name' => 'Sidebar 2'));
}

function industria_add_theme_page() {

	if ($_GET['page'] == basename(__FILE__)) {
		if      ('save' == $_REQUEST['action']) {
			update_option('industria_ShowAuthor', $_REQUEST[ 'set_ShowAuthor' ] );
			header("Location: themes.php?page=functions.php&saved=true");
			die;
		} 
            else if ('reset' == $_REQUEST['action']) {
			delete_option( 'industria_ShowAuthor' );			
			header("Location: themes.php?page=functions.php&reset=true");
			die;
		}
	}

      add_theme_page("Industria Theme Options", "Theme Options", 'edit_themes', basename(__FILE__), 'industria_theme_page');
}

function industria_theme_page() {
	if ( $_REQUEST['saved'] ) 
        echo '<div id="message" class="updated fade"><p><strong>Settings saved.</strong></p></div>';
	if ( $_REQUEST['reset'] ) 
        echo '<div id="message" class="updated fade"><p><strong>Settings reset.</strong></p></div>';
?>

<div class="wrap">
<form method="post">

<p>Show Author:
<?php
     $value = get_settings( 'industria_ShowAuthor' );
     echo "<select name=\"set_ShowAuthor\" style=\"width:200px;\">";
     
     $selected = "";
     if ($value == "true") $selected = "selected=\"true\"";
     echo "<option value=\"true\" $selected >Yes</option>";

     $selected = "";
     if ($value == "false") $selected = "selected=\"true\"";
     echo "<option value=\"false\" $selected >No</option>";
     echo "</select>";
?>
</p>

<p class="submit"><input type="submit" name="save" value="Save Settings"></p>
<input type="hidden" name="action" value="save" />
</form>
</div><!--wrap-->
<?php
}

add_action('admin_menu', 'industria_add_theme_page');

?>