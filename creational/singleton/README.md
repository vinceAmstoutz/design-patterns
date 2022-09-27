
Singleton
=========
Family : Creational Design Patterns

Why use a Singleton ? 
---------------------

1. Ensure that a class has just a single instance 
2. Provide a global access point to that instance

=> stop violating the Single Responsibility Principle

Typical use case
----------------
A class to manage the app config (environnement parameters & variables for e.g).

How create a Singleton
----------------------
1. Make the default constructor private to prevent instantiation.
2. Create a static creation method (e.g. `getInstance()`) thats acts as a constructor or as a getter. In fact, this method create an instance by calling de constructor only if there is no instance ans save it in a static field.Otherwise, this method return the cached object.

Pros
----
- Sure that a class have only one single instance;
- Global access point to that instance;
- Singleton object is initialized only for the first time (perfs!)
  
Cons
----
- Violate the Single Responsibility Principle by solving two problems at the same time;
- Can mask bad design;
- Requires special treatment in a multithread environnement because several objects won't create a singleton object several times;
- It may be difficult to unit test the client code of the Singleton because many test frameworks rely on inheritance when producing mock objects. Since the constructor of the singleton class is private and overriding static methods is impossible in most languages, you will need to think of a creative way to mock the singleton. Or just don’t write the tests. Or don’t use the Singleton pattern.

Live example 
------------

- Go to the project directory with your favorite terminal : `cd ./creational/singleton/practice`
- Run the composer command to update the autoloader : `composer dump-autoload`
- Run the PHP built-in server : `php -S localhost:8000 -d display_errors=On`

For more info
-------------
See [Refactoring Guru explanations](https://refactoring.guru/design-patterns/singleton). 

There is plenty interesting things (applicability, code examples in most languages, illustrations, more info about pro & cons, relations with other patterns, advanced instructions that are be certified by the community).

Credits
---------
Inspired by Refactoring Guru explanations and various searches. 

