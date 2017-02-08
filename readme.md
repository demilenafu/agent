# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Esta aplicación fue desarrollada en LARAVEL 5.2
Utiliza el paquete "Google Geocoding API for Laravel" (https://github.com/jotafurtado/geocode)

## Especificaciones de la aplicación

Es necesario dividir una lista de contactos en 2 grupos (Agente 1 y Agente 2) para llamarlos. La regla para dividir los contactos se basa en su ubicación mediante el parámetro de código postal. 

Los Agentes:
● Id. De agente, nombre, código postal.
● 2 registros (Agente 1 y Agente 2)

Los contactos:
● Identificación de contacto, nombre, código postal.
● Lista proporcionada con la prueba (CONTACTS LIST CSV).

La lista de contactos se almacena directamente en una carpeta llamada "archivos" de tipo csv, de tal manera que si se necesita cambiar esta información, se puede reemplazar el archivo existente.

La aplicación muestra una vista principal con 2 entradas para escribir los códigos postales de los 2 agentes

(Agente 1 y Agente 2).

● Un botón con la etiqueta "MATCH" para activar el algoritmo.
● Al final del proceso de coincidencia tiene que mostrar una tabla con 3 columnas (AgentId, Nombre de contacto, Código postal de contacto) con los contactos asignados a cada agente.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
