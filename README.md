# Lafllamme Page

An early personal homepage built on Laravel 8. A single animated landing page, predating the current portfolio.

> Superseded. The current portfolio lives in [portfolio-app](https://github.com/lafllamme/portfolio-app).

## What it is

One Blade view serving a personal landing page, plus a setup route. There is no CMS, no database content, and no admin area — the page content is written directly into the template.

## Tech stack

- Laravel 8 and PHP
- Blade templates
- Laravel UI and Sass

## Getting started

### Requirements

- PHP 7.3 or newer
- Composer
- Node.js and npm

### Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
```

### Run locally

```bash
php artisan serve
npm run dev
```

## Status

Archived in practice. Kept as a snapshot of an earlier iteration; it is not maintained and the Laravel version is past end of life.

## License

No open-source license has been declared yet. Until a license is added, reuse and redistribution are not granted by default.

Made with love by [Laflamme](https://github.com/lafllamme).
