<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen múltiples versiones como
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes aquí.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'La :attribute no es una URL valida.',
    'after' => 'La :attribute debe ser una fecha posterior :date.',
    'after_or_equal' => 'La :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo puede contener letras.',
    'alpha_dash' => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solo puede contener letras y números.',
    'array' => 'El campo :attribute debe ser una colección.',
    'before' => 'La :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'The :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file' => 'El archivo :attribute debe tener entre :min y :max kilobytes.',
        'string' => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array' => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => ':attribute no corresponde a una fecha válida.',
    'date_equals' => ':attribute debe ser una fecha igual a :date.',
    'date_format' => ':attribute no corresponde con el formato de fecha :format.',
    'different' => 'Los campos :attribute y :other deben ser diferentes.',
    'digits' => ':attribute debe ser un número de :digits dígitos.',
    'digits_between' => ':attribute debe ser un número de entre :min y :max dígitos.',
    'dimensions' => ':attribute tiene unas dimensiones de imagen inválidas.',
    'distinct' => ':attribute tiene un valor duplicado.',
    'email' => ':attribute debe ser una dirección de correo válida.',
    'ends_with' => ':attribute debe finalizar con alguno de los siguientes valores: :values.',
    'exists' => 'El campo :attribute seleccionado no existe.',
    'file' => ':attribute debe ser un archivo.',
    'filled' => ':attribute debe tener un valor.',
    'gt' => [
        'numeric' => ' :attribute debe ser mayor o igual a :value.',
        'file' => 'El archivo :attribute debe ocupar :value o más kilobytes.',
        'string' => ':attribute debe tener :value o más caracteres.',
        'array' => ':attribute de tener :value o más elementos.',
    ],
    'gte' => [
        'numeric' => ':attribute debe ser mayor o igual que :value.',
        'file' => ':attribute debe ocupar :value o más kilobytes.',
        'string' => ':attribute debe contener :value o mas caracteres.',
        'array' => ':attribute debe tener :value elementos o más.',
    ],
    'image' => ':attribute debe ser un imagen.',
    'in' => 'El campo :attribute seleccionado no es válido.',
    'in_array' => ':attribute no existe en :other.',
    'integer' => ':attribute debe ser un entero.',
    'ip' => ':attribute debe ser un dirección IP válida.',
    'ipv4' => ':attribute debe ser una direccón IPv4 valida.',
    'ipv6' => ':attribute debe ser una direccón IPv6 valida.',
    'json' => ':attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => ':attribute debe ser menor a :value.',
        'file' => ':attribute debe ocupar menos de :value kilobytes.',
        'string' => ':attribute debe tener menos de :value caracteres.',
        'array' => ':attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => ':attribute debe ser menor o igual a :value.',
        'file' => ':attribute debe ocupar :value o menos kilobytes.',
        'string' => ':attribute debe contener :value o menos caracteres.',
        'array' => ':attribute debe contener :value o menos elementos.',
    ],
    'max' => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file' => ':attribute no debería ocupar más de :max kilobytes.',
        'string' => ':attribute no debería tener :max caracteres.',
        'array' => ':attribute debería tener más de :max elementos.',
    ],
    'mimes' => ':attribute debe ser un archivo de tipo : :values.',
    'mimetypes' => ':attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => ':attribute de ser al menos :min.',
        'file' => ':attribute debe ocupar al menos :min kilobytes.',
        'string' => ':attribute debe tener al menos :min caracteres.',
        'array' => ':attribute debe tener al menos :min elementos.',
    ],
    'not_in' => 'el campo :attribute seleccionado es inválido.',
    'not_regex' => 'El formato para :attribute no es válido.',
    'numeric' => ':attribute debería ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => ':attribute debe estar presente.',
    'regex' => 'El formato para :attribute no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => ':attribute debe ser :size.',
        'file' => ':attribute debe ocupar :size kilobytes.',
        'string' => ':attribute debe tener :size caracteres.',
        'array' => ':attribute debe tener :size elementos.',
    ],
    'starts_with' => ':attribute debe comenzar por uno de los siguientes valores: :values.',
    'string' => ':attribute debe ser una cadena de caracteres.',
    'timezone' => ':attribute debe ser una zona horaria válida.',
    'unique' => 'El valor del campo :attribute ya está en uso.',
    'uploaded' => ':attribute no se pudo subir.',
    'url' => ':attribute no tiene un formato válido.',
    'uuid' => ':attribute debe ser un UUID válido.',



    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos usando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especificar una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar nuestro marcador de posición de atributo
    | con algo más fácil de leer, como "Dirección de correo electrónico" en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que nuestro mensaje sea más expresivo.
    |
    */

    'attributes' => [],

];
