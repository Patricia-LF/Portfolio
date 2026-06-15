<?php

declare(strict_types=1);

// Set colors for technologies
$techColors = [
    'php' => 'rgb(150, 155, 224)',
    'c#' => '#48c244',
    'javascript' => 'rgb(252, 226, 32)',
    'html' => 'rgb(252, 62, 166)',
    'css'  => 'rgb(91, 175, 243)',
    'css modules' => 'rgb(91, 104, 243)',
    'node.js' => '#91de8a',
    'next.js' => '#787878',
    'react' => 'rgb(97, 218, 251)',
    'laravel' => '#ff2b20',
    'wordpress' => '#30ace5',
    'typescript' => '#007acc',
    'sql' => 'rgb(0, 200, 255)',
    'figma' => '#f5cefd',
    'vite' => '#efefef',
    'tailwind' => 'rgb(95, 155, 205)',
    'framer motion' => '#5c8b5a',
    'howler.js' => '#b958cd',
    'zustand' => 'rgb(247, 120, 217)',
];

// Function that returns a color, fallback if tech doesn't exist
function getTechColor($tech)
{
    global $techColors;
    $key = strtolower($tech);
    return $techColors[$key] ?? '#888'; // default gray
}
