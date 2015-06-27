<?php

class ProjectPage extends Page {


    /**
     * Get the feature image
     *
     */
    public function feature() {
        $file = $this->images()->find($this->featuredFilename()->html());
        if (!$file) {
            $file = $this->images()->first();
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
            $file = $this->images()->first();
        }
        return $file;
    }


    /**
     * Fetch the first image for a project
     *
     */
    public function first_image() {

        $image_structure = $this->project_images()->toStructure()->first();

        $first_image = $image_structure;
        $first_image->image = $this->images()->find($image_structure->filename());

        return $first_image;

    }


    /**
     * Fetch all the remaining images
     *
     */
    public function remaining_project_images() {

        $images_structure = $this->project_images()->toStructure()->offset(1);
        $images = array();

        foreach ($images_structure as $key => $image) {
            $this_image = $image;
            $this_image->image = $this->images()->find($image->filename());
            $images[] = $this_image;
        }

        return $images;

    }

}
