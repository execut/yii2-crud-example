# yii2-crud-example
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

### Install

Either run

```
$ php composer.phar require execut/yii2-crud-example "dev-master"
```

or add

```
"execut/yii2-crud-example": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Configuration

Add to your console app config:
```php
return [
    'bootstrap' => [
         'booksNative' => [
            'class' => \execut\booksNative\bootstrap\Console::class,
        ],
    ],
];
```

Apply module migrations:
```shell script
./yii migrate/up --interactive=0
-> ...migration was applied.
-> 
-> Migrated up successfully.
```

Add to your backend app config:
```php
return [
    'bootstrap' => [
         'booksNative' => [
            'class' => \execut\booksNative\bootstrap\Common::class,
        ],
    ],
];
```

## Usage
Open books example url in your browser [/booksNative/books/index](http://localhost/booksNative/books/index).

Authors example here [/booksNative/authors/index](http://localhost/booksNative/authors/index).