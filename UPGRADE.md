# Upgrade Guide

## 0.4.0

### Breaking changes

- `UIAwesome\Html\Interop\BlockInterface`, `UIAwesome\Html\Interop\InlineInterface`, and `UIAwesome\Html\Interop\VoidInterface` were removed from this package.
- All enums in `ui-awesome/html-interop` are now plain string-backed enums and no longer implement interfaces.
- If your code depends on interface contracts, install `ui-awesome/html-contracts` and switch imports to `UIAwesome\Html\Contracts\Element\*Interface`.
