<?php

function sanitizeText($content)
{
    // We can add more sanitzation rules here
    return htmlentities($content);
}