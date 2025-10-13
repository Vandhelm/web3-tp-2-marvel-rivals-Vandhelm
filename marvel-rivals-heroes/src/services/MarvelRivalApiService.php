<?php
    function fetchHeroBio($name) {
        $url = "https://hub-sorel-tracy.mathiscote.ca/api/marvel-rivals/$name";
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return $data['bio'];
    }
?>