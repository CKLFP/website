<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O campo :attribute tem que ser aceite.',
    'accepted_if' => 'O campo :attribute tem que ser aceite quando :other é :value.',
    'active_url' => 'O campo :attribute não é um URL válido.',
    'after' => 'O campo :attribute tem que ser uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute tem que ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo :attribute só pode conter letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números, ifens e underscores.',
    'alpha_num' => 'O campo :attribute só pode conter letras e números.',
    'array' => 'O campo :attribute tem que ser um array.',
    'before' => 'O campo :attribute tem que ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute tem que ser uma data anterior ou igual a :date',
    'between' => [
        'array' => 'O campo :attribute tem que ter items intermérios entre :min e :max',
        'file' => 'O campo :attribute tem que estar entre :min e :max kilobytes.',
        'numeric' => 'O campo :attribute tem que estar entre :min e :max.',
        'string' => 'O campo :attribute tem que conter no mínimo :min e no máximo :max carateres.',
    ],
    'boolean' => 'O campo :attribute tem que ser verdadeiro ou falso.',
    'confirmed' => 'Os campos :attribute e :attribute de confirmação não coincidem.',
    'current_password' => 'Password incorreta.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute tem que ser uma data igual a :date.',
    'date_format' => 'O campo :attribute não coincide com o formato :format.',
    'declined' => 'O campo :attribute tem que ser regeitado.',
    'declined_if' => 'O campo :attribute tem que ser regeitado quando o campo :other é :value.',
    'different' => 'O campos :attribute e :other têm que ser diferentes.',
    'digits' => 'O campo :attribute tem que ter :digits digitos.',
    'digits_between' => 'O campo :attribute tem que ter :min e :max digitos.',
    'dimensions' => 'O campo :attribute tem dimenções de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'doesnt_end_with' => 'O campo :attribute não pode terminar com um dos seguintes valores: :values.',
    'doesnt_start_with' => 'O campo :attribute não pode começar com um dos seguintes valores: :values.',
    'email' => 'O campo :attribute tem que ser um endereço de email válido.',
    'ends_with' => 'O campo :attribute tem que terminar com um dos seguintes valores: :values.',
    'enum' => 'O campo selecionado :attribute é inválido.',
    'exists' => 'O campo selecionado :attribute é inválido.',
    'file' => 'O campo :attribute tem que ser um ficheiro.',
    'filled' => 'O campo :attribute tem que ter um valor.',
    'gt' => [
        'array' => 'O campo :attribute tem que ter mais que :value items.',
        'file' => 'O campo :attribute tem que ser maior que :value kilobytes.',
        'numeric' => 'O campo :attribute tem que ser maior que :value.',
        'string' => 'O campo :attribute tem que ter mais de :value carateres.',
    ],
    'gte' => [
        'array' => 'O campo :attribute tem que ter :value items ou mais.',
        'file' => 'O campo :attribute tem que ser maior ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute tem que ser maior ou igual a :value.',
        'string' => 'O campo :attribute tem que ser maior ou igual a :value carateres.',
    ],
    'image' => 'O campo :attribute tem que ser uma imagem.',
    'in' => 'O campo selecionado :attribute é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute tem que ser um número inteiro.',
    'ip' => 'O campo :attribute tem que ser um endereço IP válido.',
    'ipv4' => 'O campo :attribute tem que ser um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute tem que ser um endereço IPv6 válido.',
    'json' => 'O campo :attribute tem que ser uma string JSON válida.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'O campo :attribute tem que ser um MAC address válido.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'min_digits' => 'O campo :attribute tem que ter pelo menos :min digitos.',
    'multiple_of' => 'O campo :attribute tem que ser um múltiplo de :value.',
    'not_in' => 'O campo selecionado :attribute é inválido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute tem que ser um número.',
    'password' => [
        'letters' => 'O campo :attribute tem que conter pelo menos uma letra.',
        'mixed' => 'O campo :attribute tem que conter pelo menos uma letra minúscula e uma maiúscula.',
        'numbers' => 'O campo :attribute tem que conter pelo menos um número.',
        'symbols' => 'O campo :attribute tem que conter pelo menos um carater especial.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'O campo :attribute tem que estar presente.',
    'prohibited' => 'O campo :attribute é proibído.',
    'prohibited_if' => 'O campo :attribute é proibído quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibído a menos que :other seja :values.',
    'prohibits' => 'O campo :attribute proíbe :other de estar presente.',
    'regex' => 'O campo :attribute tem um formato inválido.',
    'required' => 'O campo :attribute é de preenchimento obrigatório.',
    'required_array_keys' => 'O campo :attribute tem que conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute é obrigatório quando :other for aceite.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other estiver em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values estiver presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estiverem presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não estiver presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estiver presente.',
    'same' => 'Os campos :attribute e :other têm que ser coincidentes.',
    'size' => [
        'array' => 'O campo :attribute tem que conter :size items.',
        'file' => 'O campo :attribute tem que ter :size kilobytes.',
        'numeric' => 'O campo :attribute tem que ser :size.',
        'string' => 'O campo :attribute tem que ter :size carateres.',
    ],
    'starts_with' => 'O campo :attribute tem que iniciar com um dos seguinte valores: :values.',
    'string' => 'O campo :attribute tem que ser uma string.',
    'timezone' => 'O campo :attribute tem que ser uma "timezone" válida.',
    'unique' => 'O campo :attribute já existe nos nossos registos.',
    'uploaded' => 'O campo :attribute falhou o upload.',
    'url' => 'O campo :attribute tem que ser URL válido.',
    'uuid' => 'O campo :attribute tem que ser UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
