# Testing

This package provides a consistent set of [Composer](https://getcomposer.org/) scripts for local validation.

Tool references:

- [Easy Coding Standard (ECS)](https://github.com/easy-coding-standard/easy-coding-standard) for coding standards.
- [PHPStan](https://phpstan.org/) for static analysis.
- [Rector](https://github.com/rectorphp/rector) for automated refactoring.

## Automated refactoring (Rector)

Run Rector to apply automated code refactoring.

```bash
composer rector
```

## Coding standards (ECS)

Run Easy Coding Standard (ECS) and apply fixes.

```bash
composer ecs
```

## Static analysis (PHPStan)

Run static analysis.

```bash
composer static
```

## Passing extra arguments

Composer scripts support forwarding additional arguments using `--`.

Run ECS with a different memory limit.

```bash
composer ecs -- --memory-limit=512M
```
