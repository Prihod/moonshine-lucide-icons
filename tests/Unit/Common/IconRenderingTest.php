<?php

it('compiles a single icon', function (): void {
    $result = svg('lucide-camera')->toHtml();

    expect($result)->toMatchSnapshot();
});

it('can add classes to icons', function (): void {
    $result = svg('lucide-camera', 'w-6 h-6 text-gray-500')->toHtml();

    expect($result)->toMatchSnapshot();
});

it('can add styles to icons', function (): void {
    $result = svg('lucide-camera', ['style' => 'color: #555'])->toHtml();

    expect($result)->toMatchSnapshot();
});
