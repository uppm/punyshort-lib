<?php
namespace modules\punyshort;

use modules\httprequest\HTTPRequest;

class Punyshort {

    private $server = "https://punyshort.ga";

    public function __construct(){

    }

    public function short($link){
        $linkInfo = json_decode(HTTPRequest::post("https://punyshort.ga/api/v2/short")->parameter("link", $link)->send()->getData());
        return new NewShortenLink($linkInfo->link, $linkInfo->full_link, $linkInfo->error);
    }

    public function getLink($id) {
        $linkInfo = json_decode(HTTPRequest::get("https://punyshort.ga/api/v2/getinformation/".$id)->send()->getData());
        return new LinkInformation($linkInfo->clicks, $linkInfo->click, $linkInfo->browser, $linkInfo->os, $linkInfo->countries, $linkInfo->error);
    }

    public function setServer(string $server){
        $this->server = $server;
    }
}