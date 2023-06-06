<?php

function shortContent(string $content, int $limit = 100): string
{
    if (strlen($content) <= $limit)
    {
        return $content;
    }

    $lastSpace = strpos($content, " ", $limit);

    return substr($content, 0, $lastSpace) . "...";
}