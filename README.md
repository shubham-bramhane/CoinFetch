<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://laravel.com/img/logotype.min.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Coingecko API Data Fetcher

This project provides an artisan command to fetch coin data from the Coingecko API and store it in a database.

## Installation

1. Clone the repository:

git clone https://github.com/shubham-bramhane/CoinFetch.git




2. Install dependencies:

composer install

composer update



3. Set up your database connection in the `.env` file.

4. Run the migrations to create the necessary tables:

php artisan migrate


## Usage

To fetch and store coin data from the Coingecko API, run the following command:

php artisan coins:fetch


This command will retrieve the data from the API and store it in the `coins` table in the database.

