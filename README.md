Core – Markdown Extension
====

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/caffeina-core/markdown/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/caffeina-core/markdown/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/caffeina-core/markdown/badges/build.png?b=master)](https://scrutinizer-ci.com/g/caffeina-core/markdown/build-status/master)
[![Total Downloads](https://poser.pugx.org/caffeina-core/markdown/downloads.svg)](https://packagist.org/packages/caffeina-core/markdown)
[![Latest Stable Version](https://poser.pugx.org/caffeina-core/markdown/v/stable.svg)](https://packagist.org/packages/caffeina-core/markdown)
[![Latest Unstable Version](https://poser.pugx.org/caffeina-core/markdown/v/unstable.svg)](https://packagist.org/packages/caffeina-core/markdown)
[![License](https://poser.pugx.org/caffeina-core/markdown/license.svg)](https://packagist.org/packages/caffeina-core/markdown)


[Parsedown](http://parsedown.org/) extension for [Core](https://github.com/caffeina-core/core) String.

## Installation

Install via [composer](https://getcomposer.org/download/):

```bash
$ composer require caffeina-core/markdown -o
```


## Parsedown

[Parsedown](http://parsedown.org/) documentation : http://parsedown.org/

### Parsing markdown

```php
echo String::markdown('Hello _Core_!');
```

```html
 <p>Hello <em>Core</em>!</p>
```

