<?php

class AboutPage extends Page {

    /**
     * Profile image
     *
     */
    public function profile_image () {

        $image = $this->images()->find($this->profile_image_filename());
        if (!$image) {
            $image = $this->images()->first();
        }

        return $image;

    }


}
