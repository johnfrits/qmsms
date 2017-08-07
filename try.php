<?php
    $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => "639179545286",
        "shortcode" => "292905464",
        "message_id" => "11144112112312331241",
        "message" => urlencode("hayssss"),
        "client_id" => "757867ea2047771fea041a40684334dccee81cd07c81f006e556298e9eb42b00",
        "secret_key" => "4f16aea773532b9cb9bf8330b8b34c8248b9b482255213c2504575faab8e4bcb"
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
    echo json_encode($response);
    exit(0);

?>