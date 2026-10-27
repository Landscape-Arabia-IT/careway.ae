# Careway local development

Laravel 12, PHP 8.2+, Composer 2, Node.js and npm.

## Start

```sh
cd ~/Documents/projects/careway
composer dev
```

Open http://127.0.0.1:8001. Stop with Ctrl+C.
For the website alone: `php artisan serve --host=127.0.0.1 --port=8001`.
The existing Blade pages use Tailwind CDN and Google Fonts and need internet for their styling/fonts. Vite is available for local asset development.

## Fresh setup

```sh
composer install
npm ci
cp .env.example .env
touch database/development.sqlite
php artisan key:generate
php artisan migrate
npm run build
```

## Checks

```sh
composer test
npm run build
```

The local app uses a new SQLite database, local sessions/cache/queues, and logs mail instead of sending it. No production database credentials are used. The SQL backup in the parent projects directory is retained separately and has not been imported. PHPUnit uses an in-memory database.

## Hosting snapshot

The original ZIP remains in the parent projects directory. Original `.env`, generated hosting caches, logs and obsolete Windows-named paths are preserved under `.hosting-backup/`. The duplicate `marin/` snapshot is retained but is not the app root. These snapshots, dependencies, generated assets and local databases are ignored by Git. Never serve the project root; the web document root is `public/`.
