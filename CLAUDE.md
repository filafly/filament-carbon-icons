# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Commands

- **Code formatting**: `./vendor/bin/pint` (Laravel Pint for PHP code styling)
- **Install dependencies**: `composer install`

## Code Architecture

This is a Filament icon set package that integrates Carbon Design System icons with Filament 4.x. The package follows the Filafly icon system architecture.

### Key Components

**CarbonIcons.php** (src/CarbonIcons.php:17-178)
- Main plugin class extending `IconSet` from filafly/filament-icons
- Contains comprehensive icon mapping from Filament's built-in aliases to Carbon icons
- Maps all major Filament component icons (panels, forms, tables, notifications, actions, etc.)
- Uses dependency: `filafly/filament-icons` (2.x-dev) and `codeat3/blade-carbon-icons`

**Carbon Enum** (src/Enums/Carbon.php:8)
- Large enum with 1000+ Carbon icon cases
- Each case maps to a Carbon icon identifier (kebab-case strings)
- Implements `ScalableIcon` interface from Filament

**Icon Approach**
- Uses enum-driven system where styles are baked into icon cases
- No separate style enum needed - Carbon icons have a single style

### Package Structure

- **Namespace**: `Filafly\Icons\Carbon\`
- **Plugin registration**: Must be registered in Filament Panel provider using `CarbonIcons::make()`
- **Icon style**: Only supports Regular style (no variations like outlined/filled)
- **Dependencies**: Built on codeat3/blade-carbon-icons for actual icon rendering

### Integration Pattern

The package follows Filafly's icon system where:
1. Icons are accessed via enum cases (e.g., `Carbon::Search`)
2. Icons have styles baked into the enum cases (no runtime style resolution)
3. Comprehensive icon alias mapping ensures all Filament UI components have appropriate icons
4. Plugin must be explicitly registered in panel configuration
5. Override system allows customization via `overrideAlias()` and `overrideIcon()` methods