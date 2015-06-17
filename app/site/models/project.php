<?php

class ProjectPage extends Page {

    /**
     * Get the feature image
     *
     */
    public function feature() {
        $file = $this->images()->find($this->featuredFilename()->html());
        if (!$file) {
            $file = $this->images()->findBy('name', 'feature');
            if (!$file) {
                $file = $this->images()->not('thumb.jpg')->first();
            }
        }
        return $file;
    }

    /**
     * Calculates the aspect ratio in percentage for a feature image
     *
     */
    public function feature_ratio() {
        $feature = $this->feature();
        return round($feature->height() / $feature->width() *100 , 2) . '%';
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
