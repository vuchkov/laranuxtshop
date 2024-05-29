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

#### 1. Setup Laravel

Start with `laranuxt`

Add `https://github.com/mollie/laravel-mollie`

Create migrations:
```
php artisan make:migration create_products_table
php artisan make:migration create_orders_table
php artisan make:migration create_categories_table
```
- Run `php artisan migrate`
- Create seeders: `php artisan make:seeder ProductsSeeder` plus categories 
and orders
- Seed data `php artisan db:seed`

#### 2. API Development in Laravel

- Create a Product model: `php artisan make:model Product`
- Create a Order model: `php artisan make:model Order`
- Create a Category model: `php artisan make:model Category`

(It's quicker to use `php artisan make:model Product -mcr` at once)

- `php artisan make:request StoreProductRequest`

