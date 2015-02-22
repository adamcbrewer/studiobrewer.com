;(function(window, document, undefined){

    'use strict';

    /**
     * Name-spacing
     */
    window.Site = {
        basePath: document.body.getAttribute('data-basepath'),
        userAgent: navigator.userAgent,
        platform: navigator.platform
    };


    /**
     * Konami code
     *
     */
    var konami = function(f,a){document.onkeyup=function(e){/113302022928$/.test(a+=''+((e||self.event).keyCode-37))&&f()}};
    konami(function () {
        document.body.classList.add('is-konami');
    });


    /**
     * Detecting if tweets are turned on and creating
     * a template form the original DOM element.
     *
     */
    var tweetsOn = false;
    var htmlEl = document.documentElement;
    // Template and container nodes
    var $tweetContainer = document.getElementById('tweets');
    var $templateOriginal = document.getElementById('tweet-template');
    if ($templateOriginal) {
        var $template = $templateOriginal.cloneNode(true);
        var frag = document.createDocumentFragment();
        // remove the template from the DOM
        $templateOriginal.parentNode.removeChild($templateOriginal);
    }

    if (htmlEl.classList && htmlEl.classList.toString().indexOf('tweets-on') != -1) {
        tweetsOn = true;
    }


    /**
     * Twitter Updates
     *
     */
    var request = new XMLHttpRequest();
    request.open('GET', Site.basePath + '/api/twitter', true);

    request.onload = function() {

        if ($tweetContainer) $tweetContainer.classList.remove('is-busy');

        if (request.status >= 200 && request.status < 400){

            var resp = JSON.parse(request.responseText);
            var tweets = resp.tweets;

            if (!tweets) return;

            var filter = resp.filter || false;
            var x = 0;

            var $tweet = document.createElement('div');

            for (x; x < tweets.length; x++) {
                $tweet = new Tweet(tweets[x], $template, filter, resp.screen_name);
                frag.appendChild($tweet);
            }

            $tweetContainer.appendChild(frag);

        }
    };

    request.onerror = function() {
      // There was a connection error of some sort
    };

    if (tweetsOn && $tweetContainer) {
        $tweetContainer.classList.add('is-busy');
        request.send();
    }

}(window, document));
