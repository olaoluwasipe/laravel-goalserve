<?php

namespace CodeBugLab\GoalServe\Helper;

class CurlHelper
{
    public static function get($url, $header)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
