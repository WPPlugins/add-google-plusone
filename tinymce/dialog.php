<?php
$wp_include = "../wp-load.php";
$i = 0;
while (!file_exists($wp_include) && $i++ < 10) {
  $wp_include = "../$wp_include";
}

// let's load WordPress
require($wp_include);


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Google+1 Shortcode Panel</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo ON_GOOGLE1_URL; ?>tinymce/tinymce.js"></script>
</head>
<body id="link" style="display: none">
<form name="on_tabs" action="#">
	<div class="tabs">
	</div>
	
	<div class="panel_wrapper">
		<!-- gallery panel -->
		<div id="onshortcode_panel" class="panel current">
                    <br />

                    <table border="0" cellpadding="4" cellspacing="0">
                     <tr>
                        <td nowrap="nowrap"><label for="onsc_size"><?php _e("Select size:"); ?></label></td>
                        <td>
                            <select id="onsc_size" name="onsc_size">
                                <option value=""><?php _e('Standard'); ?></option>
                                <option value=" size=small"><?php _e('Small'); ?></option>
                                <option value=" size=medium"><?php _e('Medium'); ?></option>
                                <option value=" size=tall"><?php _e('Tall'); ?></option>
                            </select>
                        </td>
                      </tr>
                     <tr>
                        <td nowrap="nowrap"><label for="onsc_count"><?php _e("Display count +1:"); ?></label></td>
                        <td>
                            <select id="onsc_count" name="onsc_count">
                                <option value=""><?php _e('Yes'); ?></option>
                                <option value=" count=false"><?php _e('No'); ?></option>
                            </select>
                        </td>
                      </tr>
                     <tr>
                        <td nowrap="nowrap"><label for="onsc_url"><?php _e("Entry Custom URL:"); ?></label></td>
                        <td>
                            <input type="text" id="onsc_url" name="onsc_url"/>
                        </td>
                      </tr>
                     <tr>
                        <td nowrap="nowrap"><label for="onsc_callback"><?php _e("Entry Callback:"); ?></label></td>
                        <td>
                            <input type="text" id="onsc_callback" name="onsc_callback"/>
                        </td>
                      </tr>

                    </table>

		</div>
		
	</div>
		
	
	</div>

	<div class="mceActionPanel">
		<div style="float: left">
			<input type="button" id="cancel" name="cancel" value="Cancel" onClick="tinyMCEPopup.close();" />
		</div>

		<div style="float: right">
			<input type="submit" id="insert" name="insert" value="Insert" onClick="onshortcodesubmit();" />
		</div>
	</div>
</form>
</body>