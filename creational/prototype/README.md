
Prototype
=========
Family : Creational Design Patterns

Other less common name :  *Clone*

When use a prototype ?
--------------------
The Prototype pattern design lets us copy existing objects without making the client code dependent on object classes. 

 Use the Prototype pattern when your code shouldn’t depend on the concrete classes of objects that you need to copy.

 Use the pattern when you want to reduce the number of subclasses that only differ in the way they initialize their respective objects.

Problems solved
---------------
- When we have to clone an object, we create an exact copy (a clone) but there is a catch : not all objects can't be copied like that **because of their visibility**, call also **variable scope** (private methods & attributes witch are not accessible);
- **Extra dependency** between the original and the object witch be cloned. We have to know and maintain any changes for both of them;
- requires that knows the concrete class to understand object's life.


=> the Prototype (or Clone) pattern solve this object cloning process by declare a common interface for all of theses objects to be more independent. Also creates a way to creates prototypes of objects (pre-built objects).

How create a basic Prototype
----------------------------
[Refactoring Guru example](https://refactoring.guru/design-patterns/prototype) :
![](https://refactoring.guru/images/patterns/diagrams/prototype/structure-2x.png)

1. Create a common interface name very often `Prototype`. In most cases she includes at least a `clone` method. **We can use inheritance or interface, depends of the complexity!**
2. Create a concrete prototype that implement this prev. interface with it's cloning method and creates the duplication (in PHP for e.g. using the magic method `__clone()`) and handle some dependencies or pre-configurations. 

:warning: **If you must declare lot of pre-configs solve that's problem with this :** 
- inheritance if the structure is quite simple (4/5 subclasses forever !);
- using the [Prototype Registry](#how-create-a-prototype-registry-implementation) implementation just.

---
That's it ! Full demo about the basic implementation [here](#live-example).

How create a Prototype Registry implementation
--------------------------------------------
[Refactoring Guru example](https://refactoring.guru/design-patterns/prototype) :
![](https://refactoring.guru/images/patterns/diagrams/prototype/structure-prototype-cache-2x.png)

- Store pre-built objects to simplify their copy.
- Easy way to access frequently-used prototypes or complex structure.
- Use a `PrototypeRegistry` to register pre-built objects & after this registration, to map objects commonly thanks to `name -> prototype` but you can also map them by id, slug etc.

That's it ! Full demo about the registry implementation [here](#live-example).

Pros 
-----
- Very simple implementation;
- Get rid of repeated initialization code (replaced by pre-built prototypes);
- Produce complex object more conveniently;
- A supplementary alternative to inheritance when dealing with configuration presets for complex objects.
  
Cons
------
- Be aware that cloning complex objects that have a circular references might be very tricky

Live example (basic & registry)
-------------------------------

- Go to the project directory with your favorite terminal : `cd ./creational/prototype/practice` **and then choose the implementation** (`basic` or `prototype-registry`).
- Run the composer command to update the autoloader : `composer dump-autoload`
- Run the PHP built-in server : `php -S localhost:8000 -d display_errors=On`

For more info
-------------
See [Refactoring Guru explanations](https://refactoring.guru/design-patterns/prototype). 

There is plenty interesting things (applicability, code examples in most languages, illustrations, more info about pro & cons, relations with other patterns, advanced instructions that are be certified by the community).

Credits
---------
Inspired by Refactoring Guru explanations and various searches. 

