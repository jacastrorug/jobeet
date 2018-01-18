<?php
/**
 * Created by PhpStorm.
 * User: jacastrorug
 * Date: 18/01/2018
 * Time: 9:39 AM
 */

class Jobeet{

    /**
     * @param $text
     * @return null|string|string[]
     */
    static public function slugify($text){

        $text = preg_replace('/\W+/', '-', $text);

        $text = strtolower(trim($text, '-'));


        return $text;
    }
}