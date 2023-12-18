**Programmation Orientée Objet**
 ```plaintext

**OOP :** La programmation orientée objet, ou POO, est un modèle deprogrammation qui repose sur le concept de classeset d’objets. Elle est utilisée pour structurer un programme logiciel en éléments de code simples et réutilisables, généralement appelés classes,

```
____
**Les principes fondamentaux (POO)**:

* __L’encapsulation__ 

 ```plaintext

 **L’encapsulation :  présente toutes les informations importantes d’un
objet à l’intérieur de l’objet et n’expose que les informations choisies
au monde extérieur.

```

* __L’abstraction__ 

 ```plaintext

 *L’abstraction : cette class (abstract class) ne contient pas d'objets et tous les methodes sont des signateurs qui ont pas le body   .

```
* __L’héritage__ 

 ```plaintext

 **L’héritage : c'est un principe qui permet a chaque class-fils d'heriter les atributs de la class-mére et aussi on travailler par le trait .

```
* __Le polymorphisme__ 

 ```plaintext

 **polymorphisme : consiste à concevoir des objets qui partagent des comportements, ce qui permet de traiter les objets de différentes manières. Il s’agit de la capacité de présenter la même interface pour différents moyens ou  types de données sous-jacents.

```
 
___
**definition d'une class**

 ```plaintext

 **class :** Une classe est une définition qui contient le nom des propriétés qu'on pourra manipuler ainsi que des méthodes. la structure d'un objet, c'est-à-dire la déclaration de l'ensemble des entités qui composeront un objet.

```
 **exemple d'une class **

```php
class persons { 
    public $person_id;
    public $person_name;
    public $person_email;
    public $person_phone;
}
```
____
**definition d'un constracter**

 ```plaintext

 **constracteur :** Les constructeurs sont des méthodes ordinaires qui sont appelées lors de l'instanciation de leur objet correspondant magic method il lit la premiere des choses.

```


 **exemple constructeur**

```php
 function __construct($person_id, $person_name, $person_email, $person_phone) {
        $this->person_id = $person_id;
        $this->person_name = $person_name;
        $this->person_email = $person_email;
        $this->person_phone = $person_phone;
    }
```
___
**definition d'un objet**

 ```plaintext

 **objet :** L'objet est une application concrète du plan, c'est une représentation de la classe. Pour se servir du code déclaré dans une classe, il faut (dans la majorité des cas) créer un objet..

```


 **exemple objet**

```php
 $object_person = new persons(1,"yassin","yassinelouissi67@gmail.com","0611029272");

```
___

**definition d'un interface**

 ```interface

 **interface :**est une contract ou bien est un ensemble des methodes defins et qui est obliger a chaque class d'utiliser les mémes méthedes avec les meme quand on a faits l'implementation de l'interface la premiere s'appelle le signateur.

```
 


 **exemple interface**

```php
interface operation {
    public function addition ($nm1,$nm2);
    public function substraction ($nm1,$nm2);
    public function multipl ($nm1,$nm2);
}
//dans un autre fichier 
class salary implements operation {
      public function addition ($nm1,$nm2){
        return $nm1 + $nm2;
      }
      public function substraction ($nm1,$nm2){
        return $nm1 - $nm2;
      }
      public function multipl ($nm1,$nm2){
        return $nm1 * $nm2;
      }

}

```

___
**definition d'un traits**

 ```traits

 **traits :**est un ensemble des methodes qui est etais partager entre des class mais chaque class a une implement different a cette methode grace a cette maniere le groupe va connaisser la maniere de travail des l'interface en defenie seulement le nom de methode et ces parrametre.

```
```php
<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
//output: hello world
?>
```
___
**getters / setters**

* __getters__ 

 ```plaintext   

 **getters :c'est une methode qui nous permet d'avoir l'acces a une attribut d'une class qui private ou une attribut qui on a pas l'acces a cette att, on s'imboliser a cette dans le nom de la fonction on ecrit "getnomd'attribut" .

```
```php
<?php
class Square
{
    // default value for side
    private $side = 2.5;

    public function getSide()
    {
        return $this->side;
    }
}
$square = new Square();

echo "Side = " . $square->getSide() . "\n";
?>
```

* __setters__ 

 ```plaintext

 **getters :modifier la valeur d'une valeur return rien function void()" .

```
```php
<?php
class Table {
    private $nom;
    private $plateau = "plastique";
    private $pieds = 'plastique';
    public function setName($nom) {
        $this->nom = $nom;
    }
}
?>
```

* __PSR__ 

 ```plaintext

 **les normes php fig PSR : se sont les bons pratiques .

```
* __PSR4__ 

 ```plaintext

 **les normes php fig PSR : c'est quand on travail par namespace l'objectifs de donner une bonne structure de notre code .

```
* __namespace__ 

 ```plaintext

 **namespace : c'est quand on nommer pleusieurs class de meme nom c'est ca le cas quand on utilise,il separe entre les classes qui ont le meme nom .

```
* __overrate__ 

 ```plaintext

 **namespace :c'est quand on change type de return d'une methode dans class child de la class parent  .

```
* __overloading__ 

 ```plaintext

 **namespace :on travail par  __call call quand  c'est comme les conditions la fonctionne elle est adapter avec le nombre des valeurs que j'ai entres voici l'exemple il explique tous   .

```
 **exemple overloading**
```php
<?php

namespace random;

class Car {
    public function __call($method_name, $arguments) {
        $argumentCount = count($arguments);
        if ($method_name === "sayName") {
            switch ($argumentCount) {
                case 0;
                echo "no arguments";
                break;
                case 1;
                $this->sayOneName($arguments[0]);
                break;
                case 2;
                $this->sayTwoNames($arguments[0], $arguments[1]);
                break;
                default:
                echo "incorrect num of args";
                break;
            }
        }
    }
    private function sayOneName ($name) {
        echo $name;
    }
    private function sayTwoNames ($name1, $name2) {
        echo $name1 . " " . $name2;
    }
}

$car = new Car();
$car->sayName("Yassine", "Fatim zahra");
```

* __super__ 

 ```plaintext

 **super :par exemple parents c'est quand on travail avec les methods et les attributs des classes parents, il ya parents et il ya self  .

```

* __l'interfaces et l'abstracrt__ 

 ```plaintext

 **la differences :dans l'interfaces on ne peut pas creer des attributs et et les interfaces nous obliger a travailler par tous les methodes declarer dans l'interface mais dans les classes abstracts on peut travailler on peut travailler par les methodes quand veut  .

```
* __autoload__ 

 ```plaintext

 **autoload : il remplace require du files  .

```
```php
spl_autoload_register(function ($clas)){
    require_once $class .'.php';
}
function autoloadTwo($class){
    require "/dir-two/".'.$class'
}
//un autre exemple 
//
//
//un autre exemple
function autoloadOne($class){
    require "/dir-one/".$class .".php";
}
function autoloadTwo($class){
    require "/dir-two/".$class .".php";
}
//une fonction de librairie
spl_autolload_register("autoloadOne");
spl_autolload_register("autoloadTwo");
// un autre exemple
// 
// 
// un autre exemple
<?Php
spl_autoload_register(function($class){
    if(file_exists($class .".php")){
    require "classes/" .$class."php";
    }
});
 



```