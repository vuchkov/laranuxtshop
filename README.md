# Assignment

- Please read the [ASSIGNMENT.md](https://github.com/vuchkov/laranuxtshop/blob/master/ASSIGNMENT.md) and [ROADMAP.md](https://github.com/vuchkov/laranuxtshop/blob/master/ROADMAP.md) for more info.

### Installation

- `git clone git@github.com:vuchkov/laranuxtshop.git`
- `cd laranuxtshop`
- `pnpm i`
- `composer install`
- `cp .env.example .env`

### Local Environment

- run `pnpm run dev` in one terminal for our nuxt dev setup
- run `pnpm run api` (alias for `./artisan serve`) in another terminal for 
our laravel API

### Updates

Research on two Laravel & Nuxt boilerplate:
- https://github.com/fumeapp/laranuxt
- https://github.com/k2so-dev/laravel-nuxt

Start with `laranuxt`

Add `https://github.com/mollie/laravel-mollie`

Create migrations:
```
php artisan make:migration create_products_table
php artisan make:migration create_orders_table
php artisan make:migration create_categories_table
```
- Run `php artisan migrate`
