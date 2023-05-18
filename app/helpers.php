<?php

use Illuminate\Support\Facades\Route;


if (! function_exists('active_link')){
    function active_link(string $name, $active='active'): string
    {
        return Route::is($name) ? $active : '';
    }
}
?>