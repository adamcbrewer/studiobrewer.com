<?php

/**
 * Converts strings to slugs
 *
 */
function slugify($text) {
	// replace non letter or digits by -
	$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
	// trim
	$text = trim($text, '-');
	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	// lowercase
	$text = strtolower($text);
	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);
	if (empty($text)) {
		return 'n-a';
	}
	return $text;
}

/**
 * Grab all the porflio stuff
 */
include ('portfolio.php');

/**
 * Generating a list of searchable tags based on the tags listed for each project
 */
$tags = array();
foreach ($portfolio['projects'] as $i => $project) {
	foreach ($project['tags'] as $tag) {
		array_push($tags, strtolower($tag));
	}
	$portfolio['projects'][$i]['slug'] = slugify($project['title']);
}
$tags = array_unique($tags);
sort($tags);
$portfolio['tags'] = $tags;

$data = json_encode($portfolio);
header('Content-type: application/json');
echo $data;
