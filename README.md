# Object-Oriented Programming POO

## An analysis about the Objects, Classes and Methods that surround an application like Uber

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#Overviwe">Overviwe</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
    </li>
    <li><a href="#Topics-reviewed">Topics reviewed</a></li>
    <li><a href="#Basics">Basics</a></li>
    <li><a href="#Acquired-skills">Acquired skills</a></li>
  </ol>
</details>



<!-- Overviwe -->
## Overviwe

In this repository you will find a brief summary of what was learned in the [platzi](https://platzi.com/cursos/oop/) course of Object-Oriented Programming also known as POO.

For the solution of problems within the development of applications, it is very useful to divide a problem into its small parts, this is modularity, where you can make an extraction and definition of the objects, classes and methods that make up an application.

This repository is divided into the following parts.
* The steps to clone the repository and be able to view it.
* The main topics seen in the course
* Some of the basics of object-oriented programming.
* Skills acquired at the end of the course.



<!-- GETTING STARTED -->
## Getting Started

## Setup

- Fork this repo
- Clone this repo

```shell
$ mkdir object-oriented-programming
$ cd object-oriented-programming
$ git clone https://github.com/DiBarrera/CursoPOOUber
```

You will find the following files:

- **Four directories**, each one about a different language, Java, JavaScript, Python and PHP.
- There are no dependencies, so nothing more is necessary than cloning it

**Tree**

```markdown
- .gitignore
JS
   |-- Account.js
   |-- Car.js
   |-- Payment.js
   |-- Route.js
   |-- UberBlack.js
   |-- UberPool.js
   |-- UberVan.js
   |-- UberX.js
   |-- index.html
   |-- index.js
Java
   |-- Account.java
   |-- Car.java
   |-- Main.java
   |-- Payment.java
   |-- Route.java
   |-- UberBlack.java
   |-- UberPool.java
   |-- UberVan.java
   |-- UverX.java
PHP
   |-- Route.php
   |-- account.php
   |-- car.php
   |-- index.php
   |-- payment.php
   |-- uberBlack.php
   |-- uberPool.php
   |-- uberVan.php
   |-- uberX.php
Python
   |-- account.py
   |-- car.py
   |-- main.py
   |-- payment.py
   |-- route.py
   |-- uberBlack.py
   |-- uberPool.py
   |-- uberVan.py
   |-- uberX.py
README.md
```

<!-- Topics reviewed -->
## Topics reviewed

The topics seen are about the analysis of the uber application, being separated in a modular way to have an understanding of object-oriented programming.
From a terminal, inside the cloned folder, you can see the commits path

### Topics

- Object Oriented Programming.
- The four pilars of the OOP:
- Encapsulation.
- Abstraction.
- Inheritance.
- Polymorphism.
- The four elements that make up the OOP paradigm:
- Classes.
- Properties.
- Methods.
- Objects.
- UML: Unified Modeling Language.



<!-- Basics -->
## Basics

### Creating classes

#### Java
```markdown
class Person {
  String name = "";
  void walkg(){}
}
``` 

#### Python
```markdown
class Person:
  name ="";
  def walkg():
``` 

#### JavaScript
```markdown
Person.prototype.walk = function() {

}
``` 

#### PHP
```markdown
class Person {
  $name = "":
  function walk(){
  }
}
``` 

### Creating Objects

#### Java
```markdown
Person person = new Person();
``` 

#### Python
```markdown
person = Person()
``` 

#### JavaScript
```markdown
var person = new Person();
``` 

#### PHP
```markdown
$person = new Person();
``` 

### Constructor

#### Java
```markdown
public Person(String name) {
  this.name = name 
}
``` 

#### Python
```markdown
def__init__(self, name):
  self.name = name
``` 

#### JavaScript
```markdown
function Person(name) {
  this.name = name
}
``` 

#### PHP
```markdown
public function__construct($name) {
  $this -> name = name;
}
``` 

### Passing the data by parameters

#### Java
```markdown
Person person = new Person("Name")
``` 

#### Python
```markdown
person = Person("Name")
``` 

#### JavaScript
```markdown
var person = new Person("Name");
``` 

#### PHP
```markdown
$person = new Person("Name");
``` 


<!-- Acquired skills -->
## Acquired skills

- Know the different OOP languages.
- Graphically represent a situation using UML.
- Analyze situations for object-oriented project development.
- Understand how objects work.
- Entender el funcionamiento de las clases.
