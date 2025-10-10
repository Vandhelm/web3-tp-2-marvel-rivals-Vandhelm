<?php
    function buildHeroImagePaths(string $hero_name): array {
        $folder_name = strtolower(str_replace(' ', '-', $hero_name));   // Dr. Strange → dr.-strange
        $folder_name = str_replace('.', '', $folder_name);              // dr.-strange → dr-strange

        $base_path = '/public/images/heroes/' . $folder_name . '/';

        $types = ['portrait', 'full-portrait', 'icon', 'background'];
        $images = [];

        foreach ($types as $type) {
            $images[$type] = $base_path . $type . '.png';
        }
        
        return $images;
    }
?>