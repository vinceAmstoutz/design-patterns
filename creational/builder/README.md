Builder
================
Family : Creational Design Patterns

When use a builder ?
--------------------
Focuses on constructing complex objects **step by step**.

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

The pattern organizes object construction step by step (so for example yo can `buildFloor()` and then `buildWalls()`). 

Important : it's not required to call of the steps during the object's construction excerpt some constructions that require inter-dependencies or required methods between them (`buildWalls()` is required when you want to use `paintWalls()`). But in most cases, most methods are not necessary and the order doesn't' matter => to solve that it's possible to **create several different builders that's implement the same steps** in a different manner by using a **common interface**.

Concrete and famous use case
----------------------------
The [QueryBuilder](https://www.doctrine-project.org/projects/doctrine-orm/en/2.13/reference/query-builder.html), part of the PHP doctrine ORM library follow this pattern.

Go deeper
---------

- Director (**not necessary**) : separate class thats extract a series of steps to define an order to execute the building steps while the builder implements those steps.
- Use if you need **chaining method** like the **fluent** design pattern (but the fluent generally acts as a facade for the subclasses). 

How create a Builder
--------------------

### Common structure :
- one builder (= interface) declares product construction steps that are common to all builders;
- one or many concrete builder that's implements the "main" builder interface to produce product in function of their properties;
- products that are resulting of different builder construction;
- an optional director to define sets of ordered steps. You may create & reuse product's config.

So in practice : 
1. Note all common constructions steps for each concrete builders based on their needs and construct an interface that reference all of these common steps. 
2. Create all concrete builders that implements the `Builder` interface, required methods and also contains a method `getResult()` to return the final child object. Indeed, almost always there is a method named `reset()` **to construct a new child object and clean from the memory the last one**.
3. Eventually, create a director if you need to have a list of steps that's happen in a defined order. To do that the director call via a method the right builder (that we recover before via a `setBuilder()` for e.g) the concrete builder methods in the right order.
4. In the client code you can, from now on, create very fast some objects thanks to the builder and/or the director and get the final object at the end.

That's it ! Full demo [here](#live-example).

Pros
----
- Construct objects step by step;
- Reuse same construction workflow for various representations of products;
- Single Responsibility Principe (complex construction not with the business logic code).

Cons
----
- Code complexity increases when we must create multiple new classes.

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



