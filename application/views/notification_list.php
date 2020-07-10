<?php
if(!empty($imoj_array)){

	foreach ($imoj_array as $titles) {
		echo $titles['title'];
		foreach ($titles['imoji'] as $title) {
			// foreach ($title as $value) {
				echo $title->imoji_count;
				echo $title->image;
			// }
		}
	
	 }
}
?>