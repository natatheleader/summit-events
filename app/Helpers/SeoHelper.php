<?php

namespace App\Helpers;

class SeoHelper
{
    public static function generateMetaTags($title, $description, $image = null, $url = null)
    {
        $defaultImage = asset('images/verve-logo.png');
        $image = $image ?? $defaultImage;
        $url = $url ?? url()->current();
        
        return [
            'title' => $title,
            'description' => $description,
            'og_title' => $title,
            'og_description' => $description,
            'og_image' => $image,
            'og_url' => $url,
            'twitter_card' => 'summary_large_image',
            'twitter_title' => $title,
            'twitter_description' => $description,
            'twitter_image' => $image,
        ];
    }
}