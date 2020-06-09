<?php

use App\Models\Category;
use App\Models\Occassion;

/**
 *  Handle admin url prefix
 *  @var string |null $url
 *  @return URL
 */
if (!function_exists('admin_url')) {
    function admin_url($url = null)
    {
        return url('admin/'  . $url);
    }
}

/**
 *  Get all categories
 *  @return resonse
 */
if (!function_exists('categories')) {
    function categories()
    {
        return Category::select('id','name_'.app()->getLocale().' as name')->get();
    }
}

/**
 *  Get all occassions
 *  @return response
 */
if (!function_exists('occassions')) {
    function occassions()
    {
        return Occassion::select('id','name_'.app()->getLocale().' as name')->get();
    }
}





/**
 *  Handle admin Auth guard prefix
 *
 *  @return guard
 */
if (!function_exists('adminAuthGuard')) {
    function adminAuthGuard()
    {
        return auth()->guard('admin');
    }
}

