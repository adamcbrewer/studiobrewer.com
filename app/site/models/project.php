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

}
