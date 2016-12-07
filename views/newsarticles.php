<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $newsItem=> $oneItem) {

	echo '<h1>'.$oneItem['date_created'].'</h1>';
	echo '<img src="images/'.$oneItem['image'].'">';
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content>';
	echo '</article>';
}



echo '</section>';
