<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-14
 * Time: 上午11:54
 */
$url = "http://localhost:9000";
$obj = array(
    "body" => "another post",
    "id" => 21
);
$content = json_encode($obj);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));

$json_response = curl_exec($curl);
curl_close($curl);

$response = json_decode($json_response, true);
echo $content;
?>