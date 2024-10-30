<?php
// Smileys List Config File for ee

// if to load Smileys List, must be true or false
$smileys_list_info_data['load'] = true;

// display order of Smileys List, 0 is first displayed
$smileys_list_info_data['display_order'] = 2;

// title of Smileys List, must be something
$smileys_list_info_data['title'] = 'EE Smileys';

// abbr. of Smileys List, must be something -> should be no more than 4 letter abbr
// has to be the same as the Smileys List Folder's Name!
$smileys_list_info_data['abbr'] = 'ee';

// Smileys of this Smileys List
// enter the Smiley Code and Smiley Image File Name below
$smileys_list_info_data['smileys'] = array(
										//	Smiley Code					Image Name
											':grin1_ee:' 			=> 'grin1.gif',
											':lol_ee:' 				=> 'lol.gif',
											':cheese1_ee:' 			=> 'cheese1.gif',
											':smile1_ee:' 			=> 'smile1.gif',
											':wink_ee:' 			=> 'wink.gif',
											':smirk1_ee:' 			=> 'smirk1.gif',
											':rolleyes_ee:' 		=> 'rolleyes.gif',
											':confused_ee:'      	=> 'confused.gif',
											':surprise_ee:'     	=> 'surprise.gif',
											':bigsurprise_ee:'  	=> 'bigsurprise.gif',
											':tongue_laugh_ee:'  	=> 'tongue_laugh.gif',
											':tongue_rolleye_ee:' 	=> 'tongue_rolleye.gif',
											':tongue_wink_ee:'  	=> 'tongue_wink.gif',
											':rasberry_ee:'       	=> 'rasberry.gif',
											':blank_ee:'       		=> 'blank.gif',
											':longface_ee:'        	=> 'longface.gif',
											':ohh_ee:'         		=> 'ohh.gif',
											':grrr_ee:'        		=> 'grrr.gif',
											':gulp_ee:'        		=> 'gulp.gif',
											':ohoh_ee:'           	=> 'ohoh.gif',
											':downer_ee:'      		=> 'downer.gif',
											':embarrassed_ee:'		=> 'embarrassed.gif',
											':sick_ee:'        		=> 'sick.gif',
											':shuteye_ee:'     		=> 'shuteye.gif',
											':hmm1_ee:'         	=> 'hmm1.gif',
											':mad1_ee:'         	=> 'mad1.gif',
											':angry_ee:'       		=> 'angry.gif',
											':zip_ee:'         		=> 'zip.gif',
											':kiss_ee:'        		=> 'kiss.gif',
											':shock_ee:'       		=> 'shock.gif',
											':smile2_ee:'   		=> 'smile2.gif',
											':smirk2_ee:'   		=> 'smirk2.gif',
											':grin2_ee:'    		=> 'grin2.gif',
											':hmm2_ee:'     		=> 'hmm2.gif',
											':mad2_ee:'     		=> 'mad2.gif',
											':cheese2_ee:'  		=> 'cheese2.gif',
											':vampire_ee:'     		=> 'vampire.gif',
											':snake_ee:'       		=> 'snake.gif',
											':exclaim_ee:'     		=> 'exclaim.gif',
											':question_ee:'    		=> 'question.gif'
									);

// Short Smileys Tags of this Smileys List
// you can add short smileys tags to be added which is recommended but not required!
// you need to edit the next line to be either true if there are short smileys tags or false if none!
// you can disabled any short smileys tags that are listed by setting the next line to false also!
$smileys_list_info_data['use_smileys_short'] = true;
// enter the Short Smiley Code and Smiley Image File Name below
$smileys_list_info_data['smileys_short'] = array(
										//	Short Smiley Code		Image Name
												':)' 		=> 'smile1.gif',
												':-)' 		=> 'smile1.gif',
												': )' 		=> 'longface.gif',
												':D' 		=> 'grin1.gif',
												':-D' 		=> 'grin1.gif',
												':x' 		=> 'mad1.gif',
												':-x' 		=> 'mad1.gif',
												':P' 		=> 'cheese1.gif',
												':-P' 		=> 'cheese1.gif',
												'8)' 		=> 'smile2.gif',
												'8-)' 		=> 'smile2.gif',
												'8x' 		=> 'grin2.gif',
												'8-x' 		=> 'grin2.gif',
												'8x' 		=> 'mad2.gif',
												'8-x' 		=> 'mad2.gif',
												'8P' 		=> 'cheese2.gif',
												'8-P' 		=> 'cheese2.gif',
												':o' 		=> 'surprise.gif',
												':-o' 		=> 'surprise.gif',
												'8O' 		=> 'bigsurprise.gif',
												'8-O' 		=> 'bigsurprise.gif',
												':(' 		=> 'downer.gif',
												':-(' 		=> 'downer.gif',
												':?' 		=> 'confused.gif',
												':-?' 		=> 'confused.gif',
												':???:' 	=> 'confused.gif',
												';)' 		=> 'wink.gif',
												';-)' 		=> 'wink.gif',
												':!:' 		=> 'exclaim.gif',
												':?:' 		=> 'question.gif',
												':|' 		=> 'blank.gif',
												':-|' 		=> 'blank.gif'
									);

// disabled Smileys of Smileys List
// add like this -> array('image_file_name', 'image_file_name')
// make sure that the last entry is not followed by a ','
// Admin Write Pages Disabled Smileys Images
$smileys_list_info_data['disabled']['admin'] = array();
// Comment Form Disabled Smileys Images
$smileys_list_info_data['disabled']['comment'] = array();

?>