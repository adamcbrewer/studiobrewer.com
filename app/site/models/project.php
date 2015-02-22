<?php

class ProjectPage extends Page {

    /**
     * Get the feature image
     *
     */
    public function feature() {
        $file = $this->images()->find($this->featureFilename());
        if (!$file) {
            $file = $this->images()->findBy('name', 'feature');
        }
        return $file;
    }

    /**
     * Get the thumbnail image
     *
     */
    public function thumb() {
        $file = $this->images()->find($this->thumbFilename());
        if (!$file) {
            $file = $this->images()->findBy('name', 'thumb');
        }
        return $file;
    }


    /**
     * Fetch all the project images, not thumbnails or feature images
     *
     */
    public function project_images() {
        return $this->images()->sortBy('sort', 'asc')->not('thumb.jpg', 'thumb.png', 'feature.jpg', 'feature.png');
    }


    /**
     * Fetch the first image for a project
     *
     */
    public function first_image() {
        return $this->images()->sortBy('sort', 'asc')->not('thumb.jpg', 'thumb.png', 'feature.jpg', 'feature.png')->first();
    }


}
