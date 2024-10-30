<?php
// Smileys List Config File for wp

// if to load Smileys List, must be true or false
$smileys_list_info_data['load'] = true;

// title of Smileys List, must be something
$smileys_list_info_data['title'] = 'WordPress Smileys';

// abbr. of Smileys List, must be something -> should be no more than 4 letter abbr
// has to be the same as the Smileys List Folder's Name!
$smileys_list_info_data['abbr'] = 'wp';

// display order of Smileys List, 0 is first displayed
$smileys_list_info_data['display_order'] = 0;

// Smileys of this Smileys List
// enter the Smiley Code and Smiley Image File Name below
$smileys_list_info_data['smileys'] = array(
										//	Smiley Code					Image Name
											':smile_wp:'   			=> 'smile.gif',
											':biggrin_wp:'			=> 'biggrin.gif',
											':sad_wp:'     			=> 'sad.gif',
											':surprised_wp:' 		=> 'surprised.gif',
											':eek_wp:'   			=> 'eek.gif',
											':confused_wp:'  		=> 'confused.gif',
											':cool_wp:'    			=> 'cool.gif',
											':lol_wp:'     			=> 'lol.gif',
											':mad_wp:'     			=> 'mad.gif',
											':razz_wp:'    			=> 'razz.gif',
											':redface_wp:' 			=> 'redface.gif',
											':cry_wp:'     			=> 'cry.gif',
											':evil_wp:'    			=> 'evil.gif',
											':twisted_wp:' 			=> 'twisted.gif',
											':rolleyes_wp:'    		=> 'rolleyes.gif',
											':wink_wp:'    			=> 'wink.gif',
											':exclaim_wp:'     		=> 'exclaim.gif',
											':question_wp:'  		=> 'question.gif',
											':idea_wp:'    			=> 'idea.gif',
											':arrow_wp:'   			=> 'arrow.gif',
											':neutral_wp:' 			=> 'neutral.gif',
											':mrgreen_wp:' 			=> 'mrgreen.gif'
									);

// Short Smileys Tags of this Smileys List
// you can add short smileys tags to be added which is recommended but not required!
// you need to edit the next line to be either true if there are short smileys tags or false if none!
// you can disabled any short smileys tags that are listed by setting the next line to false also!
$smileys_list_info_data['use_smileys_short'] = true;
// enter the Short Smiley Code and Smiley Image File Name below
$smileys_list_info_data['smileys_short'] = array(
										//	Short Smiley Code		Image Name
												':)' 		=> 'smile.gif',
												':-)' 		=> 'smile.gif',
												':D' 		=> 'biggrin.gif',
												':-D' 		=> 'biggrin.gif',
												':(' 		=> 'sad.gif',
												':-(' 		=> 'sad.gif',
												':o' 		=> 'surprised.gif',
												':-o' 		=> 'surprised.gif',
												'8O' 		=> 'eek.gif',
												'8-O' 		=> 'eek.gif',
												':?' 		=> 'confused.gif',
												':-?' 		=> 'confused.gif',
												':???:' 	=> 'confused.gif',
												'8)' 		=> 'cool.gif',
												'8-)' 		=> 'cool.gif',
												':x' 		=> 'mad.gif',
												':-x' 		=> 'mad.gif',
												':P' 		=> 'razz.gif',
												':-P' 		=> 'razz.gif',
												';)' 		=> 'wink.gif',
												';-)' 		=> 'wink.gif',
												':!:' 		=> 'exclaim.gif',
												':?:' 		=> 'question.gif',
												':|' 		=> 'neutral.gif',
												':-|' 		=> 'neutral.gif'
									);

// disabled Smileys of Smileys List
// add like this -> array('image_file_name', 'image_file_name')
// make sure that the last entry is not followed by a ','
// Admin Write Pages Disabled Smileys Images
$smileys_list_info_data['disabled']['admin'] = array();
// Comment Form Disabled Smileys Images
$smileys_list_info_data['disabled']['comment'] = array();

?>