# 📦 Moonshine Lucide Icons

A package for convenient use of [lucide](https://lucide.dev/icons/) icons in Laravel Blade templates and the [Moonshine](https://github.com/moonshine-software/moonshine) admin panel.

[![Packagist Version](https://img.shields.io/packagist/v/prihod/moonshine-lucide-icons.svg)](https://packagist.org/packages/prihod/moonshine-lucide-icons)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%208.2-8892BF.svg)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/laravel-%3E%3D%2010.0-FF2D20.svg)](https://laravel.com/)
[![Moonshine Version](https://img.shields.io/badge/moonshine-%3E%3D%203.0-blue.svg)](https://github.com/moonshine-software/moonshine)

## ✨ Features

- Automatic use of Lucide icons in the Moonshine admin panel
- Access to more than 1000+ high-quality SVG icons
- Simple usage through Blade components
- Full support for customizing styles and attributes
- Icon caching capability for improved performance

## 📋 Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher
- Moonshine 3.0 or higher

## 🚀 Installation

### 1. Install the package using Composer

```bash
composer require prihod/moonshine-lucide-icons
```

### 2. Publish the icon.blade.php file from the package

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-blade
```

After executing the command, the `icon.blade.php` file will be placed in the `resources/views/vendor/moonshine/components` directory.

## 🔧 Configuration

### Basic Blade Icons Setup

Moonshine Lucide Icons uses [Blade Icons](https://github.com/blade-ui-kit/blade-icons) under the hood. For more information, check out the [Blade Icons documentation](https://github.com/blade-ui-kit/blade-icons).

### Enable Caching (Recommended)

To improve performance, it's strongly recommended to [enable caching](https://github.com/blade-ui-kit/blade-icons#caching) for icons. After publishing the `moonshine-lucide-icons.php` configuration file, you can configure the caching parameters:

```php
// config/moonshine-lucide-icons.php
return [
    // Other settings...
    
    'cache' => [
        'enabled' => true, 
        'key' => 'blade-lucide-icons',
        'ttl' => null, // unlimited storage time
    ],
    
    // Default classes and attributes...
];
```

### Advanced Configuration

If you want to configure default classes, attributes, or other parameters, publish the configuration file:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-config
```

After that, you can edit the `config/moonshine-lucide-icons.php` file.

## 🎨 Usage

### Usage in Moonshine

When using in the Moonshine admin panel, continue using the default icon component:

The package automatically connects the icon from the Lucide library if it is missing from the standard Moonshine set.

### Usage in Blade Templates

Icons can be used as self-closing Blade components:

```blade
<x-lucide-activity />
```

With CSS classes:

```blade
<x-lucide-album class="w-6 h-6 text-gray-500" />
```

With inline styles:

```blade
<x-lucide-anchor style="color: #555" />
```

With additional attributes:

```blade
<x-lucide-alert-circle 
    class="text-red-500"
    width="24"
    height="24"
    stroke-width="1.5"
/>
```

### Dynamic Icons

You can use dynamic icon names:

```blade
@php
    $iconName = 'home';
@endphp

<x-dynamic-component 
    component="lucide-{{ $iconName }}" 
    class="w-6 h-6" 
/>
```

### Using SVGs as Assets

If you prefer to use the original SVG icons as assets:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons --force
```

After that, you can use them in your views:

```blade
<img src="{{ asset('vendor/moonshine-lucide-icons/cloud-moon.svg') }}" width="24" height="24" />
```

## 🧠 IDE Hints

For auto-suggestions of icon names in IntelliJ IDEA and PhpStorm, use the [MetaStorm](https://plugins.jetbrains.com/plugin/26121-metastorm) plugin.

## 📚 Lucide Documentation

You can find a complete list of available icons on the official [Lucide Icons](https://lucide.dev/icons/) website.

## 🤝 Contributing

If you'd like to contribute to the project's development, please create a Pull Request with your changes.