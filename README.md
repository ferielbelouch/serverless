# serverless

#1 Création de l'action qui génère une valeur aléatoire entre 0 et 100 en javascript

// Création du fichier "generateRandomValue.js" 

> echo "function main(params) {
    const randomValue = Math.floor(Math.random() * 100); // Génère une valeur aléatoire entre 0 et 99
    return { original: randomValue };
}

module.exports = {
    main: main
};
" > generateRandomValue.js

// Création de l'action "RandomValue"

> wsk action create RandomValue generateRandomValue.js





#2 Création de la deuxième action en python qui double la valeur : 

// Création du fichier "double.py"

> echo "def main(params):
    original_value = params.get('original', 0)
    doubled_value = original_value * 2
    return {'original': original_value, 'doubled': doubled_value}
" > double.py

// Création de l'action "double"

> wsk action create double double.py





#3 Création de la troisièmpe action qui retourne un dictionnaire en php

// Création du fichier "dictionnaire.php"

> echo "<?php
function main(array $args) : array {
    $originalValue = $args['original'] ?? 0;
    $doubledValue = $args['doubled'] ?? 0;
    return [
        'original' => $originalValue,
        'doubled' => $doubledValue
    ];
}
?>
" > dictionnaire.php

// Création de l'action "dictionnaire"

>  wsk action create dictionnaire dictionnaire.php --kind php:7.4




#4 Création de la séquence "Sequence" qui utilise les trois actions

> wsk action create Sequence --sequence RandomValue,double,dictionnaire

// Invocation de la séquence en CLI

> wsk action invoke Sequence --result 

// Invocation de la séquence en web avec CURL

Curl POST 
