<?php

/**
 * Class Algolia_CustomAlgolia_Model_Observer
 *
 * Documentation on how to customize backend: https://community.algolia.com/magento/doc/m1/customize-backend/
 * List of extension's events: https://community.algolia.com/magento/doc/m1/backend/
 */

class Algolia_CustomAlgolia_Model_Observer
{
    public function updateSettings($observer)
    {
        $settings = $observer->getIndexSettings();

        /*
        Here you can update / add / remove different Algolia settings

        See what settings you can use here:
        https://www.algolia.com/doc/api-client/php/settings#index-settings-parameters
        */
    }
}
