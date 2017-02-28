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


}
