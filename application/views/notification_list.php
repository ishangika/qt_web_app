<?php
if(!empty($imoj_array)){

	foreach ($imoj_array as $titles) {
		echo $titles['title'];
		echo " comment-".$titles['comment']." ";
		foreach ($titles['imoji'] as $title) {
			// foreach ($title as $value) {
				echo $title->imoji_count;
				echo '<img src="'.base_url().'application_resources/">'.$title->image;
			// }
		}
	
	 }
}
?>