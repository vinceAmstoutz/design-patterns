
Abstract Factory
================
Family : Creational Design Patterns

When use a factory ?
--------------------

Family of specific object without specifying the concrete classes.

But create individual object that they match other objects of the same family to keep the logic. 


#### Example of problem
Notion of consistency between objects because it's not make sense for e.g to have a modern table with victorian chairs.


| Style  / Type  |      Table                    | Chair                       |
|----------------|-------------------------------|-----------------------------|
|Art Deco        |Original table                 |Original chair               |
|Victorian       |Old school table               |Old school chair             |
|Modern          |Modern table                   |Modern chair                 |


How create an Abstract Factory
-----------------------------
1. Create interfaces for each family of object (eg. `ChairInterface`, `TableInterface`) and all variants implements this interface (`VictorianChair`, `Modern Chair`...).
2. Declare the Abstract Factory interface `FurnitureAbstractFactory` that is an interface with all creation methods for all products that are part of the product family (e.g. `createTable()`, `createChair()`). **Methods must return abstract products represented by each prev interface**.  
3. Create a concrete factory class for each variant of the product family (e.g. `ArtDecoFurnitureFactory`, `ModernFurnitureFactory`) based on the abstract factory. Each of theirs method return a variant product (`VictorianChair`, `Modern Chair`...).
4. The client, from now on, is able to create all variants products from each factory.

That's it ! Full demo [here](#live-example).

Pros
----
- More flexible than a factory.
- Single responsibility principle (we can extract product creation).
- Open/close Principe because we can introduce variants without affecting the existing.operating code. 

Cons
----
- Lot of interfaces and classes. Be careful of the complexity !

Live example 
------------
- Go to the project directory with your favorite terminal : `cd ./creational/abstract-factory/practice`
- Run the composer command to update the autoloader : `composer dump-autoload`
- Run the PHP built-in server : `php -S localhost:8000 -d display_errors=On`

For more info
-------------
See [Refactoring Guru explanations](https://refactoring.guru/design-patterns/abstract-factory). 

There is plenty interesting things (applicability, code examples in most languages, illustrations, more info about pro & cons, relations with other patterns, advanced instructions that are be certified by the community).

Credits
---------
Inspired by Refactoring Guru explanations and various searches. 