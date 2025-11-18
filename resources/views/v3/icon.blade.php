<!-- MoonShine v3 -->

@php
    use Illuminate\Support\Str;
@endphp

@props([
    'icon',
    'size' => 5,
    'color' => '',
    'class' => $attributes->get('class'),
    'path' => '',
])

@php
    $checkPath = $path ?? 'moonshine::icons';
@endphp

<div {{ $attributes->class([
    'text-current',
    'w-' . ($size ?? 5),
    'h-' . ($size ?? 5),
    "text-$color" => !empty($color),
]) }}>

    @if($slot?->isNotEmpty())
        {!! $slot !!}
    @elseif($icon && View::exists("$checkPath.$icon"))
        @include("moonshine::icons.$icon", array_merge([
            'size' => $size,
            'color' => $color,
            'v3.icon' => $icon,
            'path' => $path,
        ]))
    @elseif($icon)
        {!! svg('lucide-' .Str::kebab($icon), $class, [
              'style' => $color ? "color: $color;" : '',
          ])->toHtml() !!}
    @endif
</div>
