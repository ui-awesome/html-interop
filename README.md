<!-- markdownlint-disable MD041 -->
<p align="center">
    <picture>
        <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/ui-awesome/.github/refs/heads/main/logo/ui_awesome_dark.png">
        <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/ui-awesome/.github/refs/heads/main/logo/ui_awesome_light.png">
        <img src="https://raw.githubusercontent.com/ui-awesome/.github/refs/heads/main/logo/ui_awesome_dark.png" alt="UI Awesome" width="150px">
    </picture>
    <h1 align="center">Html interop</h1>
    <br>
</p>
<!-- markdownlint-enable MD041 -->

<p align="center">
    <strong>Common interfaces and type-safe enums for HTML tag interoperability</strong><br>
    <em>Provides standardized contracts and tag collections for block, inline, list, root, table, and void elements.</em>
</p>

## Features

<picture>
    <source media="(min-width: 768px)" srcset="./docs/svgs/features.svg">
    <img src="./docs/svgs/features-mobile.svg" alt="Feature Overview" style="width: 100%;">
</picture>

### Installation

```bash
composer require ui-awesome/html-interop:^0.2
```

### Quick start

#### Using block-level HTML tags

Access standardized block-level tag names through the `Block` enum.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\Block;

echo Block::DIV->value;
// 'div'

echo Block::ARTICLE->value;
// 'article'

echo Block::SECTION->value;
// 'section'
```

#### Using inline-level HTML tags

Access standardized inline-level tag names through the `Inline` enum.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\Inline;

echo Inline::SPAN->value;
// 'span'

echo Inline::STRONG->value;
// 'strong'

echo Inline::A->value;
// 'a'
```

#### Using void (self-closing) HTML tags

Access standardized void element tag names through the `Voids` enum.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\Voids;

echo Voids::IMG->value;
// 'img'

echo Voids::INPUT->value;
// 'input'

echo Voids::BR->value;
// 'br'
```

#### Using specialized HTML tag collections

Use specialized enums for list, root, and table elements.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\{Lists, Root, Table};

// List elements
echo Lists::UL->value;
// 'ul'

echo Lists::OL->value;
// 'ol'

echo Lists::LI->value;
// 'li'

// Root elements
echo Root::HTML->value;
// 'html'

echo Root::HEAD->value;
// 'head'

echo Root::BODY->value;
// 'body'

// Table elements
echo Table::TABLE->value;
// 'table'

echo Table::THEAD->value;
// 'thead'

echo Table::TR->value;
// 'tr'

echo Table::TD->value;
// 'td'
```

#### Type safety with interfaces

Use the provided interfaces to ensure type safety in your tag rendering implementations.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\BlockInterface;

/**
 * Render HTML using any BlockInterface implementation.
 */
function renderBlock(BlockInterface $tag, string $content): string
{
    return sprintf('<%s>%s</%s>', $tag->value, $content, $tag->value);
}

echo renderBlock(Block::DIV, 'Content');
// <div>Content</div>

echo renderBlock(Block::ARTICLE, 'Article content');
// <article>Article content</article>
```

#### Filtering and iterating tags

Leverage PHP 8.1+ enum features for filtering and tag operations.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\Block;

// Filter heading elements
$headings = array_filter(
    Block::cases(),
    fn (Block $tag) => str_starts_with($tag->name, 'H'),
);

foreach ($headings as $heading) {
    echo $heading->value . PHP_EOL;
}
// h1
// h2
// h3
// h4
// h5
// h6

// Get all block tag names
$tagNames = array_map(fn (Block $tag) => $tag->value, Block::cases());
```

#### Extensibility

Create custom tag collections by implementing the core interfaces backed by string enums.

- `\UIAwesome\Html\Interop\BlockInterface`: For container elements that have content and a closing tag.
- `\UIAwesome\Html\Interop\InlineInterface`: For text-level elements.
- `\UIAwesome\Html\Interop\VoidInterface`: For self-closing elements (no closing tag).

You can create custom enums for your specific domain (for example, SVG, MathML, or Web Components) and use them across multiple packages.

```php
<?php

declare(strict_types=1);

namespace App;

use UIAwesome\Html\Interop\BlockInterface;

enum SvgTag: string implements BlockInterface
{
    case SVG = 'svg';
    case G = 'g';
    case PATH = 'path';
    // ... add other SVG block tags as needed
}

// Now you can use it with any BlockInterface-compatible renderer
function renderAnyBlock(BlockInterface $tag, string $content): string
{
    return "<{$tag->value}>$content</{$tag->value}>";
}

echo renderAnyBlock(SvgTag::G, '...');
// <g>...</g>
```

## Documentation

For detailed configuration options and advanced usage.

- 🧪 [Testing Guide](docs/testing.md)
- 🛠️ [Development Guide](docs/development.md)

## Package information

[![PHP](https://img.shields.io/badge/%3E%3D8.1-777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/releases/8.1/en.php)
[![Latest Stable Version](https://img.shields.io/packagist/v/ui-awesome/html-interop.svg?style=for-the-badge&logo=packagist&logoColor=white&label=Stable)](https://packagist.org/packages/ui-awesome/html-interop)
[![Total Downloads](https://img.shields.io/packagist/dt/ui-awesome/html-interop.svg?style=for-the-badge&logo=composer&logoColor=white&label=Downloads)](https://packagist.org/packages/ui-awesome/html-interop)

## Quality code

[![PHPStan Level Max](https://img.shields.io/badge/PHPStan-Level%20Max-4F5D95.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ui-awesome/html-interop/actions/workflows/static.yml)
[![Super-Linter](https://img.shields.io/github/actions/workflow/status/ui-awesome/html-interop/linter.yml?style=for-the-badge&label=Super-Linter&logo=github)](https://github.com/ui-awesome/html-interop/actions/workflows/linter.yml)
[![StyleCI](https://img.shields.io/badge/StyleCI-Passed-44CC11.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.styleci.io/repos/767397797?branch=main)

## Our social networks

[![Follow on X](https://img.shields.io/badge/-Follow%20on%20X-1DA1F2.svg?style=for-the-badge&logo=x&logoColor=white&labelColor=000000)](https://x.com/Terabytesoftw)

## License

[![License](https://img.shields.io/badge/License-BSD--3--Clause-brightgreen.svg?style=for-the-badge&logo=opensourceinitiative&logoColor=white&labelColor=555555)](LICENSE)
