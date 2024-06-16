# Dish drainer

## Story

Are you someone who always pops the bottom pot of the dish drainer? I hope not. That would be a disaster.
It is best if you pop the one from the top. It makes much less noise, trust me.

![bottom_dish.gif](media/php/dish-drainer/bottom_dish.gif ":size=300")

Your task is to create a `DishDrainer` class which represents a `Stack` data structure.

## What are you going to learn?

- implement `Stack` data structure
- use `LIFO` (Last-In, First-Out) method

## Tasks

1. Install the dependencies specified in `composer.json` by executing the `composer install` terminal command.
    - The `vendor` folder exists and contains at least a `phpunit` folder and an `autoload.php` file. Note that other directories can be inside `vendor` as well.

2. Create your own class with namespace `KitchenCounter` and name `DishDrainer`.
    - `DishDrainer` class exists in `src/DishDrainer.php`

3. Implement the `isEmpty()` method to check if the dish drainer is empty or not.
    - New `isEmpty()` method exists in `DishDrainer` class and returns `true`, if the `stack` is empty, `false` otherwise.

4. Implement the `pop()` method which removes the top `Pot` of the dish drainer and returns its value or `null`, if the `stack` is empty.
    - New `pop()` method exists in `DishDrainer` class.
This method removes the top `Pot` of the `stack` and returns its value or `null`, if it's empty.

5. Implement the `push(Pot pot)` method which pushes a `Pot` onto the top of the stack
    - New `push(Pot pot)` method exists in `DishDrainer` class and pushes a `Pot` onto the top of the `stack`.

## General requirements

None

## Hints

- Composer creates a folder for each dependency listed in `composer.json` file's `require` and `require-dev` parts. Every dependency can have dependencies, too. This is why you may find way more dependencies installed in your `vendor` folder compared to your `composer.json`.
- You can test your solution any time with the provided scripts. Just run the one corresponds to your operating system (`test.bat` file on Windows, `test.sh` on Linux / macOS).

## Background materials

- <i class="far fa-exclamation"></i> [A guide about Composer](project/curriculum/materials/pages/php/composer-package-manager.md)
- <i class="far fa-book-open"></i> [Stack class of Java](https://docs.oracle.com/en/java/javase/12/docs/api/java.base/java/util/Stack.html)
