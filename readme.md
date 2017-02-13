# Laravel-Podcast-Manager | A Laravel podcast manager package - v0.0.1

[![Total Downloads](https://poser.pugx.org/jeremykenedy/laravel-podcast-manager/d/total.svg)](https://packagist.org/packages/jeremykenedy/laravel-podcast-manager)
[![Latest Stable Version](https://poser.pugx.org/jeremykenedy/laravel-podcast-manager/v/stable.svg)](https://packagist.org/packages/jeremykenedy/laravel-podcast-manager)
[![License](https://poser.pugx.org/jeremykenedy/laravel-podcast-manager/license.svg)](https://packagist.org/packages/jeremykenedy/laravel-podcast-manager)

## Introduction

This is a base example of a laravel package. The focus is on the framework of the package and the essential elements and not so much what it actually does. It returns the time and date in a Laravel application when going to the the URL `/timezones/{TIMEZONE}` from the projects base url.

## Installation

1. From your projects root folder in terminal run:

   ```
      composer require jeremykenedy/laravel-podcast-manager
   ```

2. Register the package with laravel in `config/app.php` under the **Application Service Providers** section with the following:

   ```
      jeremykenedy\Podcast\PodcastServiceProvider::class,
   ```

3. (Optional) Publish the packages assets/views to be customized by running the following from your projects root folder:

   ```
      php artisan publish
   ```

## Usage

```
   http://your-projects-url/Podcast/{{TIMEZONE}}
```

#### Usage Examples:

```
   http://lara-timezone.local/Podcast/PST
   http://lara-timezone.local/Podcast/MST
   http://lara-timezone.local/Podcast/CST
   http://lara-timezone.local/Podcast/EST
   http://lara-timezone.local/Podcast/UTC
```

## License

Timezones - A Laravel package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)



Other Dependencies to `app.php`, add to `providers` array:

```
   Collective\Html\HtmlServiceProvider::class,
   willvincent\Feeds\FeedsServiceProvider::class,
   Intervention\Image\ImageServiceProvider::class,
   jeremykenedy\Podcast\PodcastServiceProvider::class,
```

Other Dependencies to `app.php`, add to `aliases` array:

```
   'Form' => Collective\Html\FormFacade::class,
   'Html' => Collective\Html\HtmlFacade::class,
   'Feeds'    => willvincent\Feeds\Facades\FeedsFacade::class,
   'Image' => Intervention\Image\Facades\Image::class
```


