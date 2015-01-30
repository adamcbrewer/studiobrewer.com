<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug', false);
c::set('cache', true);

c::set('twitter', array(
    'consumer_key'      => '',
    'consumer_secret'   => '',
    'user_token'        => '',
    'user_secret'       => '',
    'screen_name'       => ''
));

// Custom Panel Stylesheet
// c::set('panel.stylesheet', 'assets/css/custom-panel.css');

/*

---------------------------------------
Routing
---------------------------------------

*/

c::set('routes', array(
    array(
        'pattern' => 'api/twitter',
        'method' => 'GET',
        'action' => function () {

            // if(!r::ajax()) {
            //     header::notfound();
            //     return;
            // }

            $response = array(
                'status' => false,
                'tweets' => null,
                'filter' => null
            );

            $site = site();
            $filter = null;
            // max tweets fetched before filtering out replies etc
            $limit_up_to = 12;
            // the maximun number of tweets returned to the front-end
            $limit_shown = 3;

            $vendor = $site->kirby()->roots()->index() . DS . 'vendor';
            require($vendor . DS . 'tmhOAuth.php');
            require($vendor . DS . 'twitterApi.php');

            if (!$site->tweetfilter()->empty()) $filter = (string) $site->tweetfilter();

            $twitter_config = c::get('twitter');
            $twitter = new Twitter($twitter_config);

            if ($filter) {
                $tweets = $twitter->search($limit_up_to, 'from:' . $twitter_config['screen_name'] . ' ' . $filter);
            } else {
                $tweets = $twitter->get($limit_up_to);
            }

            $response['filter'] = $filter;
            if ($tweets) {
                $response['status'] = true;
                $tweets_filtered = array();

                if (isset($tweets->statuses)) {
                    $tweets = $tweets->statuses;
                }

                foreach ($tweets as $tweet) {

                    // Exclude direct replies
                    if ($tweet->in_reply_to_status_id === null) {
                        $tweets_filtered[] = $tweet;
                    }
                    if (count($tweets_filtered) === $limit_shown) {
                        break;
                    }
                }

                $response['tweets'] = $tweets_filtered;
            }

            header::contentType('application/json');
            return response::json($response);
        }
    )
));

