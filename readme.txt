=== LMB^Box Smileys ===
Contributors: lmbbox
Donate link: 
Tags: Smileys, Quicktags, Button
Requires at least: 2.3.2
Tested up to: 2.3.2
Stable tag: 3.2

A Clickable Smilies hack for WordPress. Add, edit, remove, and manage the display of your smileys!

== Description ==

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

== Installation ==

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

/* Body style for Smileys Page */
body {
	margin: 10px 10px;
	padding: 0;
	background: #F2F2F2;
	color: #000000;
}
body, td {
	font: 10pt Georgia, "Times New Roman", Times, serif;
}
/* Main Div for Smileys Page */
div.lmbbox_smileys {
	/* your style; */
}
/* Link Styles for Smileys Page */
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
/* <h1> style -> used for Main Page Heading */
div.lmbbox_smileys h1 {
	margin: 10px 0px;
	font: normal 22px serif;
	color: #333333;
}
/* <h2> style -> used for Smileys Heading */
div.lmbbox_smileys h2 {
	margin: 10px 0px;
	border-bottom: 2px solid #69C;
	font: normal 20px serif;
	color: #333333;
}
/* Main Span for Smileys Output */
div.lmbbox_smileys span.lmbbox_smileys_span {
	/* your style; */
}
/* And anything in the span */
div.lmbbox_smileys span.lmbbox_smileys_span img {
	/* your style; */
}


****** Styling the Smileys Page ******
	5.2 If you wish to style the Smileys displayed directly to your Comment Form area just add these to your 
		style.css file in your theme's folder:

/*---------------------- Smileys ---------------------------*/
/* Main Div for Smileys Page */
div.lmbbox_smileys {
	/* your style; */
}
/* Link Styles for Smileys Page */
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
/* <h1> style -> used for Main Page Heading */
div.lmbbox_smileys h1 {
	margin: 10px 0px;
	font: normal 22px serif;
	color: #333333;
}
/* <h2> style -> used for Smileys Heading */
div.lmbbox_smileys h2 {
	margin: 10px 0px;
	border-bottom: 2px solid #69C;
	font: normal 20px serif;
	color: #333333;
}
/* Main Span for Smileys Output */
div.lmbbox_smileys span.lmbbox_smileys_span {
	/* your style; */
}
/* And anything in the span */
div.lmbbox_smileys span.lmbbox_smileys_span img {
	/* your style; */
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
	/* your style; */
}

	5.4 If you wish to style the Smileys button created on the admin write pages, open wp-admin.css in 
		{root}/wp-admin/ folder, find "#ed_del" and add around it:

#ed_smileys {
	/* your style; */
}


****** Styling Smiley Images in Posts and Comments ******
	5.5 If you wish to style the Smiley Images created in the posts and comments, open your style.css stylesheet 
		file in your theme directory and add:

img.lmbbox_smileys_img {
	/* your style; */
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

== Frequently Asked Questions ==

= Do I really need to use this plugin? =

You don't HAVE to have this plugin, but then you'd be left with only the default 
smileys that WordPress has and without a way to see which smileys there are. WP 
Smileys is great for any user of WordPress and ALL of your guests that want to use 
smileys but don't know the default tags like :D to display in comments.

== Screenshots ==

1. Admin Write
2. Comment Section Form
3. Admin Management Page
4. Admin Options Page

== Change Log ==


	= 3.2 =

	Fixed Some Minor Code.
	Updated Code/Layout.
	Updated Styles.
	Fixed Any Validation Problems, Now Validates XHTML 1.0 Transitional.
	Added Plugin Version Notifier.

	= 3.1 =

	Reworked some more of the plugin code.
	Optimized plugin code.
	Fixed magic_quotes adding '\' to Smileys Images Directory Path.
	NOTE: Function call has changed! Make sure you read Step 3!

	= 3.0 =

	Rewrote the plugin into a PHP class!
	Removed the 'modal' javascript window property from Smileys Popup Page.
	Modified the LMB^Box Smileys Management page for long loading times.
	Added auto detection of Directory Seperator in Smileys Images Path.
	Cleaned up plugin code.

	= 2.8 =

	Fixed Short Smiley Tag in Thunderbird Smileys List, Smiley Image File miss-named.
	Reworked Smileys Convert code: Now using Regex. Now you do not need to have a space before and after 
		the Smileys Tag. You only have to have a space BEFORE Smiley Tag or the Smiley Tag can be at the 
		beginning of a new line. You can now have: 
		(Beginning of Line OR Space):Smiley Tag:(Any Non-Alphanumeric Character OR Space OR End of Line)

	= 2.7.2 =

	I've found a fix that will take care of the problem with other plugins messing up the post or comment 
		content and Smileys Tags. There is now no need to use the modified version of the IImage Gallery 
		plugin. This fix makes WordPress process the LMB^Box Smileys filters first before the others, 
		which completely fixes the problem. This fix should also fix any other plugins that cause the same 
		problem now or in the future.

	= 2.7.1 =

	LMB^Box Smileys plugin package now includes a .txt file and a modified version of IImage Gallery to fix
		problems that IImage Gallery causes. For more info, please read the IImage_Gallery_Fix.txt file.

	= 2.7 =

	Reworked Smileys Convert code: Fixed problems with the display of Smileys Tags and Short Smileys Tags.

	= 2.6 =

	Added title attribute to <img> tag for Smileys Images on Smileys Popup page and Smileys displayed 
		directly in the Comment Form Area.
	Added more automatic loading options for auto-load Smileys Lists.
	Changed the Smileys Images' filenames around and Smileys Tags (you may have problems with old posts!).
	Reworked Disabled Smileys Image coding.
	Added Short Smileys Tags and options to control, use and display them (step 6.3).

	= 2.5 =

	Added Sync Smileys Lists feature and automatic Smileys Lists loading.
	Added Display Order for Smileys Lists.

	= 2.4 =

	Added ability to display Smileys in the Comment Form area directly without the Popup Page (step 3.1).

	= 2.3 =

	Just cleaned up some of the code and documentation.
	Added check to see if any Smileys are displayed on Smileys Popup Page or not. If not, then you 
		get a "No Smileys Avalible! Contact the Admin to Activate the Smileys!" message.
	Maybe: I may add a Template feature to allow an easy ability to customize the Smileys Popup Page, 
		but I'm not sure. It seems reduntent, but would be a nice feature to allow easy upgrade and 
		theme management.
	Not Doing: I'm not going to add short Smiley tags like :) or :D because of the fact that I don't 
		know what every blog admin would want to use for the default short Smiley tags Smileys 
		(the smiley image). So if you really want the short tags, just add them to the Smileys Lists 
		that you want them to use (if you put the short tag above the long tag smiley, then on the 
		Smileys Popup Page, the short tag will be added to the comment/post form; and if you put the 
		short tag below the long tag, the long tag will be added to the comment/post form).

	= 2.2 =

	Added confirm boxes to remove stored settings for the plugin on deactivation
	Added disabled smileys from Smileys List for either Admin Write Pages or Comment Form.
	Fixed disabled problem with display for admin and comment smileys
	Fixed problem with default WordPress smileys not be removed (remove_filter() settings).
	Fixed no Smiley Button on quicktags toolbar in Comment Edit - Temp fix until WordPress has 
		edit_comment_form action added to edit-comments.php file in wp-admin folder.
	Shortened php call and args to get Smileys output.
	Changed Management Page name.
	ToDo: Add short Smiley tags like :) or :D to Smiley List for default action.

	= 2.1 =

	Added Manage Smileys Page
	Changed the Smileys Popup Page JS Settings (Window Settings)
	Changed Plugin's Name! From WP Smileys to LMB^Box Smileys!

	= 2.0 =

	Added Option Page for WP Smileys
	Improved smileys adding/displaying and security
	ToDo: Add Manage Smileys Page -> core code in place, just need to make page!

	= 1.7 =

	Added new feature: Admin Write Page and Comment Form Smileys Page Settings
	ToDo: Add options page for all settings and management page for smileys

	= 1.6 =

	Fixed the button style documentation to continue to work with WP Comment Quicktags Plus.
	Added info as to how to add a style to the smileys button in the admin write pages.

	= 1.5 =

	I have now included a readme.txt file with the plugin and I have also edited the 
		documentation in the files themselvies.
	Changed the style classes around and added more documentation

	= 1.4 =

	Changed the popup script options for a better display.
	Changed the code to add for a link to allow for non-javascript browsers

	= 1.3 =

	The first offical release of WP Smileys for WordPress!
