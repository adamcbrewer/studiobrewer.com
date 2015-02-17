<?php

class ProjectPage extends Page {

    /**
     * Get the feature image
     *
     */
    public function feature() {
        return $this->images()->findBy('name', 'feature');
    }

    /**
     * Get the thumbnail image
     *
     */
    public function thumb() {
        return $this->images()->findBy('name', 'thumb');
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
