# laravelpodcast | A Laravel podcast manager package - v0.0.8

[![Total Downloads](https://poser.pugx.org/jeremykenedy/laravelpodcast/d/total.svg)](https://packagist.org/packages/jeremykenedy/laravelpodcast)
[![Latest Stable Version](https://poser.pugx.org/jeremykenedy/laravelpodcast/v/stable.svg)](https://packagist.org/packages/jeremykenedy/laravelpodcast)
[![License](https://poser.pugx.org/jeremykenedy/laravelpodcast/license.svg)](https://packagist.org/packages/jeremykenedy/laravelpodcast)

## Introduction

Laravel Podcast Manager is a complete podcast manager package for Laravel 5.3+ that enables you to manage RSS feeds for your favorite podcasts and listen to the episodes in a seamless UI.

## Requirements

* [Laravel 5.3+](https://laravel.com/docs/installation)

   Example new project creation command:

   ```laravel new podcast```

* [Laravel Authentication Scaffolding](https://laravel.com/docs/authentication)

   Authentication installation command:

   ```php artisan make:auth```

## Installation

1. From your projects root folder in terminal run:

   ```
      composer require jeremykenedy/laravelpodcast
   ```

2. Register the package with laravel in `config/app.php` under `providers` with the following:

   ```
      Collective\Html\HtmlServiceProvider::class,
      willvincent\Feeds\FeedsServiceProvider::class,
      Intervention\Image\ImageServiceProvider::class,
      jeremykenedy\laravelpodcast\PodcastServiceProvider::class,
   ```

3. Register the dependencies aliases with laravel in `config/app.php` section under `aliases` with the following:

   ```
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
      'Feeds'    => willvincent\Feeds\Facades\FeedsFacade::class,
      'Image' => Intervention\Image\Facades\Image::class,
   ```

4. Publish the packages assets by running the following from your projects root folder:

   ```
      php artisan vendor:publish
   ```

5. Configure your projects `.env` file and add the following:

   ```
      DB_CHARSET=utf8mb4
      DB_COLLATION=utf8mb4_unicode_ci
   ```

6. Update the datebase by running the following from your projects root folder:

   ```
      php artisan migrate
   ```

## Routes

* ```/podcast```
* ```/podcasts```
* ```/podcast/search```
* ```/podcasts/manage```
* ```/podcasts/player```
* ```/podcasts/settings```
* ```/podcasts/favorites```
* ```/podcasts/auto-update```

## Required Packages
(included in this package)

* [laravelcollective/html](https://packagist.org/packages/laravelcollective/html)
* [willvincent/feeds](https://packagist.org/packages/willvincent/feeds)
* [intervention/image](https://packagist.org/packages/intervention/image)

## Screenshots

![Home/Listen Page](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/1-home.jpg)
![Manage Page](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/2-manage.jpg)
![Favorites Page](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/3-favorites.jpg)
![Search Results Page](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/4-search.jpg)
![Mark as Read Modal](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/7-modal-read.jpg)
![Mark All as Read Modal](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/8-modal-all-read.jpg)
![Add RSS Feed Modal](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/9-modal-add.jpg)
![Delete RSS Feed Modal](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-podcast/10-modal-delete.jpg)

## License

laravelpodcast - A Laravel package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)