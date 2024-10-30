<?php
//
// Config Me!
//
$smileys_list = 'ee'; // The Smiley List you want to create config file for
$sql_file = 'test.sql'; // DB SQL Backup file
$table_prefix = 'wp_'; // Your DB Table Prefix, look in your wp-config.php file

//
// Start the real stuff!
//
$sql = file_get_contents($sql_file);

preg_match('@INSERT INTO `' . $table_prefix . 'options` VALUES \([\d]+, [\d]+, \'lmbbox_smileys_manage\', \'Y\', [\d]+, \'([^\']+)\', [\d]+, [\d]+, \'\', [\d]+, \'yes\'\);@', $sql, $smileys);
$smileys = unserialize(stripslashes($smileys[1]));
$smileys = $smileys['smileys_list'][$smileys_list];

// Create config file
$config_file = "<?php
// Smileys List Config File for $smileys_list

// if to load Smileys List, must be true or false
\$smileys_list_info_data['load'] = true;

// display order of Smileys List, 0 is first displayed
\$smileys_list_info_data['display_order'] = {$smileys['display']};

// title of Smileys List, must be something
\$smileys_list_info_data['title'] = '{$smileys['title']}';

// abbr. of Smileys List, must be something -> should be no more than 4 letter abbr
// has to be the same as the Smileys List Folder's Name!
\$smileys_list_info_data['abbr'] = '$smileys_list';

// Smileys of this Smileys List
// enter the Smiley Code and Smiley Image File Name below
\$smileys_list_info_data['smileys'] = array(
										//	Smiley Code					Image Name\n";
if (!empty($smileys['smileys'])) {
	foreach($smileys['smileys'] as $tag => $img) {
		$config_file .= "											'$tag' 			=> '$img',\n";
	}
	$config_file = substr($config_file, 0, strlen($config_file) - 2);
}
$config_file .= "\n										);

// Short Smileys Tags of this Smileys List
// you can add short smileys tags to be added which is recommended but not required!
// you need to edit the next line to be either true if there are short smileys tags or false if none!
// you can disabled any short smileys tags that are listed by setting the next line to false also!
\$smileys_list_info_data['use_smileys_short'] = {$smileys['use_smileys_short']};
// enter the Short Smiley Code and Smiley Image File Name below
\$smileys_list_info_data['smileys_short'] = array(
										//	Short Smiley Code		Image Name\n";
if (!empty($smileys['smileys_short'])) {
	foreach($smileys['smileys_short'] as $tag => $img) {
		$config_file .= "												'$tag' 		=> '$img',\n";
	}
	$config_file = substr($config_file, 0, strlen($config_file) - 2);
}
$config_file .= "\n										);

// disabled Smileys of Smileys List
// add like this -> array('image_file_name', 'image_file_name')
// make sure that the last entry is not followed by a ','
// Admin Write Pages Disabled Smileys Images
\$smileys_list_info_data['disabled']['admin'] = array(";
if (!empty($smileys['disabled']['admin'])) {
	foreach($smileys['disabled']['admin'] as $tag) { $config_file .= "$tag, "; }
	$config_file = substr($config_file, 0, strlen($config_file) - 2);
}
$config_file .= ");
// Comment Form Disabled Smileys Images
\$smileys_list_info_data['disabled']['comment'] = array(";
if (!empty($smileys['disabled']['comment'])) {
	foreach($smileys['disabled']['comment'] as $tag) { $config_file .= "$tag, "; }
	$config_file = substr($config_file, 0, strlen($config_file) - 2);
}
$config_file .= ");

?>";

exit ((file_put_contents('smileys-list-config.php', $config_file) !== false) ? 'Writing File - DONE!' : 'Writing File - FAILED!<br /><textarea readonly="readonly" cols="70" rows="30" onclick="this.select();" onfocus="this.select();">' . $config_file . '</textarea>');


/* Restore settings ...
switch ($restore_what) {
	case 'all':
		echo '<pre>';
		if (preg_match('@INSERT INTO `wp_options` VALUES \([\d]+, [\d]+, \'lmbbox_smileys_options\', \'Y\', [\d]+, \'([^\']+)\', [\d]+, [\d]+, \'\', [\d]+, \'yes\'\);@', $sql, $options)) {
			print_r(unserialize($options[1]));
		} else { echo 'ERROR! Options failed to restore!'; }
		if (preg_match('@INSERT INTO `wp_options` VALUES \([\d]+, [\d]+, \'lmbbox_smileys_manage\', \'Y\', [\d]+, \'([^\']+)\', [\d]+, [\d]+, \'\', [\d]+, \'yes\'\);@', $sql, $manage)) {
			print_r(unserialize($manage[1]));
		} else { echo 'ERROR! Manage failed to restore!'; }
		echo '</pre>';
		break;
	case 'options':
		echo '<pre>';
		if (preg_match('@INSERT INTO `wp_options` VALUES \([\d]+, [\d]+, \'lmbbox_smileys_options\', \'Y\', [\d]+, \'([^\']+)\', [\d]+, [\d]+, \'\', [\d]+, \'yes\'\);@', $sql, $options)) {
			print_r(unserialize($options[1]));
		} else { echo 'ERROR! Options failed to restore!'; }
		echo '</pre>';
		break;
	case 'manage':
		echo '<pre>';
		if (preg_match('@INSERT INTO `wp_options` VALUES \([\d]+, [\d]+, \'lmbbox_smileys_manage\', \'Y\', [\d]+, \'([^\']+)\', [\d]+, [\d]+, \'\', [\d]+, \'yes\'\);@', $sql, $manage)) {
			print_r(unserialize($manage[1]));
		} else { echo 'ERROR! Manage failed to restore!'; }
		echo '</pre>';
		break;
	case 'NULL':
	default:
		echo 'Do not do anything';
		break;
}
*/


?>
