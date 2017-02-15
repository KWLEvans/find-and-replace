# Find and Replace

#### Website for practicing unit testing with PHP for Epicodus, 02.15.2017

#### By Patrick McGreevy & Keith Evans

## Description

This website lets a user enter a string and choose a word in that string. It then provides a replacement for that word.


## Setup/Installation Requirements
1. Set project root as working directory in CLI.
2. Run `$ composer install --prefer-source --no-interaction`.
3. Run `$ cd web`.
4. Run `$ php -S localhost:8000`.
5. Visit **`localhost:8000`** in web browser.


## Technologies Used

HTML

CSS

Bootstrap

JavaScript

jQuery

PHP

Silex

Twig

Composer

JSON

## Specs

|Behavior|Input|Output|
|--------|-----|------|
|It returns a string with the first instance of the whole given word in the original string replaced by the replacement word.|'Hello world', 'world', 'universe'|'Hello universe'|
|It returns a string with the all instances of the whole given word in the original string replaced by the replacement word.|'Hello world world', 'world', 'universe'|'Hello universe universe'|
|It returns a string with the all instances of the given word anywhere in the original string replaced by the replacement word.|'I am walking my cat to the cathedral.', 'cat', 'dog'|'I am walking my dog to the doghedral.'|
|It returns a string with the all instances of the given word anywhere in the original string, regardless of capitalization, replaced by the replacement word.|'I am walking my cat to the Cathedral.', 'cat', 'dog'|'I am walking my dog to the doghedral.'|

## Known Bugs

_No known bugs or issues_

### License

Copyright (c) 2017 _**Patrick McGreevy**_ & _**Keith Evans**_

This software is licensed under the MIT license.
