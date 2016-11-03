<?php

class Algolia_CustomAlgolia_Model_Observer
{
    public function updateSettings($observer)
    {
        $settings = $observer->getIndexSettings();

        var_dump('Here I am');
        exit();

        /*
        Here you can update / add / remove different Algolia settings

        See what settings you can use here:
        https://www.algolia.com/doc/api-client/php/settings#index-settings-parameters
        */
    }
}