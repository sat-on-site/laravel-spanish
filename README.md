# laravel-spanish
Traducción al castellano del scaffolding de Laravel 8 con livewire

## Instalación

Para la instalación de este paquete usaremos composer:

```bash
composer require satonsite/spanish
```

Una vez que ya tenemos el paquete integrado en nuestro sistema, pasamos a su despliegue. Para ello deberemos tener instaldo NPM por lo que ejecutaremos si no lo habiamos hecho todavia.

```bash
npm install
```

E instalamos los archivos de traducción con

```bash
php artisan satonsite:install-lang
```

Con ello habremos añadio la subcarpeta 'es' a 'resources\lang' con los archivos para los mensajes de validación y el archivo 'es.json' para los textos de las plantillas.
