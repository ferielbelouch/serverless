<?php
function main(array $args) : array {
    $originalValue = $args['original'] ?? 0;
    $doubledValue = $args['doubled'] ?? 0;

    return [
        'original' => $originalValue,
        'doubled' => $doubledValue
    ];
}
?>