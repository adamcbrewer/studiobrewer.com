<?php

return function($site, $pages, $page) {

    $data = array();

    // Returns all work projects that have been set to display on the homepage
    $projects = $pages->find('work')
        ->children()
        ->visible()
        ->filterBy('homepage', 'true');

    $data['projects'] = $projects;

    return $data;

};
