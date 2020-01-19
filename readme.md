# Desafío Capicuas

https://www.programando.org/blog/2020/01/19/desafio-capicuas.html

* Lenguaje PHP (al menos 7.1)
* Test unitarios con PHPUnit

# Requerimientos
* php 7.1
* [composer](https://getcomposer.org/)

# Pasos de instalación
* git clone http://github.com/rodrigore/desafio-capicuas
* cd desafio-capicuas
* composer install
* ./vendor/bin/phpunit tests/

# Comentarios

Hice una funcion que obtiene el valor *capicua* a partir de un numero (función **get**) e hice otra que me genera las capicuas(funcion **generate) para obtener los valores del rango 11 al 99.

El resultado de las capicuas desde el numero 11 al 99 se puede ver en el archivo [test/CapicuaTest.php](https://github.com/rodrigore/desafio-capicuas/blob/branch/tests/CapicuaTest.php)
