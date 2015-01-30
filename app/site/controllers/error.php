<?php

require_once('vendor/autoload.php');

return function($site, $pages, $page) {

    $data = array();

    $tumblr_config = c::get('tumblr');

    $api = new Tumblr\API\Client($tumblr_config['consumer_key'], $tumblr_config['consumer_secret']);

    $client = $api->getBlogPosts('uzicopter.tumblr.com', array(
        'limit' => 30,
        // Post number to start at
        'offset' => rand(0, 100),
        // Retrieve posts according the specified timestamp
        // 'before' => '',
        // 'after' => ''
    ));

    $images = array();

    foreach ($client->posts as $key => $post) {
        if (isset($post->photos)) {
            foreach ($post->photos as $key => $photo) {
                $images[] = $photo;
            }
        }
    }

    shuffle($images);

    $data['images'] = $images;
    $data['random_image'] = $images[array_rand($images)];

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // die();

    return $data;

};
