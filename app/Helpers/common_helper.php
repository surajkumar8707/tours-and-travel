<?php

use App\Models\{Setting, SocialMediaLink};

if (!function_exists('getSettings')) {
    function getSettings(){
        return Setting::first();
    }
}

if (!function_exists('deletePublicPathFiles')) {
    function deletePublicPathFiles($path){
        // Delete the image file from the public/uploads directory
        if (file_exists($path)) {
            unlink($path);
        }
    }
}

if (!function_exists('getSocialMediaLink')) {
    function getSocialMediaLink(){
        return SocialMediaLink::first();
    }
}

if (!function_exists('public_asset')) {
    function public_asset($path = ''){
        // dd(url($path));
        return url('public/'.$path);
    }
}

function isActiveRoute($route, $output = 'active')
{
    if (is_array($route)) {
        if (in_array(Route::currentRouteName(), $route)) {
            return $output;
        }
    } else {
        if (Route::currentRouteName() == $route) {
            return $output;
        }
    }
}

/**
 * printArray function
 *
 * This function takes any number of arguments and prints their contents using print_r within a <pre> tag.
 * It is intended to be used for debugging purposes to display the structure of variables or arrays.
 *
 * @param mixed ...$params Any number of parameters to be printed using print_r.
 * @return void This function does not return anything. It simply outputs the content to the browser.
 */
if (!function_exists('printArray')) {
    function printArray()
    {
        $params = func_get_args();

        echo "<pre>";
        foreach ($params as $p) {
            print_r($p);
        }
        echo "</pre>";
        die;
    }
}

/**
 * Return a standardized web response.
 *
 * @param string $status   The status of the response ('error', 'success', etc.).
 * @param string $message  A message accompanying the response.
 * @param mixed  $data     Additional data to be included in the response.
 *
 * @return array           An array representing the web response.
 */
if (!function_exists('returnWebResponse')) {
    function returnWebResponse($status = 'error', $message = null, $data = null)
    {
        return array(
            'status' => $status,
            'message' => $message,
            'data' => $data
        );
    }
}

?>
