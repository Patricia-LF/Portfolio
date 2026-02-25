<?php

declare(strict_types=1);

// Set colors for technologies
$techColors = [
    'php' => 'rgb(150, 155, 224)',
    'c#' => '#48c244',
    'javascript' => 'rgb(225, 200, 8)',
    'html' => 'rgb(252, 106, 62)',
    'css' => 'rgb(91, 175, 243)',
    'node.js' => '#91de8a',
    'next.js' => '#000000',
    'react.js' => 'rgb(97, 218, 251)',
    'laravel' => '#ff2b20',
    'wordpress' => '#30ace5',
    'typescript' => '#007acc',
    'sql' => 'rgb(0, 200, 255)',
    'figma' => '#f5cefd',
];

// Function that returns a color, fallback if tech doesn't exist
function getTechColor($tech)
{
    global $techColors;
    $key = strtolower($tech);
    return $techColors[$key] ?? '#888'; // default gray
}
