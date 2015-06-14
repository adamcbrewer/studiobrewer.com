<?php

class HomePage extends Page {

    /**
     * Get the homepage features
     *
     */
    public function featured_projects () {

        $feature_pages = $this->featured_project_uids()->yaml();
        $features = array();
        $feature;
        $uid;

        $work_page = $this->siblings()->findByUri('work');

        foreach ($feature_pages as $feature_page) {

            $uid = $feature_page['uid'];
            $feature = $work_page->children()->findByUri($uid);

            $no_feature_image = !$feature->feature();

            if ($no_feature_image) continue;

            $features[] = $feature;

        }

        return  $features;

    }

}
