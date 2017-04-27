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
    private $path;

    function __construct()
    {
        // initialize array of texts and images.
        $this->resources = parse_ini_file("texts.ini", true);
        $this->path = $_SERVER['PHP_SELF'];
    }

    /**
     * @return string Absolute path of the project.
     */
    public function getPath()
    {
        return '/sindicato/';
    }

    /**
     * Retrieve a text from texts.ini
     * @param string $key Text from array.
     * @return string text from array.
     */
    public function getText($key)
    {
        return isset($this->resources[$key]) ? $this->resources[$key] : '';
    }

    /**
     * @return string correct title to show.
     */
    public function getTitle()
    {
        if (strpos($this->path, 'sutitspr') !== false) {
            return $this->resources['title_editorial'];
        } else {
            return $this->resources['title_sindicato'];
        }
    }

    public function getMeta() {
        $path = $_SERVER['PHP_SELF'];
        if (strpos($this->path, 'sutitspr') !== false) {
            return $this->resources['meta_description_editorial'];
        } else {
            return $this->resources['meta_description_sindicato'];
        }
    }

    /**
     * @return array Array of all carousel images, null if did not be declared.
     */
    public function getCarouselImages()
    {
        return isset($this->resources['carousel']) ? $this->resources['carousel'] : null;
    }

    /**
     * @param string $key Name of image declared on texts.ini
     * @return array Array if was found the image, null if wasn't.
     */
    public function getCarouselImage($key)
    {
        return isset($this->resources['carousel']) ? $this->resources['carousel'] : null;
    }

    /**
     * @param string $key Name of social link to show
     * @return string Empty if it was not found.
     */
    public function getSocialLink($key)
    {
        if (strpos($this->path, 'sutitspr') !== false){
            return isset($this->resources['social_links']['editorial'][$key]) ? $this->resources['social_links']['editorial'][$key] : '';
        } else {
            return isset($this->resources['social_links']['sindicato'][$key]) ? $this->resources['social_links']['sindicato'][$key] : '';
        }
    }

}