Builder
================
Family : Creational Design Patterns

When use a builder ?
--------------------
Constructs complex objects **step by step**.

Use **chaining method** like the **fluent** design pattern (but the fluent generally acts as a facade for the subclasses). 

**Creates immutable objects** (the state of the object can't be changed after its construction).


Example of problem
------------------
Complex object that requires a very complex initialization of several fields and nested objects. Such initialization leads to a monstrous construction (lot of parameters into the constructor) or even worse scattered code anywhere the client code.

Refactoring Guru [example](https://refactoring.guru/design-patterns/builder) :
![](https://refactoring.guru/images/patterns/diagrams/builder/problem1-2x.png?id=02ffbd7ad294600e42aa78989d441b4d)
> You might make the program too complex by creating a subclass for every possible configuration of an object.

In this study case the **inheritance** to extend the `House` main class is not convenient because it's requires to create lot of subclasses and the constructor is quickly giant and painful every time you use it. Cause : most parameters are unused (only a fraction of house have a garden or a swimming pool and therefore methods & parameters to manage this, for each of them are useless in most cases).

=> Solution : HouseBuilder ! 

> The Builder pattern lets you construct complex objects step by step. The Builder doesn’t allow other objects to access the product while it’s being built.

The pattern organizes object construction step by step (so for example yo can `buildFloor()` and then `buildWalls()` using once again the **chaining method**). 

Important : it's not required to call of the steps during the object's construction excerpt some constructions that require inter-dependencies or required methods between them (`buildWalls()` is required when you want to use `paintWalls()`). But in most cases, most methods are not necessary and the order doesn't' matter => to solve that it's possible to **create several different builders that's implement the same steps** in a different manner by using a **common interface**.

Concrete and famous use case
----------------------------
The [QueryBuilder](https://www.doctrine-project.org/projects/doctrine-orm/en/2.13/reference/query-builder.html), part of the PHP doctrine ORM library follow this pattern.

How create a Builder
--------------------



Go deeper
---------

Director (**not necessary**) : separate class thats extract a series of steps to define an order to execute the building steps while the builder implements those steps.


That's it ! Full demo [here](#live-example).

Pros
----


Cons
----

Live example 
------------
- Go to the project directory with your favorite terminal : `cd ./creational/builder/practice`
- Run the composer command to update the autoloader : `composer dump-autoload`
- Run the PHP built-in server : `php -S localhost:8000 -d display_errors=On`

For more info
-------------
See [Refactoring Guru explanations](https://refactoring.guru/design-patterns/builder). 

There is plenty interesting things (applicability, code examples in most languages, illustrations, more info about pro & cons, relations with other patterns, advanced instructions that are be certified by the community).

Credits
---------
Inspired by Refactoring Guru explanations and various searches. 



