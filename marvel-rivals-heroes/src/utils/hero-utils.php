<?php
    function buildHeroImagePaths(string $hero_name): array {
        $folder_name = format($hero_name);           

        $base_path = '/public/images/heroes/' . $folder_name . '/';

        $types = ['portrait', 'full-portrait', 'icon', 'background'];
        $images = [];

        foreach ($types as $type) {
            $images[$type] = $base_path . $type . '.png';
        }
        
        return $images;
    }

    function format(string $name): string {
        $formatted = strtolower(str_replace(' ', '-', $name));   // Dr. Strange → dr.-strange
        $formatted = str_replace('.', '', $formatted);          // dr.-strange → dr-strange

        return $formatted;
    }

    function getRoleIcon(string $role): string {
        $icons = [
            'strategist' => 'public/images/ui/strategist-icon.png',
            'duelist' => 'public/images/ui/duelist-icon.png',
            'vanguard' => 'public/images/ui/vanguard-icon.png',
        ];

        return $icons[$role];
    }
?>