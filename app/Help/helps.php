<?php

function parseDown($content) {
    return (new \Parsedown())->text($content);
}