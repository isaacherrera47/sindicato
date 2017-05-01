<?php
/**
 * Created by PhpStorm.
 * User: isaac.herrera
 * Date: 4/21/2017
 * Time: 5:42 PM
 */


function loadDocsLinks()
{
    return parse_ini_file("docs_links.ini", true);
}