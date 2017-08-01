<?php
    $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => "639179545286",
        "shortcode" => "29290498",
        "message_id" => "112355512",
        "message" => urlencode("ERIS "),
        "client_id" => "1dbb02adb7cf68912e45a95edd8907b54e1a0bd0453cec4ca4038028e7f4be31",
        "secret_key" => "131951e241beba4e2142dfe722bba89e420870970a05efb22a150f60e05c9120"
    );

    $query_string = "";
    foreach($arr_post_body as $key => $frow)
    {
        $query_string .= '&'.$key.'='.$frow;
    }

    $URL = "https://post.chikka.com/smsapi/request";

    $curl_handler = curl_init();
    curl_setopt($curl_handler, CURLOPT_URL, $URL);
    curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
    curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handler);
    curl_close($curl_handler);
    echo $query_string;
    exit(0);



?>