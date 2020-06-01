<?php

use App\Models\Settings;
use Illuminate\Support\Facades\Request;
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
 *  Get last settings record 
 *  @var string |null $url
 *  @return URL
 */
if (!function_exists('admin_url')) {
    function settings()
    {
        return Settings::orderBy('id','desc')->first();
    }
}


/**
 *  Handle adminLTE design url prefix
 *  @var string |null $url
 *  @return URL
 */
if (!function_exists('adminlte_url')) {
    function adminLTE_url($url = null)
    {
        return url('/design/adminlte/' . $url);
    }
}

/**
 *  Handle sidebar menu display 
 *  @var string |null $url
 *  @return URL
 */
if (!function_exists('active_menu')) {
   function active_menu($link){
       if(preg_match('/'.$link.'/i', Request::segment(3))){
           return ['menu-open','display:block'];
       } else {
           return ['',''];
       }

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

/**
 *  Handle admin Datatable data
 *  
 *  @return array | mix
 */
if (!function_exists('datatable_lang')) {
    function datatable_lang()
    {
        return[
        "sProcessing" => trans('admin.sProcessing'),
        "sLengthMenu" => trans('admin.sLengthMenu'),
        "sZeroRecords" => trans('admin.sZeroRecords'),
        "sEmptyTable" => trans('admin.sEmptyTable'),
                "sInfo" => trans('admin.sInfo'),
            "sInfoEmpty" => trans('admin.sInfoEmpty'),
        "sInfoFiltered" => trans('admin.sInfoFiltered'),
        "sInfoPostFix" => trans('admin.sInfoPostFix'),
            "sSearch" => trans('admin.sSearch'),
                "sUrl" => trans('admin.sUrl'),
        "sInfoThousands" => trans('admin.sInfoThousands'),
    "sLoadingRecords" => trans('admin.sLoadingRecords'),
            "oPaginate" => [
                "sFirst" => trans('admin.sFirst'),
                "sLast" => trans('admin.sLast'),
                "sNext" => trans('admin.sNext'),
            "sPrevious" => trans('admin.sPrevious')
            ],
            "oAria" =>[
            "sSortAscending" => trans('admin.sSortAscending'),
            "sSortDescending" => trans('admin.sSortDescending')
            ]
            ];
    }
}
