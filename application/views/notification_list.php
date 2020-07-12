<<<<<<< HEAD
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
=======
<div class="comments_box">
	<div class="container">
		<div class="row">
		
				<p>Emojis</p>
			<?php

			if(!empty($imoj_array)){

				foreach ($imoj_array as $titles) {
					echo $titles['title'];
					foreach ($titles['imoji'] as $title) {
						// foreach ($title as $value) {
							echo $title->imoji_count;
							echo $title->imoji_ascii;
						// }
					}
				
				}
			}

			?>
			<p>Comments</p>
			<?php
			if(!empty($comment_array)){

				foreach ($comment_array as $titles) {
					echo $titles['title'];
					foreach ($titles['comment'] as $title) {
						// foreach ($title as $value) {
							echo $title->comment_count;
							//echo $title->imoji_ascii;
						// }
					}
				
				}
			}
			?>

		</div>
	</div>
</div>
>>>>>>> 2051929e5ea9a1714505dc79176363214fb12b8d
