# 📦 Moonshine Lucide Icons

Пакет для удобного использования иконок [lucide](https://lucide.dev/icons/) в Blade-шаблонах Laravel и админ-панели [Moonshine](https://github.com/moonshine-software/moonshine).

[![Packagist Version](https://img.shields.io/packagist/v/prihod/moonshine-lucide-icons.svg)](https://packagist.org/packages/prihod/moonshine-lucide-icons)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%208.2-8892BF.svg)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/laravel-%3E%3D%2010.0-FF2D20.svg)](https://laravel.com/)
[![Moonshine Version](https://img.shields.io/badge/moonshine-%3E%3D%203.0-blue.svg)](https://github.com/moonshine-software/moonshine)

## ✨ Возможности

- Автоматическое использование иконок Lucide в админ-панели Moonshine
- Доступ к более чем 1000+ качественных SVG-иконок
- Простое использование через Blade-компоненты
- Полная поддержка настройки стилей и атрибутов
- Возможность кэширования иконок для улучшения производительности

## 📋 Требования

- PHP 8.2 или выше
- Laravel 10.0 или выше
- Moonshine 3.0 или выше

## 🚀 Установка

### 1. Установите пакет с помощью Composer

```bash
composer require prihod/moonshine-lucide-icons
```

### 2. Опубликуйте файл icon.blade.php из пакета

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-blade
```

После выполнения команды файл `icon.blade.php` будет размещён в каталоге `resources/views/vendor/moonshine/components`.

## 🔧 Конфигурация

### Базовая настройка Blade Icons

Moonshine Lucide Icons использует [Blade Icons](https://github.com/blade-ui-kit/blade-icons) под капотом. Для получения дополнительной информации ознакомьтесь с [документацией Blade Icons](https://github.com/blade-ui-kit/blade-icons).

### Включение кэширования (рекомендуется)

Для повышения производительности настоятельно рекомендуется [включить кэширование](https://github.com/blade-ui-kit/blade-icons#caching) иконок. После публикации файла конфигурации `moonshine-lucide-icons.php`, вы можете настроить параметры кэширования:

```php
// config/moonshine-lucide-icons.php
return [
    // Другие настройки...
    
    'cache' => [
        'enabled' => true, 
        'key' => 'blade-lucide-icons',
        'ttl' => null, // неограниченное время хранения
    ],
    
    // Классы и атрибуты по умолчанию...
];
```

### Расширенная настройка

Если вы хотите настроить классы по умолчанию, атрибуты или другие параметры, опубликуйте файл конфигурации:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-config
```

После чего вы сможете редактировать файл `config/moonshine-lucide-icons.php`.

## 🎨 Использование

### Использование в Moonshine

При использовании в админ-панели Moonshine, продолжайте использовать компонент иконок по умолчанию:

Пакет автоматически подключает иконку из библиотеки Lucide, если она отсутствует в стандартном наборе Moonshine.

### Использование в Blade-шаблонах

Иконки можно использовать как самозакрывающиеся Blade-компоненты:

```blade
<x-lucide-activity />
```

С добавлением CSS-классов:

```blade
<x-lucide-album class="w-6 h-6 text-gray-500" />
```

Со встроенными стилями:

```blade
<x-lucide-anchor style="color: #555" />
```

С дополнительными атрибутами:

```blade
<x-lucide-alert-circle 
    class="text-red-500"
    width="24"
    height="24"
    stroke-width="1.5"
/>
```

### Динамические иконки

Вы можете использовать динамические имена иконок:

```blade
@php
    $iconName = 'home';
@endphp

<x-dynamic-component 
    component="lucide-{{ $iconName }}" 
    class="w-6 h-6" 
/>
```

### Использование SVG как ассетов

Если вы предпочитаете использовать исходные SVG-иконки как ассеты:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons --force
```

После чего вы можете использовать их в своих представлениях:

```blade
<img src="{{ asset('vendor/moonshine-lucide-icons/cloud-moon.svg') }}" width="24" height="24" />
```

## 🧠 Подсказки в IDE

Для автоподсказок названий иконок в IntelliJ IDEA и PhpStorm используйте плагин [MetaStorm](https://plugins.jetbrains.com/plugin/26121-metastorm).

## 📚 Документация Lucide

Полный список доступных иконок вы можете найти на официальном сайте [Lucide Icons](https://lucide.dev/icons/).

## 🤝 Вклад в развитие

Если вы хотите внести свой вклад в развитие проекта, пожалуйста, создайте Pull Request с вашими изменениями.