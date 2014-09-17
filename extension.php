<?php

String::extend([
  'markdown' => function($text){
    static $markdown_parser = null;
    if (null === $markdown_parser) $markdown_parser = new Parsedown();
    return $markdown_parser->text($text);
  }
]);