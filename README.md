```
cd cap*/
docker run -d -p 80:80 -v "$PWD":/var/www/html --name oop-php php:7.0-apache
docker rm -f $(docker ps -aq)
```

# Chapter

## 1 - Introduction
## 2 - How to create classes and objects
## 3 - The $this keyword
## 4 - Chaining methods and properties
## 5 - Access modifiers: public vs private
## 6 - Magic methods and constants unveiled
## 7 - Inheritence in object oriented programming
## 8 - Abstract classes and methods
## 9 - Interfaces - the next level of abstraction
## 10 - Polymorphism in PHP
## 11 - Type hinting
## 12 - Type hinting for interfaces
## 13 - Static methods and properties
## 14 - Traits and code inclusion
## 15 - Namespaces and code integration
## 16 - Dependency injection
## 17 - What are exceptions and how to handle them?
## 18 - PDO - PHP database extension
## 19 - How to use Packagist and Composer to integrate existing code libraries into your PHP apps?
## 20 - How to autoload PHP classes the Composer way?
## 21 - MVC and code organization
## 22 - Epilogue