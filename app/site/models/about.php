<?php

class AboutPage extends BasePage {

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


    /**
     * Client brands
     *
     */
    public function client_brands () {

        $client_brands = $this->client_brands_structure()->toStructure();

        if ($client_brands) {
            foreach ($client_brands as $key => $client) {
                $client->image = $this->images()->find($client->image_filename());
            }
        }

        return $client_brands;


    }


}
