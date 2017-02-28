<?php

class BasePage extends Page {

    /**
     * Get the contact image
     *
     */
    public function contact_image() {
        $filename = site()->contact_image_filename()->html();
        $file = site()->images()->find($filename);
        return $file;
    }


    /**
     * Returns an array of the social links added to the site options.
     *
     */
    public function get_social_links() {
        return site()->social_links()->yaml();
    }


}
