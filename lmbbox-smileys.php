<?php
/*
Plugin Name: LMB^Box Smileys
Plugin URI: http://aboutme.lmbbox.com/lmbbox-plugins/lmbbox-smileys/
Description: A Clickable Smilies hack for WordPress. Add, edit, remove, and manage the display of your smileys!
Version: 3.2 <img src="http://aboutme.lmbbox.com/plugins-updates.php?plugin=lmbbox-smileys&amp;version=3.2" alt="Checking For Updates ..." title="Checking For Updates ..." />
Author: Thomas Montague
Author URI: http://aboutme.lmbbox.com/
*/ 
/*
LMB^Box Smileys -> Was WP Smileys
version 3.2, 2005-10-25
By Thomas Montague

Orginial WP Grins By Alex King
http://www.alexking.org/software/wordpress/

This is an add-on for WordPress
http://wordpress.org/

LMB^Box Smileys Plugin is for the Bloging System WordPress (www.wordpress.org). It is an easy 
way to add better smiley support to wordpress. Wordpress has a smileys feature built in but it 
doesn't let you click a link or button to see all the smileys available to the user. Now LMB^Box 
Smileys does this and more! You can have LMB^Box Smileys add a button to the Comment Quicktags Menu 
bar (LMB^Box Comment Quicktags plugin) or you can manually add a link to the smiles to your 
comment.php theme file. Either way, once you click on the button/link, a new window will popup 
and display the smileys page. You can edit the smileys page to display only certain smileys or 
all (more on that in the Installation part below). Also the smileys have css styles set and you 
can add the css tags to your stylesheet to see the results. One last thing, you can add your 
OWN smileys that you make, have, or found! More info in the Installation part below.


== Installation  ==

1. Copy the folder lmbbox-smileys into your wp-content/plugins directory
2. Activate this plugin in the WordPress Admin Panel
	2.1 If upgrading from a previous version of LMB^Box Smileys, if there are any problems or errors displayed 
		(PHP) after activating the plugin, deactivate the plugin and you will be asked if you want to remove 
		your "LMB^Box Smileys Options Settings" and your "LMB^Box Smileys Lists and Management Settings." You 
		want to remove them both by click Ok/Yes on the confirm boxes that pops up. Then after WP's plugins page 
		loads again with plugin deactivated at the top, reactivate the LMB^Box Smileys Plugin and everything 
		should work fine.
	2.2 Note: These confirm boxes are new features that will allow you to remove settings stored in your WP 
		database if you wish to. These also allow you to save any info or settings that you have made by click 
		Cancel/No in the confirm boxes.


#### Additional Steps ####
3. if you want LMB^Box Smileys to automatically add itself to your comments page ....
	!!!YOU MUST HAVE LMB^Box COMMENT QUICKTAGS PLUS INSTALLED AND ACTIVATED!!!
	else you have to manually put a link into your comments page like so ...

		<?php echo '<a href="' . get_settings('siteurl') . '/wp-content/plugins/lmbbox-smileys/lmbbox-smileys-popup.php?action=comment" target="_blank" onClick="window.open(\'' . get_settings('siteurl') . '/wp-content/plugins/lmbbox-smileys/lmbbox-smileys-popup.php?action=comment\', \'smileys\', \'width=400,height=450,status=yes,resizable=yes,scrollbars=yes\'); return false;">Smileys</a>'; ?>

	and set "Add Button to Comment Quicktags Toolbar" in the LMB^Box Smileys Option Page to "No".
	3.1 If you want to have the smileys displayed in the Comment Form Area without there being a popup page,
		you will need to add this code somewhere in your comments.php theme file ...

			<?php if (function_exists('lmbbox_smileys_display')) { lmbbox_smileys_display(true); } ?>

		You will also need to set "Add Button to Comment Quicktags Toolbar" to "No". In order to 
		style the smileys that are displayed, follow step 5.2 below.


#### Customize Smileys Page Layout ####
4. To edit the layout and display of the smileys open the file lmbbox-smileys-popup.php and ... 

	At the bottom half of this file, there will be standard html with a php call in the body tags. You may edit 
	the look and layout of this part anyway you see fit. To display the smileys, you must call: 

		<?php if (function_exists('lmbbox_smileys_display')) { lmbbox_smileys_display(); } ?>

	where you want the smileys to be on the page.

	The function will output a div with a class of lmbbox_smileys. This is the main <div></div> to organize the 
	Smileys and the LMB^Box Smileys Title. After the div will be the javascript to add the Smileys to the post 
	or comment. If you have set "Display LMB^Box Smileys {VERSION} Title" to "Yes", then next will be a <h1></h1> 
	tag with the title. Lastly are the Smileys Titles and Smileys. If Smileys Title is set to be displayed in your 
	LMB^Box Smileys Options Page, then next will be a <h2></h2> tag with the Smileys Title. Finally a <span></span> 
	tag with class of lmbbox_smileys_span with img tags for all the Smileys. To set the styles for the page, go to 
	the bottom half of this file and you will see in the head tags where the style is set (read on!).


#### Styling the Smileys ####
5. To add styles to the Smileys Popup Page, open the lmbbox-smileys-popup.php and go to the bottom half to the page. 
	You will see some normal html code then a styles section. Add your styling there! To add styles to the Smiley 
	Button on the Comment Quicktags toolbar, read step 5.3. To add styles to the Smiley Button on the Admin Write 
	Pages Quicktags toolbar, read step 5.4. To add styles to the smiley images that are put in the posts or comments, 
	read step 5.5.


****** Styling the Smileys Page ******
	5.1 If you wish to style the Smileys Popup Page just add these to the lmbbox-smileys-popup.php file in the 
		lmbbox-smileys plugin folder:

body {
	margin: 10px 10px;
	padding: 0;
	background: #F2F2F2;
	color: #000000;
}
body, td {
	font: 10pt Georgia, "Times New Roman", Times, serif;
}
div.lmbbox_smileys {
	your style;
}
div.lmbbox_smileys a {
	color: #00019B;
	text-decoration: none;
}
div.lmbbox_smileys a:visited {
	color: #006;
}
div.lmbbox_smileys a:hover {
	text-decoration: underline;
	color: #069;
}
div.lmbbox_smileys h1 {
	margin: 10px 0px;
	font: normal 22px serif;
	color: #333333;
}
div.lmbbox_smileys h2 {
	margin: 10px 0px;
	border-bottom: 2px solid #69C;
	font: normal 20px serif;
	color: #333333;
}
div.lmbbox_smileys span.lmbbox_smileys_span {
	your style;
}

div.lmbbox_smileys span.lmbbox_smileys_span img {
	your style;
}


****** Styling the Smileys Page ******
	5.2 If you wish to style the Smileys displayed directly to your Comment Form area just add these to your 
		style.css file in your theme's folder:

---------------------- Smileys ---------------------------
div.lmbbox_smileys {
	your style;
}
div.lmbbox_smileys a {
	color: #00019B;
	text-decoration: none;
}
div.lmbbox_smileys a:visited {
	color: #006;
}
div.lmbbox_smileys a:hover {
	text-decoration: underline;
	color: #069;
}
div.lmbbox_smileys h1 {
	margin: 10px 0px;
	font: normal 22px serif;
	color: #333333;
}
div.lmbbox_smileys h2 {
	margin: 10px 0px;
	border-bottom: 2px solid #69C;
	font: normal 20px serif;
	color: #333333;
}
div.lmbbox_smileys span.lmbbox_smileys_span {
	your style;
}
div.lmbbox_smileys span.lmbbox_smileys_span img {
	your style;
}

		Note: If you want the smileys to be displayed in lines, the only way to achive this is by setting the 
			Smileys Display to "Display Without Title" in your LMB^Box Smileys Options Page. Because the actual
			Smileys images are within a <span></span> tag, they are displayed inline and not in blocks. But if 
			you have the Smileys Display set to "Display With Title", a <h2></h2> tag is before the <span></span> 
			and the <h2></h2> tag will insert a new line after it and this does not allow the Smileys to be 
			displayed in lines.


****** Styling the Toolbar ******
	5.3 If you wish to style the Smileys button created on the comment page, open your style.css stylesheet file 
		in your theme directory and add:

#comment_quicktags #ed_smileys {
	your style;
}

	5.4 If you wish to style the Smileys button created on the admin write pages, open wp-admin.css in 
		{root}/wp-admin/ folder, find "#ed_del" and add around it:

#ed_smileys {
	your style;
}


****** Styling Smiley Images in Posts and Comments ******
	5.5 If you wish to style the Smiley Images created in the posts and comments, open your style.css stylesheet 
		file in your theme directory and add:

img.lmbbox_smileys_img {
	your style;
}


#### Advanced Features ####
6. Adding your OWN Smileys to the Plugin! To add, edit, manage, and remove the Smileys Lists that are used, go to the 
	Management section of your admin contol panel and you will see a subpage named Manage LMB^Box Smileys. Go to this 
	page to do all actions of management of the Smileys Lists. To change the display settings for the Smiley List, go 
	to the LMB^Box Options Page to set which Smileys Lists are displayed and how. Also you can set if to use Smileys 
	in the comments of your blog, if to use the Comment Quicktags Toolbar from LMB^Box Comment Quicktags Toolbar, 
	and set the min. user levels to changes settings and manage Smileys Lists.

	6.1 LMB^Box Smileys plugin comes with 3 default Smileys Lists which are WP, TB and EE. They all can be found in 
		the 'smileys' folder within the 'lmbbox-smileys' plugin folder. LMB^Box Smileys adds Smileys Lists 
		automatically by checking the Smileys Images Directory that is set in the LMB^Box Smileys Lists Management 
		Page. On first install if there are no database settings set, than LMB^Box Smileys will sync up the Smileys 
		Images Directory with the database settings. To add your own Smileys or manage/edit/remove the default Smileys, 
		go to LMB^Box Smileys Lists Management Page and select your action in the displayed list. If you want to add 
		your own smileys, you must upload the Smileys Images to a folder within the Smileys Images Directory and give 
		that folder the Smileys List Abbr. that will be entered when adding the Smileys List (limit to 4 chars). Then 
		go to the LMB^Box Smileys Lists Management Page and select "Add a Smileys List." Then enter all the info for 
		the Smileys List and Smileys.
		
	6.2 To create your own Smileys List that will automatically load when ever LMB^Box Smileys plugin either has no 
		settings stored in the database or your select "Sync Smileys Lists" from the LMB^Box Smileys Lists Management 
		Page, follow these steps:

			Create a folder like you would if you were just adding a Smileys List by naming it what the Smileys List 
			Abbr. that will be entered when adding the Smileys List (limit to 4 chars). Then add all of your Smileys 
			Images and Disabled Smileys Images to this folder. Next copy 'smiley-list-config.php' file from any of 
			the other default Smileys Lists that are in your Smileys Images Directory, and paste it in your new Smileys 
			List folder. Open this file with either text editor or PHP editer (notepad, dreamweaver). Once you have 
			the file open, edit all of the settings in the file and customize the top comment to the name of your 
			Smileys List. Last thing to do is save the file and upload the folder to your Smileys Images Directory. 
			Then go to your LMB^Box Smileys Lists Management Page and select "Sync Smileys Lists" and click the button, 
			and don't forget to update the settings after the page reloads to save all changes!

		Now with this new feature you can distribute your Smileys List(s) if you wish :)

	6.3 To use Short Smileys Tags like ':)' or ':D', you would have to add them to a Smileys List and make sure 
		that none of the other Smileys List(s) had the same Short Smileys Tags. Now I've added a new abiltiy to auto-
		mate this process. Now on your LMB^Box Smileys Option page, you can set the Default Smileys List for both 
		the Admin Write Pages and the Comment Form. Doing so, will activate the Short Smileys Tags that are in the 
		Smileys List, so long as the Use Short Smileys Tags is enabled for the Smileys List. All Short Smileys Tags 
		take priority over any other Smileys Tags in that Smileys List, meaning that if you have any Short Smileys 
		Tags set and Use Short Smileys Tags is enabled, on the Smileys Popup page or the direct insert to the 
		Comment Form area Smileys will use the Short Smileys Tags on click/insert. Note: If you disable Short Smileys 
		Tags, then you maybe left with those Short Smileys Tags left unchanged in your posts. You can only have ONE 
		Smileys List set as the Default Smileys List for either the Admin Write Pages or Comment Form and in order 
		to make use of the Short Smileys Tags, the Smileys List must be displayed either with or without a title, 
		along with have Use Short Smileys Tags enabled.


#### Uninstallation ####
7. If you want to uninstall LMB^Box Comment Quicktags, just deactivate the plugin in your Plugins Page. 
	When you click on deactivate, you will be prompt to if to remove LMB^Box Comment Quicktags Settings. 
	Click Ok/Yes to remove settings or Cancel/No to keep settings.


== End of Installation ==
*/

// BEGIN - Class lmbbox_smileys_class
class lmbbox_smileys_class {
	var $version = '3.2';
	var $options;
	var $manage;
	var $admin_smileys;
	var $comment_smileys;
	var $dir_sep;

	function lmbbox_smileys_class () {
		// Setting Remove Activation
		if (strstr($_SERVER['PHP_SELF'], 'plugins.php') && $_GET['action'] == 'deactivate' && $_GET['plugin'] == 'lmbbox-smileys/lmbbox-smileys.php') { $this->remove(); }
		// Directory Seperator
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
			$this->dir_sep = '\\';
		} else {
			$this->dir_sep = '/';
		}
		// Here starts all of the default settings. DO NOT edit the settings here! 
		// Edit them in the LMB^Box Smileys Option page found under the options menu!
		$this->options = array (
			'min_user_level'					=> 7,
			'min_user_level_manage'				=> 5,
			'display_smileys_in_comments'		=> true,
			'use_comment_quicktags_toolbar'		=> true,
			'display_lmbbox_smileys_title'		=> true,
			'display_for_admin'					=> array(
													// false for no display, true for title display, and 2 for no title display
														'wp'	=> 1,
														'tb'	=> 1,
														'ee'	=> 1
													),
			'display_for_comment' 				=> array(
													// false for no display, true for title display, and 2 for no title display
														'wp'	=> 1,
														'tb'	=> 1,
														'ee'	=> 1
													),
			'default_smileys_list_admin' 		=> false,
			'default_smileys_list_comment' 		=> false
		);
		$this->manage = array(
			'smileys_path'				=> dirname(__FILE__) . $this->dir_sep . 'smileys' . $this->dir_sep,
			'smileys_url_path'			=> get_settings('siteurl') . '/wp-content/plugins/lmbbox-smileys/smileys/',
			'smileys_disabled_default'	=> 'disabled_default.gif',
			'smileys_disabled_prefix'	=> 'disabled_',
			'smileys_list'				=> array()
		);

		// Activate setting updates and get settings
		$this->get_smileys_options();
		if (isset($_POST['lmbbox_smileys_options_update'])) { $this->update_options(); }
		if (isset($_POST['lmbbox_smileys_manage_update'])) { $this->update_manage(); }
		$this->create_smileys();
	}

	// Setting removal code on deactivation of plugin!
	function remove() {
		switch ($_GET['smileys_remove']) {
			case 'options':
				delete_option('lmbbox_smileys_options');
				break;
			case 'manage':
				delete_option('lmbbox_smileys_manage');
				break;
			case 'both':
				delete_option('lmbbox_smileys_options');
				delete_option('lmbbox_smileys_manage');
				break;
			case 'none':
				break;
			default:
				echo 	'
						<script language="JavaScript" type="text/javascript">
						<!--
							var remove_options = confirm(\'Do you wish to remove your LMB^Box Smileys Options Settings?\');
							var remove_manage = confirm(\'Do you want to remove your LMB^Box Smileys Lists and Management Settings?\');
							if (remove_options && remove_manage) {
								window.location = \'plugins.php?action=deactivate&plugin=lmbbox-smileys/lmbbox-smileys.php&smileys_remove=both\';
							} else if (remove_options && !remove_manage) {
								window.location = \'plugins.php?action=deactivate&plugin=lmbbox-smileys/lmbbox-smileys.php&smileys_remove=options\';
							} else if (!remove_options && remove_manage) {
								window.location = \'plugins.php?action=deactivate&plugin=lmbbox-smileys/lmbbox-smileys.php&smileys_remove=manage\';
							} else if (!remove_options && !remove_manage) {
								window.location = \'plugins.php?action=deactivate&plugin=lmbbox-smileys/lmbbox-smileys.php&smileys_remove=none\';
							}
						//-->
						</script>
						';
				exit();
		}
	}

	// Get LMB^Box Smileys Settings
	function get_smileys_options() {
		if (get_option('lmbbox_smileys_options') && get_option('lmbbox_smileys_manage')) {
			$this->options = get_option('lmbbox_smileys_options');
			$this->manage = get_option('lmbbox_smileys_manage');
		} elseif (get_option('lmbbox_smileys_options') && !get_option('lmbbox_smileys_manage')) {
			$this->options = get_option('lmbbox_smileys_options');
			add_option('lmbbox_smileys_manage');
			$this->manage['smileys_list'] = $this->check_smileys_lists($this->manage['smileys_path'], $this->manage['smileys_disabled_prefix']);
			update_option('lmbbox_smileys_manage', $this->manage);

		} elseif (!get_option('lmbbox_smileys_options') && get_option('lmbbox_smileys_manage')) {
			add_option('lmbbox_smileys_options');
			update_option('lmbbox_smileys_options', $this->options);
			$this->manage = get_option('lmbbox_smileys_manage');
		} else {
			add_option('lmbbox_smileys_options');
			update_option('lmbbox_smileys_options', $this->options);
			add_option('lmbbox_smileys_manage');
			$this->manage['smileys_list'] = $this->check_smileys_lists($this->manage['smileys_path'], $this->manage['smileys_disabled_prefix']);
			update_option('lmbbox_smileys_manage', $this->manage);
		}
	}

	// Used to check for smileys lists that are in the smileys path
	function check_smileys_lists($path, $disabled_prefix) {
		if ($p_dir = opendir($path)) {
			while (false !== ($dir_name = readdir($p_dir))) {
				if ($dir_name != "." && $dir_name != ".." && is_dir($path . $dir_name) && is_file($path . $dir_name . $this->dir_sep . 'smileys-list-config.php')) { 
					include_once($path . $dir_name . $this->dir_sep . 'smileys-list-config.php');
					if ($smileys_list_info_data['load'] && $smileys_list_info_data['title'] != '' && ($smileys_list_info_data['abbr'] == $dir_name)) {
						$smileys_lists_update[$dir_name]['display'] = $smileys_list_info_data['display_order'];
						$smileys_lists_update[$dir_name]['title'] = $smileys_list_info_data['title'];
						$smileys_lists_update[$dir_name]['smileys'] = $smileys_list_info_data['smileys'];
						$smileys_lists_update[$dir_name]['use_smileys_short'] = $smileys_list_info_data['use_smileys_short'];
						$smileys_lists_update[$dir_name]['smileys_short'] = $smileys_list_info_data['smileys_short'];
						$smileys_lists_update[$dir_name]['disabled'] = $smileys_list_info_data['disabled'];
						$c_dir = opendir($path . $dir_name . $this->dir_sep);
						while (false !== ($c_file_name = readdir($c_dir))) {
							if ($c_file_name != "." && $c_file_name != ".." && $c_file_name != 'smileys-list-config.php' && !strstr($c_file_name, $disabled_prefix)) {
								if (!in_array($c_file_name, $smileys_lists_update[$dir_name]['smileys'])) {
									list($file_base_name, $file_ext) = explode(".", $c_file_name);
									$tag =  ':' . $file_base_name . '_' . $dir_name . ':';
									$smileys_lists_update[$dir_name]['smileys'][$tag] = $c_file_name;
								}
							}
						}
						closedir($c_dir);
					}
				}
			}
			closedir($p_dir);
			uasort($smileys_lists_update, 'lmbbox_smileys_sort');
			return $smileys_lists_update;
		} else { return false; }
	}

	// Update LMB^Box Smileys Options Settings
	function update_options() {
		$this->options = $_POST;
		unset($this->options['lmbbox_smileys_options_update']);
		unset($this->options['Submit']);
		update_option('lmbbox_smileys_options', $this->options);
	}

	// Update LMB^Box Smileys Manage Settings
	function update_manage() {
		$this->manage = $_POST;
		unset($this->manage['lmbbox_smileys_options_update']);
		unset($this->manage['select_smileys_list']);
		unset($this->manage['Submit']);
		$this->manage['smileys_path'] = (get_magic_quotes_gpc) ? stripslashes($this->manage['smileys_path']) : $this->manage['smileys_path'];
		$updated_smiles_list = $this->manage['smileys_list'];
		unset($this->manage['smileys_list']);
		$add_smiles_list = $this->manage['add_smileys_list'];
		unset($this->manage['add_smileys_list']);
		foreach ($updated_smiles_list as $which => $info) {
			$info['abbr'] = preg_replace('@[^0-9a-z\._/-]@i', '', $info['abbr']);
			if ($info['abbr'] != '' && $info['title'] != '' && !$info['remove']) {
				$this->manage['smileys_list'][$info['abbr']]['display'] = $info['display'];
				$this->manage['smileys_list'][$info['abbr']]['title'] = $info['title'];
				$this->manage['smileys_list'][$info['abbr']]['smileys'] = array();
				$this->manage['smileys_list'][$info['abbr']]['use_smileys_short'] = $info['use_smileys_short'];
				$this->manage['smileys_list'][$info['abbr']]['smileys_short'] = array();
				$this->manage['smileys_list'][$info['abbr']]['disabled'] = array('admin' => array(), 'comment' => array());
				foreach ($info['smileys'] as $tag_info) {
					if ($tag_info['tag'] != '' && $tag_info['img'] != '' && !$tag_info['remove']) {
						$this->manage['smileys_list'][$info['abbr']]['smileys'][$tag_info['tag']] = $tag_info['img'];
						if ($tag_info['disabled']['admin']) {
							$this->manage['smileys_list'][$info['abbr']]['disabled']['admin'][] = $tag_info['img'];
						}
						if ($tag_info['disabled']['comment']) {
							$this->manage['smileys_list'][$info['abbr']]['disabled']['comment'][] = $tag_info['img'];
						}
					}
				}
				foreach ($info['smileys_short'] as $tag_info) {
					if ($tag_info['tag'] != '' && $tag_info['img'] != '' && !$tag_info['remove']) {
						$this->manage['smileys_list'][$info['abbr']]['smileys_short'][$tag_info['tag']] = $tag_info['img'];
					}
				}
			}
		}
		$add_smiles_list['abbr'] = preg_replace('@[^0-9a-z\._/-]@i', '', $add_smiles_list['abbr']);
		if ($add_smiles_list['abbr'] != '' && $add_smiles_list['title'] != '') {
			$this->manage['smileys_list'][$add_smiles_list['abbr']]['display'] = $add_smiles_list['display'];
			$this->manage['smileys_list'][$add_smiles_list['abbr']]['title'] = $add_smiles_list['title'];
			$this->manage['smileys_list'][$add_smiles_list['abbr']]['smileys'] = array();
			$this->manage['smileys_list'][$add_smiles_list['abbr']]['use_smileys_short'] = $add_smiles_list['use_smileys_short'];
			$this->manage['smileys_list'][$add_smiles_list['abbr']]['smileys_short'] = array();
			$this->manage['smileys_list'][$add_smiles_list['abbr']]['disabled'] = array('admin' => array(), 'comment' => array());
			foreach ($add_smiles_list['smileys'] as $tag_info) {
				if ($tag_info['tag'] != '' && $tag_info['img'] != '') {
					$this->manage['smileys_list'][$add_smiles_list['abbr']]['smileys'][$tag_info['tag']] = $tag_info['img'];
				}
			}
			foreach ($add_smiles_list['smileys_short'] as $tag_info) {
				if ($tag_info['tag'] != '' && $tag_info['img'] != '') {
					$this->manage['smileys_list'][$add_smiles_list['abbr']]['smileys_short'][$tag_info['tag']] = $tag_info['img'];
				}
			}
		}
		uasort($this->manage['smileys_list'], 'lmbbox_smileys_sort');
		update_option('lmbbox_smileys_manage', $this->manage);
	}

	// Create Smileys array to search and replace Smileys Tags
	function create_smileys() {
		// Preset LMB^Box Smileys info arrays
		$this->admin_smileys = array('search' => array(), 'replace' => array());
		$this->comment_smileys = array('search' => array(), 'replace' => array());

		// Load new smileys info and generates smilies' search & replace arrays
		foreach ($this->manage['smileys_list'] as $smileys => $info) {
			// Admin Smileys
			if ($this->options['display_for_admin'][$smileys]) {
				// Add smileys_short before smileys to add short smileys tags for admin
				if ($this->options['default_smileys_list_admin'] == $smileys && $this->manage['smileys_list'][$smileys]['use_smileys_short']) {
					foreach ($info['smileys_short'] as $smiley => $img) {
						if (!in_array($img, $info['disabled']['admin'])) {
							$this->admin_smileys['search'][] = '/(^|\s)' . preg_quote($smiley) . '(\s|\W|$)/';
							$this->admin_smileys['replace'][] = '\\1<img class="lmbbox_smileys_img" src="' . $this->manage['smileys_url_path'] . $smileys . '/' . $img . '" alt="' . htmlspecialchars(trim($smiley) , ENT_QUOTES) . '" />\\2';
						}
					}
				}
				foreach ($info['smileys'] as $smiley => $img) {
					if (!in_array($img, $info['disabled']['admin'])) {
						$this->admin_smileys['search'][] = '/(^|\s)' . preg_quote($smiley) . '(\s|\W|$)/';
						$this->admin_smileys['replace'][] = '\\1<img class="lmbbox_smileys_img" src="' . $this->manage['smileys_url_path'] . $smileys . '/' . $img . '" alt="' . htmlspecialchars(trim($smiley) , ENT_QUOTES) . '" />\\2';
					}
				}
			}
			// Comment Smileys
			if ($this->options['display_for_comment'][$smileys]) {
				// Add smileys_short before smileys to add short smileys tags for comment
				if ($this->options['default_smileys_list_comment'] == $smileys && $this->manage['smileys_list'][$smileys]['use_smileys_short']) {
					foreach ($info['smileys_short'] as $smiley => $img) {
						if (!in_array($img, $info['disabled']['comment'])) {
							$this->comment_smileys['search'][] = '/(^|\s)' . preg_quote($smiley) . '(\s|\W|$)/';
							$this->comment_smileys['replace'][] = '\\1<img class="lmbbox_smileys_img" src="' . $this->manage['smileys_url_path'] . $smileys . '/' . $img . '" alt="' . htmlspecialchars(trim($smiley) , ENT_QUOTES) . '" />\\2';
						}
					}
				}
				foreach ($info['smileys'] as $smiley => $img) {
					if (!in_array($img, $info['disabled']['comment'])) {
						$this->comment_smileys['search'][] = '/(^|\s)' . preg_quote($smiley) . '(\s|\W|$)/';
						$this->comment_smileys['replace'][] = '\\1<img class="lmbbox_smileys_img" src="' . $this->manage['smileys_url_path'] . $smileys . '/' . $img . '" alt="' . htmlspecialchars(trim($smiley) , ENT_QUOTES) . '" />\\2';
					}
				}
			}
		}
	}

	// Get Smileys for Display in Popup or in Comment Forum Area
	function get_smileys_display($smileys, $path, $url, $disabled, $disabled_prefix, $disabled_default) {
		$output = '';
		$smiled = array();
		foreach ($smileys as $tag => $img) {
			if (!in_array($img, $smiled) && !in_array($img, $disabled)) {
				$smiled[] = $img;
				$tag = str_replace(' ', '', $tag);
				$output .= 	' <img src="' . $url . $img . '" alt="'. $tag .'" title="'. $tag .'" onclick="smileys(\''. $tag .'\');" /> ';
			} elseif (!in_array($img, $smiled) && in_array($img, $disabled)) {
				$smiled[] = $img;
				$tag = str_replace(' ', '', $tag);
				if (file_exists($path . $disabled_prefix . $img)) {
					$output .= 	' <img src="' . $url . $disabled_prefix . $img . '" alt="'. $tag .'" title="'. $tag .'" /> ';
				} else {
					$output .= 	' <img src="' . $url . $disabled_default . '" alt="'. $tag .'" title="'. $tag .'" /> ';
				} // End if disabled file_exists
			} // End if !in_array
		} // End foreach
		return $output;
	}

	// Start the Display of the Smileys, if popup == true than Smileys are output for use in Comment Form Area
	function display($direct_display = false) {
		$results = '<script language="JavaScript" type="text/javascript">
	<!--
		function smileys(tag) {
			tag = \' \' + tag;
			var my_field;
			if (document.getElementById(\'comment\') && document.getElementById(\'comment\').type == \'textarea\') {
				my_field = document.getElementById(\'comment\');
			} else if (window.opener.document.getElementById(\'content\') && window.opener.document.getElementById(\'content\').type == \'textarea\') {
				my_field = window.opener.document.getElementById(\'content\');
			} else if (window.opener.document.getElementById(\'comment\') && window.opener.document.getElementById(\'comment\').type == \'textarea\') {
				my_field = window.opener.document.getElementById(\'comment\');
			} else { return false; }
			if (document.selection) {
				my_field.focus();
				sel = window.opener.document.selection.createRange();
				sel.text = tag;
				my_field.focus();
			} else if (my_field.selectionStart || my_field.selectionStart == \'0\') {
				var startPos = my_field.selectionStart;
				var endPos = my_field.selectionEnd;
				var cursorPos = endPos;
				my_field.value = my_field.value.substring(0, startPos)
								+ tag
								+ my_field.value.substring(endPos, my_field.value.length);
				cursorPos += tag.length;
				my_field.focus();
				my_field.selectionStart = cursorPos;
				my_field.selectionEnd = cursorPos;
			} else {
				my_field.value += tag;
				my_field.focus();
			}
		}
	//-->
	</script>' . "\n";
		if ($this->options['display_lmbbox_smileys_title']) { $results .= '	<h1><a href="http://aboutme.lmbbox.com/lmbbox-plugins/lmbbox-smileys/" target="_blank" title="LMB^Box Smileys ' . $this->version . '">LMB^Box Smileys ' . $this->version . '</a> for WordPress</h1>' . "\n"; }
		if ($direct_display === true) {
			$which_display = 'comment';
			$which_smileys = $this->options['display_for_comment'];
		} else {
			$which_display = $_GET['lmbbox_smileys'];
			if ($which_display == 'admin' && get_settings('use_smilies')) {
			// Admin Write Pages Smileys
				$which_smileys = $this->options['display_for_admin'];
			} elseif ($which_display == 'comment' && get_settings('use_smilies') && $this->options['display_smileys_in_comments']) {
			// Comment Form Smileys
				$which_smileys = $this->options['display_for_comment'];
			} else { return 'Error: Smiley Page called incorrectly!' . "\n"; }
		}
		foreach ($which_smileys as $smileys => $display) {
			if ($display == 1) {
				$displayed = true;
				// Add smileys_short before Smileys to add Short Smileys Tags for Comment
				if ($this->options['default_smileys_list_' . $which_display] == $smileys && $this->manage['smileys_list'][$smileys]['use_smileys_short']) {
					$smileys_list = $this->manage['smileys_list'][$smileys]['smileys_short'] + $this->manage['smileys_list'][$smileys]['smileys'];
					$temp = $this->get_smileys_display($smileys_list, $this->manage['smileys_path'] . $smileys . '/', $this->manage['smileys_url_path'] . $smileys . '/', $this->manage['smileys_list'][$smileys]['disabled'][$which_display], $this->manage['smileys_disabled_prefix'], $this->manage['smileys_disabled_default']);
				} else {
					$temp = $this->get_smileys_display($this->manage['smileys_list'][$smileys]['smileys'], $this->manage['smileys_path'] . $smileys . '/', $this->manage['smileys_url_path'] . $smileys . '/', $this->manage['smileys_list'][$smileys]['disabled'][$which_display], $this->manage['smileys_disabled_prefix'], $this->manage['smileys_disabled_default']);
				}
				$results .= '	<h2>' . $this->manage['smileys_list'][$smileys]['title'] . '</h2><span class="lmbbox_smileys_span">' . $temp . '</span>' . "\n";
			} elseif ($display == 2) {
				$displayed = true;
				// Add smileys_short before Smileys to add Short Smileys Tags for Comment
				if ($this->options['default_smileys_list_' . $which_display] == $smileys && $this->manage['smileys_list'][$smileys]['use_smileys_short']) {
					$smileys_list = $this->manage['smileys_list'][$smileys]['smileys_short'] + $this->manage['smileys_list'][$smileys]['smileys'];
					$temp = $this->get_smileys_display($smileys_list, $this->manage['smileys_path'] . $smileys . '/', $this->manage['smileys_url_path'] . $smileys . '/', $this->manage['smileys_list'][$smileys]['disabled'][$which_display], $this->manage['smileys_disabled_prefix'], $this->manage['smileys_disabled_default']);
				} else {
					$temp = $this->get_smileys_display($this->manage['smileys_list'][$smileys]['smileys'], $this->manage['smileys_path'] . $smileys . '/', $this->manage['smileys_url_path'] . $smileys . '/', $this->manage['smileys_list'][$smileys]['disabled'][$which_display], $this->manage['smileys_disabled_prefix'], $this->manage['smileys_disabled_default']);
				}
				$results .= '	<span class="lmbbox_smileys_span">' . $temp . '</span>' . "\n";
			}
		}
		if ($displayed === true) {
			return $results;
		} else { return 'No Smileys Avalible! Contact the Admin to Activate the Smileys!' . "\n"; }
	}

	// Smileys Options Page
	function options_page() {
		if (isset($_POST['lmbbox_smileys_options_update'])) {
			echo '<div class="updated"><p><strong>LMB^Box Smileys Options Updated.</strong></p></div>';
		}
?>
	<div class="wrap">
	<h2>LMB^Box Smileys Options</h2>
	<form name="lmbbox_smileys_options" method="post">
	<input type="hidden" name="lmbbox_smileys_options_update" value="update" />
	<fieldset class="options">
	<table width="100%" cellspacing="2" cellpadding="5" class="editform">
      <tr>
        <th valign="top" scope="row">Minimum Level to Change LMB^Box Smileys Settings :</th>
        <td>
		  <select name="min_user_level">
<?php
		for ($i = 1; $i <= 10; $i++) {
			echo '<option value="' . $i . '" ';
			if ($this->options['min_user_level'] == $i) { echo 'selected '; }
			echo '>' . $i . '</option>';
		}
?>
		  </select>
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Minimum Level to Manage LMB^Box Smileys :</th>
        <td>
		  <select name="min_user_level_manage">
<?php
		for ($i = 1; $i <= 10; $i++) {
			echo '<option value="' . $i . '" ';
			if ($this->options['min_user_level_manage'] == $i) { echo 'selected '; }
			echo '>' . $i . '</option>';
		}
?>
		  </select>
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Display Smileys in Comments :</th>
        <td>
		  <label><input type="radio" name="display_smileys_in_comments" value="1" <?php if ($this->options['display_smileys_in_comments']) { echo 'checked '; } ?>/> Yes</label><br />
		  <label><input type="radio" name="display_smileys_in_comments" value="0" <?php if (!$this->options['display_smileys_in_comments']) { echo 'checked '; } ?>/> No</label><br />
          Allows you to decide if you want to disable Smileys display in all comments, but still have Smileys in your posts.
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Add Button to Comment Quicktags Toolbar :</th>
        <td>
		  <label><input type="radio" name="use_comment_quicktags_toolbar" value="1" <?php if ($this->options['use_comment_quicktags_toolbar']) { echo 'checked '; } ?>/> Yes</label><br />
		  <label><input type="radio" name="use_comment_quicktags_toolbar" value="0" <?php if (!$this->options['use_comment_quicktags_toolbar']) { echo 'checked '; } ?>/> No</label><br />
          Add buttons to the Comment Quicktags Toolbar in the Comment Form area. MUST have LMB^Box Comment Quicktags Plugin installed!
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Display "LMB^Box Smileys <?php echo $this->version; ?>" Title :</th>
        <td>
		  <label><input type="radio" name="display_lmbbox_smileys_title" value="1" <?php if ($this->options['display_lmbbox_smileys_title']) { echo 'checked '; } ?>/> Yes</label><br />
		  <label><input type="radio" name="display_lmbbox_smileys_title" value="0" <?php if (!$this->options['display_lmbbox_smileys_title']) { echo 'checked '; } ?>/> No</label><br />
          Add "LMB^Box Smileys <?php echo $this->version; ?>" Title to top of Smileys Lists Displays.
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Admin Write Pages Display Settings :</th>
        <td>Select which Smileys to display for the Admin Write Pages.<br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center">
			  <td>Smiley List Name</td>
			  <td>Don't Display</td>
			  <td>Display With Title</td>
			  <td>Display Without Title</td>
			</tr>
<?php
		foreach ($this->manage['smileys_list'] as $which => $info) {
?>
			<tr align="center">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" name="display_for_admin[<?php echo $which; ?>]" value="0" onClick="if (document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').value != 0) { document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').disabled = true; if (document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').checked) { document.getElementById('default_smileys_list_admin_none').click(); } }" <?php if ($this->options['display_for_admin'][$which] == 0) { echo 'checked '; } ?>/></td>
			  <td><input type="radio" name="display_for_admin[<?php echo $which; ?>]" value="1" onClick="if (document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').value != 0) { document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').disabled = false; }" <?php if ($this->options['display_for_admin'][$which] == 1) { echo 'checked '; } ?>/></td>
			  <td><input type="radio" name="display_for_admin[<?php echo $which; ?>]" value="2" onClick="if (document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').value != 0) { document.getElementById('default_smileys_list_admin_<?php echo $which; ?>').disabled = false; }" <?php if ($this->options['display_for_admin'][$which] == 2) { echo 'checked '; } ?>/></td>
			</tr>
<?php
		}
?>
		  </table>
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Admin Write Pages Default Smileys List :</th>
        <td>Select which Smileys List is Default Smileys List for the Admin Write Pages. Only the Default Smileys List will use its Short Smileys Tags! Only Smileys Lists that have Use Short Smileys enabled and are displayed in Admin Write Pages Display Settings will be shown (if you just changed the display settings, update the settings and the Smileys List will be shown).<br /><br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center">
			  <td>Smiley List Name</td>
			  <td>Set Default</td>
			</tr>
			<tr align="center">
			  <td>None!</td>
			  <td><input type="radio" id="default_smileys_list_admin_none" name="default_smileys_list_admin" value="0" <?php if (!$this->options['default_smileys_list_admin']) { echo 'checked '; } ?>/></td>
			</tr>
<?php
		foreach ($this->manage['smileys_list'] as $which => $info) {
			if ($this->manage['smileys_list'][$which]['use_smileys_short'] && $this->options['display_for_admin'][$which]) {
?>
			<tr align="center">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" id="default_smileys_list_admin_<?php echo $which; ?>" name="default_smileys_list_admin" value="<?php echo $which; ?>" <?php if ($lmbbox_smileys_options['default_smileys_list_admin'] == $which) { echo 'checked '; } ?>/></td>
			</tr>
<?php
			} elseif ($this->manage['smileys_list'][$which]['use_smileys_short'] && !$this->options['display_for_admin'][$which]) {
?>
			<tr align="center">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" id="default_smileys_list_admin_<?php echo $which; ?>" name="default_smileys_list_admin" value="<?php echo $which; ?>" <?php if ($this->options['default_smileys_list_admin'] == $which) { echo 'checked '; } ?> disabled /></td>
			</tr>
<?php
			} else {
?>
			<tr align="center" bgcolor="#D4D0C8">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" id="default_smileys_list_admin_<?php echo $which; ?>" name="default_smileys_list_admin" value="0" <?php if ($this->options['default_smileys_list_admin'] == $which) { echo 'checked '; } ?> disabled /></td>
			</tr>
<?php
			}
		}
?>
		  </table>
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Comment Form Display Settings :</th>
        <td>Select which Smileys to display for the Comment Form.<br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center">
			  <td>Smiley List Name</td>
			  <td>Don't Display</td>
			  <td>Display With Title</td>
			  <td>Display Without Title</td>
			</tr>
<?php
		foreach ($this->manage['smileys_list'] as $which => $info) {
?>
			<tr align="center">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" name="display_for_comment[<?php echo $which; ?>]" value="0" onClick="if (document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').value != 0) { document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').disabled = true; if (document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').checked) { document.getElementById('default_smileys_list_comment_none').click(); } }" <?php if ($this->options['display_for_comment'][$which] == 0) { echo 'checked '; } ?>/></td>
			  <td><input type="radio" name="display_for_comment[<?php echo $which; ?>]" value="1" onClick="if (document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').value != 0) { document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').disabled = false; }" <?php if ($this->options['display_for_comment'][$which] == 1) { echo 'checked '; } ?>/></td>
			  <td><input type="radio" name="display_for_comment[<?php echo $which; ?>]" value="2" onClick="if (document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').value != 0) { document.getElementById('default_smileys_list_comment_<?php echo $which; ?>').disabled = false; }" <?php if ($this->options['display_for_comment'][$which] == 2) { echo 'checked '; } ?>/></td>
			</tr>
<?php
		}
?>
		  </table>
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Comment Form Default Smileys List :</th>
        <td>Select which Smileys List is Default Smileys List for the Comment Form. Only the Default Smileys List will use its Short Smileys Tags! Only Smileys Lists that have Use Short Smileys enabled and are displayed in Comment Form Display Settings will be shown (if you just changed the display settings, update the settings and the Smileys List will be shown).<br /><br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center">
			  <td>Smiley List Name</td>
			  <td>Set Default</td>
			</tr>
			<tr align="center">
			  <td>None!</td>
			  <td><input type="radio" id="default_smileys_list_comment_none" name="default_smileys_list_comment" value="0" <?php if (!$this->options['default_smileys_list_comment']) { echo 'checked '; } ?>/></td>
			</tr>
<?php
		foreach ($this->manage['smileys_list'] as $which => $info) {
			if ($this->manage['smileys_list'][$which]['use_smileys_short'] && $this->options['display_for_comment'][$which]) {
?>
			<tr align="center">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" id="default_smileys_list_comment_<?php echo $which; ?>" name="default_smileys_list_comment" value="<?php echo $which; ?>" <?php if ($this->options['default_smileys_list_comment'] == $which) { echo 'checked '; } ?>/></td>
			</tr>
<?php
			} elseif ($this->manage['smileys_list'][$which]['use_smileys_short'] && !$this->options['display_for_comment'][$which]) {
?>
			<tr align="center">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" id="default_smileys_list_comment_<?php echo $which; ?>" name="default_smileys_list_comment" value="<?php echo $which; ?>" <?php if ($this->options['default_smileys_list_comment'] == $which) { echo 'checked '; } ?> disabled /></td>
			</tr>
<?php
			} else {
?>
			<tr align="center" bgcolor="#D4D0C8">
			  <td><?php echo $info['title']; ?></td>
			  <td><input type="radio" id="default_smileys_list_comment_<?php echo $which; ?>" name="default_smileys_list_comment" value="0" <?php if ($this->options['default_smileys_list_comment'] == $which) { echo 'checked '; } ?> disabled /></td>
			</tr>
<?php
			}
		}
?>
		  </table>
		</td>
      </tr>
    </table>
	</fieldset>
	<p class="submit"><input type="submit" name="Submit" value="Update Options &raquo;" /></p>
	</form> 
	</div>
<?php
	}

	// Smileys Management Page
	function manage_page() {
		if (isset($_POST['lmbbox_smileys_manage_update']) && !$_POST['sync_smileys']) {
			echo '<div class="updated"><p><strong>LMB^Box Smileys Management Updated.</strong></p></div>';
		} elseif (isset($_POST['lmbbox_smileys_manage_update']) && $_POST['sync_smileys']) {
			if ($smileys_lists_update = $this->check_smileys_lists($this->manage['smileys_path'], $this->manage['smileys_disabled_prefix'])) {
				$this->manage['smileys_list'] = $smileys_lists_update;
				echo '<div class="updated"><p><strong>Sync\'ed LMB^Box Smileys Lists, you must confirm the changes by clicking "Update Options &raquo;" at the bottom of the page!</strong></p></div>';
			} else {
				echo '<div class="updated"><p><strong>Sync\'ed LMB^Box Smileys Lists FAILED! There was some problem with openning the directory ...</strong></p></div>';
			}
		}
?>
	<script language="JavaScript" type="text/javascript">
	<!--
		function edit_smileys_display(field_id) {
			var select_smileys_list = document.lmbbox_smileys_manage.select_smileys_list;
			if (field_id) {
				for (var i = 1; i < select_smileys_list.length; i++) {
					if (select_smileys_list.options[i].value == field_id) {
						document.getElementById(select_smileys_list.options[i].value).style.display = '';
					} else {
						document.getElementById(select_smileys_list.options[i].value).style.display = 'none';
					}
				}
			} else {
				document.getElementById('loading').style.display = 'none';
				for (var i = 1; i < select_smileys_list.length; i++) {
					document.getElementById(select_smileys_list.options[i].value).style.display = 'none';
				}
			}
		}
		function switch_smiley_image(img_name, img_src, img_disabled, action) {
			if (action && img_name && img_disabled && document.images) {
				document.images[img_name].src = img_disabled;
			} else if (!action && img_name && img_src && document.images) {
				document.images[img_name].src = img_src;
			} else {
				alert('Error: Something went wrong swtiching the Smiley Image!');
			}
		}
	//-->
	</script>
	<div class="wrap">
	<h2>LMB^Box Smileys Management</h2>
	<form name="lmbbox_smileys_manage" method="post">
	<input type="hidden" name="lmbbox_smileys_manage_update" value="update" />
	<fieldset class="options">
	<table width="100%" cellspacing="2" cellpadding="5" class="editform">
      <tr>
        <th valign="top" scope="row">Directory Path to Smileys Images :</th>
        <td>
		  <input type="text" name="smileys_path" size="80" value="<?php echo $this->manage['smileys_path']; ?>" /><br />
		  Must end with a "/" OR "\" !
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Url Path to Smileys Images :</th>
        <td>
		  <input type="text" name="smileys_url_path" size="80" value="<?php echo $this->manage['smileys_url_path']; ?>" /><br />
		  Must end with a "/" OR "\" !
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Default Disabled Smiley Image :</th>
        <td>
		  <input type="text" name="smileys_disabled_default" value="<?php echo $this->manage['smileys_disabled_default']; ?>" /><br />
		  Used if no Disabled Smiley Image, using the Disabled Smileys Image Prefix, is found to display that the Smiley is not avaliable to use on the Smileys Popup Window.
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Disabled Smileys Image Prefix :</th>
        <td>
		  <input type="text" name="smileys_disabled_prefix" value="<?php echo $this->manage['smileys_disabled_prefix']; ?>" /><br />
		  Used to display that the Smiley is not avaliable to use on the Smileys Popup Window.
		</td>
      </tr>
      <tr>
        <th valign="top" scope="row">Edit Smileys Lists :</th>
        <td>Select which Smileys to edit.<br />
		  <select name="select_smileys_list" style="width: 300px" size="6" onChange="edit_smileys_display(this.value);">
			<option value="false" selected>Don't Bother with this</option>
			<option value="sync_smileys_list">Sync Smileys Lists</option>
			<option value="add_smileys_list">Add a Smiley List</option>
<?php
		foreach ($this->manage['smileys_list'] as $which => $info) {
			echo '<option value="edit_smileys_list_' . $which . '">' . $info['title'] . '</option>';
		}
?>
			</select>
		</td>
      </tr>
      <tr id="loading">
        <th valign="top" scope="row">LOADING Smileys Lists! Please Wait ...</th>
        <td>If you have many Smileys Lists with lots of Smileys, it may take some time for this page to load especially if you're on dial-up!</td>
	  </tr>
      <tr id="sync_smileys_list" style="display:none">
        <th valign="top" scope="row">Sync Smileys Lists to Smileys Images :</th>
        <td>
		  <input type="hidden" name="sync_smileys" value="" />
		  <input type="button" value="Sync Smileys Lists" onClick="if (confirm('You are about to sync up your Smileys Lists to all the Smileys Images in your smileys folder. Do you want to do this?')) { document.lmbbox_smileys_manage.sync_smileys.value = 'true'; document.lmbbox_smileys_manage.submit(); }" /><br />
		  If you want to automatically update the Smileys Lists to all the Smileys Images in the smileys folder, click this button! Warning: All current Smileys Lists will be over written and you must confirm the changes by clicking "Update Options &raquo;" at the bottom of the page!
		</td>
	  </tr>
      <tr id="add_smileys_list" style="display:none">
        <th valign="top" scope="row">Smileys Info :</th>
        <td>Create a New Smiley List below.<br />
		  Smileys List Name : <input type="text" name="add_smileys_list[title]" size="30" value="" /> Required! If blank, doesn't add Smiley List!
		  <br />
		  Smileys List Abbreviation : <input type="text" name="add_smileys_list[abbr]" size="6" value="" maxlength="4" /> Required, No Special Chars, Limit 4 Chars! If blank, doesn't add Smiley List!
		  <br />
		  Smileys List Display Order : <input type="text" name="add_smileys_list[display]" size="6" value="" maxlength="4" /> Use #'s to set Order of Display.
		  <br />
		  Use Short Smileys Tags for this Smileys List : <input type="checkbox" name="add_smileys_list[use_smileys_short]" value="true" /> Check to enable Short Smileys Tags for this Smileys List.
		  <br /><br />
		  Add Smileys to the list :
		  <br />
		  Column 1 : Add the Smiley's tag to a unique string (best to use ":tag:" format).
		  <br />
		  Column 2 : Add the Smiley's Image File Name.
		  <br />
		  Note : If you have some wide Smileys, put one every 7th Smiley to align them at the end of the table (this will display better, ex: ThunderBird Smileys).
		  <br /><br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center">
			  <td>Smiley Image Tag</td>
			  <td>Smiley Image File</td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][0][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][0][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][1][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][1][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][2][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][2][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][3][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][3][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][4][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][4][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][5][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][5][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys][6][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys][6][img]" size="30" value="" /></td>
			</tr>
		  </table>
		  <br /><br />
		  Add Short Smileys Tags to the list :
		  <br />
		  Column 1 : Add the Short Smiley's tag (best to use " :) " format, note the single space before and after the tag!).
		  <br />
		  Column 2 : Add the Smiley's Image File Name.
		  <br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center" valign="top">
			  <td colspan="5">Short Smileys Tags</td>
			</tr>
			<tr bgcolor="#CCCCCC" align="center" valign="top">
			  <td>Short Smiley Image Tag</td>
			  <td>Smiley Image File</td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys_short][0][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys_short][0][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys_short][1][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys_short][1][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys_short][2][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys_short][2][img]" size="30" value="" /></td>
			</tr>
		    <tr align="center">
			  <td><input type="text" name="add_smileys_list[smileys_short][3][tag]" size="15" value="" /></td>
			  <td><input type="text" name="add_smileys_list[smileys_short][3][img]" size="30" value="" /></td>
			</tr>
		  </table>



		</td>
      </tr>
<?php
		foreach ($this->manage['smileys_list'] as $which => $info) {
?>
      <tr id="edit_smileys_list_<?php echo $which; ?>" style="display:none">
        <th valign="top" scope="row">Smileys Info :</th>
        <td>Set the settings for <?php echo $info['title']; ?> below.<br />
		  Smileys List Name : <input type="text" name="smileys_list[<?php echo $which; ?>][title]" size="30" value="<?php echo $info['title']; ?>" /> Required! If blank, removes Smiley List!
		  <br />
		  Smileys List Abbreviation : <input type="text" name="smileys_list[<?php echo $which; ?>][abbr]" size="6" value="<?php echo $which; ?>" maxlength="4" /> Required, No Special Chars, Limit 4 Chars! If blank, removes Smiley List!
		  <br />
		  Smileys List Display Order : <input type="text" name="smileys_list[<?php echo $which; ?>][display]" size="6" value="<?php echo $info['display']; ?>" maxlength="4" /> Use #'s to set Order of Display.
		  <br />
		  Use Short Smileys Tags for this Smileys List : <input type="checkbox" name="smileys_list[<?php echo $which; ?>][use_smileys_short]" value="true" <?php if ($info['use_smileys_short']) { echo 'checked '; } ?>/> Check to enable Short Smileys Tags for this Smileys List.
		  <br />
		  Remove Smileys List : <input type="checkbox" name="smileys_list[<?php echo $which; ?>][remove]" value="true" /> Removes Smiley List!
		  <br /><br />
		  Edit the Smileys in the list :
		  <br />
		  Column 1-2 : Disable a Smiley on the Admin Write Pages Smiley Popup Page and in a post by checking that Smiley's Disabled Checkbox (Note: Smileys are disabled by their image and not their tag).
		  <br /><br />
		  Column 3-4 : Disable a Smiley on the Comment Form Smiley Popup Page and in a comment by checking that Smiley's Disabled Checkbox (Note: Smileys are disabled by their image and not their tag).
		  <br /><br />
		  Column 5 : What is displayed on the Add Smileys Popup Page.
		  <br />
		  Column 6 : Change the Smiley's tag to a unique string (best to use ":tag:" format).
		  <br />
		  Column 7 : Change the Smiley's Image File Name.
		  <br />
		  Column 8 : Remove the Smiley.
		  <br />
		  Note : If you have some wide Smileys, put one every 7th Smiley to align them at the end of the table (this will display better, ex: ThunderBird Smileys).
		  <br /><br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center" valign="top">
			  <td colspan="2">Disable Smiley for Admin Write Pages!</td>
			  <td colspan="2">Disable Smiley for Comment Form!</td>
			  <td>Smiley Image Tag</td>
			  <td>Smiley Image File</td>
			  <td>Remove Smiley!</td>
			</tr>
			<tr bgcolor="#CCCCCC" align="center" valign="top">
			  <td>Disable Smiley?</td>
			  <td>Smiley Image Displayed</td>
			  <td>Disable Smiley?</td>
			  <td>Smiley Image Displayed</td>
      		  <td bgcolor="#666666">&nbsp;</td>
      		  <td bgcolor="#666666">&nbsp;</td>
      		  <td bgcolor="#666666">&nbsp;</td>
			</tr>
<?php
			$i = 0;
			foreach ($info['smileys'] as $tag => $img) {
				if (!in_array($img, $info['disabled']['admin']) && !in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = false;
					$show_disabled_comment = false;
				} elseif (in_array($img, $info['disabled']['admin']) && !in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = true;
					$show_disabled_comment = false;
				} elseif (!in_array($img, $info['disabled']['admin']) && in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = false;
					$show_disabled_comment = true;
				} elseif (in_array($img, $info['disabled']['admin']) && in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = true;
					$show_disabled_comment = true;
				}
				if (file_exists($this->manage['smileys_path'] . $which . '/' . $this->manage['smileys_disabled_prefix'] . $img)) {
					$disabled_admin = $this->manage['smileys_url_path'] . $which . '/' . $this->manage['smileys_disabled_prefix'] . $img;
					$disabled_comment = $this->manage['smileys_url_path'] . $which . '/' . $this->manage['smileys_disabled_prefix'] . $img;
				} else {
					$disabled_admin = $this->manage['smileys_url_path'] . $this->manage['smileys_disabled_default'];
					$disabled_comment = $this->manage['smileys_url_path'] . $this->manage['smileys_disabled_default'];
				}
				$path_img = $this->manage['smileys_url_path'] . $which . '/' . $img;
				$switch_smiley_image_code_admin = '\'admin_' . $tag . '\', \'' . $path_img . '\', \'' . $disabled_admin . '\'';
				$switch_smiley_image_code_comment = '\'comment_' . $tag . '\', \'' . $path_img . '\', \'' . $disabled_comment . '\'';
?>
		    <tr align="center">
			  <td><input type="checkbox" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][disabled][admin]" value="true" onClick="switch_smiley_image(<?php echo $switch_smiley_image_code_admin; ?>, this.checked);" <?php if ($show_disabled_admin) { echo 'checked '; } ?>/></td>
			  <td><img name="admin_<?php echo $tag; ?>" src="<?php if ($show_disabled_admin) { echo $disabled_admin; } else { echo $path_img; } ?>" alt="<?php echo $tag; ?>" title="<?php echo $tag; ?>" /></td>
			  <td><input type="checkbox" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][disabled][comment]" value="true" onClick="switch_smiley_image(<?php echo $switch_smiley_image_code_comment; ?>, this.checked);" <?php if ($show_disabled_comment) { echo 'checked '; } ?>/></td>
			  <td><img name="comment_<?php echo $tag; ?>" src="<?php if ($show_disabled_comment) { echo $disabled_comment; } else { echo $path_img; } ?>" alt="<?php echo $tag; ?>" title="<?php echo $tag; ?>" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][tag]" size="15" value="<?php echo $tag; ?>" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][img]" size="30" value="<?php echo $img; ?>" /></td>
			  <td><input type="checkbox" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][remove]" value="true" /></td>
			</tr>
<?php
				$i++;
			}
?>
		    <tr align="center">
			  <td>Add Me First!</td>
			  <td><img alt="Coming Soon!" /></td>
			  <td>Add Me First!</td>
			  <td><img alt="Coming Soon!" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][tag]" size="15" value="" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i; ?>][img]" size="30" value="" /></td>
			  <td>Nope!</td>
			</tr>
		    <tr align="center">
			  <td>Add Me First!</td>
			  <td><img alt="Coming Soon!" /></td>
			  <td>Add Me First!</td>
			  <td><img alt="Coming Soon!" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i + 1; ?>][tag]" size="15" value="" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys][<?php echo $i + 1; ?>][img]" size="30" value="" /></td>
			  <td>Nope!</td>
			</tr>
		  </table>
		  <br /><br />
		  Edit Short Smileys Tags in the list :
		  <br />
		  Column 1 : Smiley Image Displayed in Admin Write Pages.
		  <br />
		  Column 2 : Smiley Image Displayed in Comment Form.
		  <br />
		  Column 3 : Add the Short Smiley's tag (best to use " :) " format, note the single space before and after the tag!).
		  <br />
		  Column 4 : Add the Smiley's Image File Name.
		  <br />
		  Column 5 : Remove the Smiley.
		  <br />
		  <table cellspacing="0" cellpadding="3" border="1" class="editform">
		    <tr bgcolor="#CCCCCC" align="center" valign="top">
			  <td colspan="5">Short Smileys Tags</td>
			</tr>
			<tr bgcolor="#CCCCCC" align="center" valign="top">
			  <td>Smiley Image Displayed for Admin Write Pages</td>
			  <td>Smiley Image Displayed for Comment Form</td>
			  <td>Short Smiley Image Tag</td>
			  <td>Smiley Image File</td>
			  <td>Remove Smiley!</td>
			</tr>
<?php
			$i = 0;
			foreach ($info['smileys_short'] as $tag => $img) {
				if (!in_array($img, $info['disabled']['admin']) && !in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = false;
					$show_disabled_comment = false;
				} elseif (in_array($img, $info['disabled']['admin']) && !in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = true;
					$show_disabled_comment = false;
				} elseif (!in_array($img, $info['disabled']['admin']) && in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = false;
					$show_disabled_comment = true;
				} elseif (in_array($img, $info['disabled']['admin']) && in_array($img, $info['disabled']['comment'])) {
					$show_disabled_admin = true;
					$show_disabled_comment = true;
				}
				if (file_exists($this->manage['smileys_path'] . $which . '/' . $this->manage['smileys_disabled_prefix'] . $img)) {
					$disabled_admin = $this->manage['smileys_url_path'] . $which . '/' . $this->manage['smileys_disabled_prefix'] . $img;
					$disabled_comment = $this->manage['smileys_url_path'] . $which . '/' . $this->manage['smileys_disabled_prefix'] . $img;
				} else {
					$disabled_admin = $this->manage['smileys_url_path'] . $this->manage['smileys_disabled_default'];
					$disabled_comment = $this->manage['smileys_url_path'] . $this->manage['smileys_disabled_default'];
				}
				$path_img = $this->manage['smileys_url_path'] . $which . '/' . $img;
?>
		    <tr align="center">
			  <td><img src="<?php if ($show_disabled_admin) { echo $disabled_admin; } else { echo $path_img; } ?>" alt="<?php echo $tag; ?>" title="<?php echo $tag; ?>" /></td>
			  <td><img src="<?php if ($show_disabled_comment) { echo $disabled_comment; } else { echo $path_img; } ?>" alt="<?php echo $tag; ?>" title="<?php echo $tag; ?>" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i; ?>][tag]" size="15" value="<?php echo $tag; ?>" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i; ?>][img]" size="30" value="<?php echo $img; ?>" /></td>
			  <td><input type="checkbox" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i; ?>][remove]" value="true" /></td>
			</tr>
<?php
				$i++;
			}
?>
		    <tr align="center">
			  <td><img alt="Coming Soon!" /></td>
			  <td><img alt="Coming Soon!" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i; ?>][tag]" size="15" value="" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i; ?>][img]" size="30" value="" /></td>
			  <td>Nope!</td>
			</tr>
		    <tr align="center">
			  <td><img alt="Coming Soon!" /></td>
			  <td><img alt="Coming Soon!" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i + 1; ?>][tag]" size="15" value="" /></td>
			  <td><input type="text" name="smileys_list[<?php echo $which; ?>][smileys_short][<?php echo $i + 1; ?>][img]" size="30" value="" /></td>
			  <td>Nope!</td>
			</tr>
		  </table>
		</td>
      </tr>
<?php
		}
?>
    </table>
	</fieldset>
	<p class="submit"><input type="submit" name="Submit" value="Update Options &raquo;" /></p>
	</form> 
	</div>
	<script language="JavaScript" type="text/javascript">edit_smileys_display(false);</script>
<?php
	}
}
// END - Class lmbbox_smileys_class

// BEGIN - Additional Functions
// Used to sort the smileys_list array in lmbbox_smileys_manage array
function lmbbox_smileys_sort($a, $b) {
	if ($a['display'] == $b['display']) {
		return 0;
	} else {
		return ($a['display'] < $b['display']) ? -1 : 1;
	}
}

// Admin Smileys Convert Function
function lmbbox_smileys_admin_convert($text) {
	global $lmbbox_smileys;
	return preg_replace($lmbbox_smileys->admin_smileys['search'], $lmbbox_smileys->admin_smileys['replace'], $text);
}
// Comment Smileys Convert Function
function lmbbox_smileys_comment_convert($text) {
	global $lmbbox_smileys;
	return preg_replace($lmbbox_smileys->comment_smileys['search'], $lmbbox_smileys->comment_smileys['replace'], $text);
}

// Insert LMB^Box Smileys Button for Admin
function lmbbox_insert_smileys() {
?>
	<!-- BEGIN - LMB^Box Smileys Javascript //-->
	<script language="JavaScript" type="text/javascript">
	<!--
		document.getElementById('ed_toolbar').innerHTML += '<input type="button" class="ed_button" id="ed_smileys" value="Smileys" onclick="window.open(\'<?php echo get_settings('siteurl'); ?>/wp-content/plugins/lmbbox-smileys/lmbbox-smileys-popup.php?lmbbox_smileys=admin\', \'smileys\', \'width=400,height=450,status=yes,resizable=yes,scrollbars=yes\');" />';
	//-->
	</script>
	<!-- END - LMB^Box Smileys Javascript //-->
<?php
}
// Insert LMB^Box Smileys Button for Comments
function lmbbox_insert_smileys_comments() {
?>
	<!-- BEGIN - LMB^Box Smileys Javascript //-->
	<script language="JavaScript" type="text/javascript">
	<!--
		document.getElementById('ed_comment_toolbar').innerHTML += '<input type="button" class="ed_button" id="ed_smileys" value="Smileys" onclick="window.open(\'<?php echo get_settings('siteurl'); ?>/wp-content/plugins/lmbbox-smileys/lmbbox-smileys-popup.php?lmbbox_smileys=comment\', \'smileys\', \'width=400,height=450,status=yes,resizable=yes,scrollbars=yes\');" />';
	//-->
	</script>
	<!-- END - LMB^Box Smileys Javascript //-->
<?php
}
// Insert LMB^Box Smileys Button for Comments Edit Admin
function lmbbox_insert_smileys_comments_edit() {
?>
	<!-- BEGIN - LMB^Box Smileys Javascript //-->
	<script language="JavaScript" type="text/javascript">
	<!--
		document.getElementById('ed_toolbar').innerHTML += '<input type="button" class="ed_button" id="ed_smileys" value="Smileys" onclick="window.open(\'<?php echo get_settings('siteurl'); ?>/wp-content/plugins/lmbbox-smileys/lmbbox-smileys-popup.php?lmbbox_smileys=comment\', \'smileys\', \'width=400,height=450,status=yes,resizable=yes,scrollbars=yes\');" />';
	//-->
	</script>
	<!-- END - LMB^Box Smileys Javascript //-->
<?php
}

// Add LMB^Box Smileys Options Page
function lmbbox_add_smileys_options_page() {
	global $lmbbox_smileys;
	// add_options_page Function Call Back
	function lmbbox_smileys_options_page() {
		global $lmbbox_smileys;
		$lmbbox_smileys->options_page();
	}
	add_options_page('LMB^Box Smileys', 'LMB^Box Smileys', $lmbbox_smileys->options['min_user_level'], 'lmbbox-smileys/lmbbox-smileys.php', 'lmbbox_smileys_options_page');
}
// Add LMB^Box Smileys Management Page
function lmbbox_add_smileys_manage_page() {
	global $lmbbox_smileys;
	// add_management_page Function Call Back
	function lmbbox_smileys_manage_page() {
		global $lmbbox_smileys;
		$lmbbox_smileys->manage_page();
	}
	add_management_page('LMB^Box Smileys Lists', 'LMB^Box Smileys Lists', $lmbbox_smileys->options['min_user_level_manage'], 'lmbbox-smileys/lmbbox-smileys.php', 'lmbbox_smileys_manage_page');
}

// LMB^Box Smileys Display Function!
function lmbbox_smileys_display($direct_display = false) {
	global $lmbbox_smileys;
?>
<!-- BEGIN - LMB^Box Smileys Display //-->
<div class="lmbbox_smileys">
	<?php echo $lmbbox_smileys->display($direct_display); ?>
</div>
<!-- END - LMB^Box Smileys Display //-->
<?php
}
// END - Additional Functions

// BEGIN - LMB^Box Smileys Activation Calls
if (get_settings('use_smilies')) {
	$lmbbox_smileys = new lmbbox_smileys_class;

	// Admin Smileys
	remove_filter('the_content', 'convert_smilies');
	remove_filter('the_excerpt', 'convert_smilies');
	add_filter('the_content', 'lmbbox_smileys_admin_convert', 1);
	add_filter('the_excerpt', 'lmbbox_smileys_admin_convert', 1);
	
	// Comment Smileys
	remove_filter('comment_text', 'convert_smilies', 20);
	if ($lmbbox_smileys->options['display_smileys_in_comments']) { add_filter('comment_text', 'lmbbox_smileys_comment_convert', 1); }

	// Add 'Smileys' Quicktag Buttons for Admin and Comments
	add_action('simple_edit_form', 'lmbbox_insert_smileys');
	add_action('edit_form_advanced', 'lmbbox_insert_smileys');
	add_action('edit_page_form', 'lmbbox_insert_smileys');
	if ($lmbbox_smileys->options['display_smileys_in_comments'] && $lmbbox_smileys->options['use_comment_quicktags_toolbar']) { add_action('comment_form', 'lmbbox_insert_smileys_comments'); }
	// I really don't like doing this, but until they add a edit_comment_form action, I'll just have to add 
	// the button this way to the edit comment page
	if ($lmbbox_smileys->options['display_smileys_in_comments'] && strstr($_SERVER['PHP_SELF'], 'post.php') && $_GET["action"] == 'editcomment') {
		add_action('admin_footer', 'lmbbox_insert_smileys_comments_edit');
	}

	// Add Options and Management Pages
	add_action('admin_menu', 'lmbbox_add_smileys_options_page');
	add_action('admin_menu', 'lmbbox_add_smileys_manage_page');
}
// END - LMB^Box Smileys Activation Calls

?>
