# 📦 Moonshine Lucide Icons

A package for convenient usage of [Lucide](https://lucide.dev/icons/) icons in Laravel and the [Moonshine](https://github.com/moonshine-software/moonshine) admin panel.

[![Packagist Version](https://img.shields.io/packagist/v/prihod/moonshine-lucide-icons.svg)](https://packagist.org/packages/prihod/moonshine-lucide-icons)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%208.2-8892BF.svg)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/laravel-%3E%3D%2010.0-FF2D20.svg)](https://laravel.com/)
[![Moonshine Version](https://img.shields.io/badge/moonshine-%3E%3D%203.0-blue.svg)](https://github.com/moonshine-software/moonshine)

---

## ✨ Features

- Full support for **Lucide Icons** in Moonshine
- 1000+ SVG icons
- Simple usage via Blade components
- Dynamic icon rendering `<x-dynamic-component>`
- Optional icon caching
- Supports Moonshine **v3** and **v4**

---

## 📋 Requirements

- PHP 8.2+
- Laravel 10+
- Moonshine 3.0+ (v4 supported as well)

---

## 🚀 Installation

```bash
composer require prihod/moonshine-lucide-icons
```

---

## 🔧 Publishing Files

### Publish the Blade template `icon.blade.php`

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-blade
```

Target path:

```
resources/views/vendor/moonshine/components/icon.blade.php
```

---

## 🔄 Updating the package

If you update:

- `prihod/moonshine-lucide-icons`
- or Moonshine from 3.x → 4.x

run:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-blade --force
```

This ensures the icon component matches the current Moonshine version.

---

## 🎨 Usage

### In Moonshine

Moonshine automatically uses Lucide icons when the requested icon is not available in the default set.

### In Blade templates

```blade
<x-lucide-activity />
```

With classes:

```blade
<x-lucide-album class="w-6 h-6 text-gray-500" />
```

With styles:

```blade
<x-lucide-anchor style="color: #555" />
```

With additional attributes:

```blade
<x-lucide-alert-circle width="24" height="24" stroke-width="1.5" />
```

### Dynamic icons

```blade
@php $icon = 'home'; @endphp
<x-dynamic-component component="lucide-{{ $icon }}" class="w-6 h-6" />
```

---

## 🧠 IDE Hints

For icon autocompletion, use:  
👉 https://plugins.jetbrains.com/plugin/26121-metastorm

---

## 📚 Lucide Documentation

👉 https://lucide.dev/icons/

---

## 🤝 Contributing

Pull Requests are welcome!
