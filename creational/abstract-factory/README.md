
Abstract Factory
================
Family : Creational Design Patterns

When use a factory ?
--------------------

Family of specific object without specifying the concrete classes.

But create individual object that they match other objects of the same family to keep the logic. 

Notion of consistency between objects because it's not make sense for e.g to have a modern table with victorian chairs.


| Style  / Type  |      Table                    | Chair                       |
|----------------|-------------------------------|-----------------------------|
|Art Deco        |Original table                 |Original chair               |
|Victorian       |Old school table               |Old school chair             |
|Modern          |Modern table                   |Modern chair                 |


To represent that in our code :

1. Create interfaces for each family of object (eg. `ChairInterface`, `TableInterface`) and all variants implements this interface (`VictorianChair`, `Modern Chair`...).
2. declare the Abstract Factory interface `FurnitureFactory` that is an interface with all creation methods for all products that are part of the product family (e.g. `createTable()`, `createChair()`). **Methods must return abstract products represented by each prev interface**.  
3. Create a factory class for each variant of the product family (e.g. `ArtDecoFurnitureFactory`, `ModernFurnitureFactory`) based on the abstract factory.

<!-- TODO add some explanations -->



Pros
----
- More flexible than a factory but more complex