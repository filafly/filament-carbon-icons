<p class="filament-hidden" align="center">
    <img src="https://filafly.com/images/filafly-filament-carbon-icons.png" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Carbon Icons

A Carbon icon set implementation for Filament 4.x, providing the full set of Carbon icons integrated with Filament's interface.

## Installation

You can install the package via composer:

```bash
composer require filafly/filament-carbon-icons
```

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
use Filafly\Icons\Carbon\CarbonIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(CarbonIcons::make());
}
```

## Icon Styles

Carbon icons come in a single style.

- Regular (default)

You can change the style using the following methods:

```php
CarbonIcons::make()->regular();
```

## Override Specific Icons
Since Carbon does not have multiple styles, there is no need to alter the style.

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.