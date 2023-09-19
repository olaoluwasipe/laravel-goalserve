# ⚡⚡⚡ Laravel GoalServe

Simple integration with [GoalServe](https://www.goalserve.com/) API for Laravel.

![Laravel media removable](logo.png)

## Table of contents
- [Table of contents](#table-of-contents)
- [Setup](#setup)
  - [Installation](#installation)
  - [Publish](#publish)
- [Documentation](#documentation)
- [Testing](#testing)
- [License](#license)
## Setup
### Installation

To install this package through composer run the following command in the terminal

```bash
composer require codebuglab/laravel-goalserve
```
### Publish
You have to publish config file with this artisan command:
```bash
php artisan vendor:publish --provider="CodeBugLab\GoalServe\GoalServeServiceProvider"
```
- File `goalserve.php` will be publish in `config` folder after that.
- Then you have to put your goalserve api key in your `env` file like this `GOALSERVE_API_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx`.
- The default language of api response is `en`,If the returned data from the API should be in another language, set the GOALSERVE_API_LANGUAGE key in your `env`, eg. like this: `GOALSERVE_API_LANGUAGE=ar`.

## Documentation

- You will find full documentation for this package in the [wiki](https://github.com/codebuglab/laravel-goalserve/wiki) link.
## Testing

To run test use this command `./vendor/bin/pest`

## License

This package is a free software distributed under the terms of the MIT license, Please see [License File](LICENSE.md) for more information.
