<!-- MoonShine v4 -->

@php
    use Illuminate\Support\Str;
@endphp

@props([
    'path' => '',
    'icon' => '',
    'size' => 5,
    'size' => '',
    'color' => '',
    'class' => $attributes->get('class'),
])

@php
    $checkPath = $path ?? 'moonshine::icons';
@endphp

<div {{ $attributes->class(array_filter([
    'icon-wrapper',
    $size ? "size-$size" : null,
    empty($color) ? 'text-current' : "text-$color",
])) }}>
    @if($slot?->isNotEmpty())
        {!! $slot !!}
    @elseif($icon && View::exists("$checkPath.$icon"))
        @include("moonshine::icons.$icon", array_merge([
            'size' => $size,
            'color' => $color,
            'icon' => $icon,
            'path' => $path,
        ]))
    @elseif($icon)
        {!! svg('lucide-' .Str::kebab($icon), $class, [
               'style' => $color ? "color: $color;" : '',
         ])->toHtml() !!}
    @endif
</div>