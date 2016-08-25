<?php

Text::extend([
  'markdown' => function($text){
    static $markdown_parser = null;
    if (null === $markdown_parser) $markdown_parser = new ParsedownExtra();
    return $markdown_parser->text($text);
  }
]);
