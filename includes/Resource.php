<?php

/**
 * Created by PhpStorm.
 * User: isaac.herrera
 * Date: 4/21/2017
 * Time: 6:01 PM
 */

class Resource
{
    private $resources;

    function __construct()
    {
        // initialize array of texts and images.
        $this->resources = parse_ini_file("texts.ini", true);
    }

    /**
     * Retrieve a text from texts.ini
     * @param string $key Text from array.
     * @return string text from array.
     */
    public function getText($key) {
        return isset($this->resources[$key]) ? $this->resources[$key] : '';
    }

    /**
     * @return array Array of all carousel images, null if did not be declared.
     */
    public function getCarouselImages() {
        return isset($this->resources['carousel']) ? $this->resources['carousel'] : null;
    }

    /**
     * @param string $key Name of image declared on texts.ini
     * @return array Array if was found the image, null if wasn't.
     */
    public function getCarouselImage($key) {
        return isset($this->resources['carousel']) ? $this->resources['carousel'] : null;
    }

}