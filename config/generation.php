<?php

$svgNormalization = static function (string $fileIcon, array $config): void {
    $doc = new DOMDocument();
    $doc->load($fileIcon);
    $svgElement = $doc->getElementsByTagName('svg')[0];
    $svgElement->removeAttribute('width');
    $svgElement->removeAttribute('height');

    if ($svgElement->hasAttribute('stroke-width') && $svgElement->getAttribute('stroke-width') === '2') {
        $svgElement->setAttribute('stroke-width', '1.5');
    }

    $doc->save($fileIcon);

    $fileLines = file($fileIcon);
    array_shift($fileLines);

    $lastKey = \count($fileLines) - 1;
    $fileLines[$lastKey] = trim((string) $fileLines[$lastKey]);
    file_put_contents($fileIcon, $fileLines);
};

return [
    [
        'source' => __DIR__ . '/../lucide/icons',
        'destination' => __DIR__ . '/../resources/svg',
        'after' => $svgNormalization,
        'safe' => true,
    ],
];
