# 📦 Moonshine Lucide Icons

Пакет для удобного использования иконок [Lucide](https://lucide.dev/icons/) в Laravel и админ‑панели [Moonshine](https://github.com/moonshine-software/moonshine).

[![Packagist Version](https://img.shields.io/packagist/v/prihod/moonshine-lucide-icons.svg)](https://packagist.org/packages/prihod/moonshine-lucide-icons)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%208.2-8892BF.svg)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/laravel-%3E%3D%2010.0-FF2D20.svg)](https://laravel.com/)
[![Moonshine Version](https://img.shields.io/badge/moonshine-%3E%3D%203.0-blue.svg)](https://github.com/moonshine-software/moonshine)

---

## ✨ Возможности

- Поддержка **Lucide Icons** с автоподключением в Moonshine
- Более **1000+ SVG-иконок**
- Простое использование через Blade-компоненты
- Динамические иконки `<x-dynamic-component>`
- Возможность кэширования для высокой производительности
- Поддержка Moonshine **v3** и **v4**

---

## 📋 Требования

- PHP 8.2+
- Laravel 10+
- Moonshine 3.0+ (поддерживается также v4)

---

## 🚀 Установка

Установите пакет:

```bash
composer require prihod/moonshine-lucide-icons
```

---

## 🔧 Публикация файлов

### Публикация Blade-шаблона `icon.blade.php`

Используйте:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-blade
```

Файл будет размещён по адресу:

```
resources/views/vendor/moonshine/components/icon.blade.php
```

---

## 🔄 Обновление пакета

Если вы обновили:

- пакет `prihod/moonshine-lucide-icons`
- или Moonshine с 3.x до 4.x

рекомендуется выполнить:

```bash
php artisan vendor:publish --tag=moonshine-lucide-icons-blade --force
```

Это обновит шаблон в соответствии с текущей версией Moonshine.

---

## 🎨 Использование

### В Moonshine

Компонент иконок Moonshine будет автоматически использовать Lucide, если иконка в стандартном наборе отсутствует.

### В Blade

```blade
<x-lucide-activity />
```

С классами:

```blade
<x-lucide-album class="w-6 h-6 text-gray-500" />
```

Со стилями:

```blade
<x-lucide-anchor style="color: #555" />
```

С атрибутами:

```blade
<x-lucide-alert-circle width="24" height="24" stroke-width="1.5" />
```

### Динамические иконки

```blade
@php $icon = 'home'; @endphp
<x-dynamic-component component="lucide-{{ $icon }}" class="w-6 h-6" />
```

---

## 🧠 Подсказки в IDE

Для автокомплита иконок используйте плагин:  
👉 https://plugins.jetbrains.com/plugin/26121-metastorm

---

## 📚 Документация Lucide

👉 https://lucide.dev/icons/

---

## 🤝 Вклад в развитие

PR приветствуются!