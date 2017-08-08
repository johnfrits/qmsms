<?php
    
    function textTicket($mobile_number, $ticket){

        $str = substr($mobile_number, 1);
        $mobileNumber = (string)"63" . $str;
        $userTicket = (string)$ticket;
        $messageId = (string)mt_rand(1000000000, 9999999999);
        $messageToUser = "Thank you for using QMSMS: Your Ticket Number: ".$userTicket." Please wait for your ticket number to be called.";
        $arr_post_body = array(
            "message_type" => "SEND",
            "mobile_number" => $mobileNumber,
            "shortcode" => "292905464",
            "message_id" => $messageId,
            "message" => urlencode($messageToUser),
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
        $txtResponse = json_encode($response);
        $pos = strpos($txtResponse, "ACCEPTED");
        return $pos;
        
    }
?>