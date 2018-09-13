<?php

foreach (Config::get('laravelvuejs.POST_TYPES') as $postType) {
    MetaBox::make(
        'Post options',
        $postType,
        ['priority' => 'high', 'context' => 'side']
    )->set(BoxOptions::all());
}

MetaBox::make(
    'Post options',
    'page',
    ['priority' => 'high', 'context' => 'side']
)->set(BoxOptions::addLanguageOnly());