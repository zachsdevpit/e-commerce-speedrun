# Marking start time

Writing a MVP e-commerce-platform utilizing a few laravel libraries in order to see if moving from 11->12 will have any quirks or gotchas

---

Opted to use Sail so this "requires" Docker to run

---

# Quickstart

1. Copy .env.example to .env and replace DB connection to desired configuration

2. Grab All Dependencies and Start Containers

```bash
composer update && composer install && php artisan key:generate && npm i && npm run build && sail up -d
```

3. The Database can take a second to start up. Wait for Postgres status to show (Healthy) before moving on

```bash
watch Docker Ps
```

4. Run Migrations

```bash
sail artisan migrate:fresh --seed
```

5. Have Fun

# Credits

Providing a thanks to these projects for giving me a solid starting point

* [Database Structure](https://github.com/LaravelDaily/Laravel-Examples-Ecommerce-DB)
* [Panels](https://github.com/filamentphp/filament)
