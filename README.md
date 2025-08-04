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

Carbon icons comes in a single style although there are some instances of an icon having `filled` or `outline` variants. There are no explicit style sets so this package doesn't support any global style selection.

## Override Specific Icons

You can override specific icons or aliases using the following methods:

### Override Icon Aliases

Use `overrideAlias()` to change which icon is used for specific Filament component aliases:

```php
CarbonIcons::make()
    ->overrideAlias(PanelsIconAlias::SIDEBAR_EXPAND_BUTTON, Carbon::ChevronRight)
    ->overrideAlias(TablesIconAlias::FILTER_INDICATOR, Carbon::Filter);
```

Or use `overrideAliases()` to override multiple aliases at once by passing an array:

```php
CarbonIcons::make()
    ->overrideAliases([
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Carbon::ChevronRight,
        TablesIconAlias::FILTER_INDICATOR => Carbon::Filter,
        ActionsIconAlias::CREATE_ACTION_BUTTON => Carbon::AddAlt,
    ]);
```

### Override Individual Icons

Use `overrideIcon()` to replace specific Carbon icons with different ones:

```php
CarbonIcons::make()
    ->overrideIcon(Carbon::Search, Carbon::SearchAdvanced)
    ->overrideIcon(Carbon::Add, Carbon::AddAlt);
```

Or use `overrideIcons()` to override multiple icons at once by passing an array:

```php
CarbonIcons::make()
    ->overrideIcons([
        Carbon::Search->value => Carbon::SearchAdvanced,
        Carbon::Add->value => Carbon::AddAlt,
        Carbon::Edit->value => Carbon::EditOff,
    ]);
```
> PHP arrays do not support enums as keys so `->value` is necessary if you want to reference the enum

These methods are particularly useful since Carbon icons come in a single style, allowing you to customize the icon set to better fit your application's needs.

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.
