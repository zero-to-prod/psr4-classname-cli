# Zerotoprod\Psr4ClassnameCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/psr4-classname-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/psr4-classname-cli/test.yml?label=test)](https://github.com/zero-to-prod/psr4-classname-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/psr4-classname-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/psr4-classname-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/psr4-classname-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/psr4-classname-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/psr4-classname-cli?color=blue)](https://packagist.org/packages/zero-to-prod/psr4-classname-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/psr4-classname-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/psr4-classname-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/psr4-classname-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/psr4-classname-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/psr4-classname-cli?color=pink)](https://github.com/zero-to-prod/psr4-classname-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/psr4-classname-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/psr4-classname-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/psr4-classname-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/psr4-classname-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
    - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`psr4-classname-cli:generate`](#psr4-classname-cligenerate)
    - [`psr4-classname-cli:src`](#psr4-classname-clisrc)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A CLI to generate a PSR-4 compliant classname

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\Psr4ClassnameCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/psr4-classname-cli
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/psr4-classname-cli)
vendor/bin/zero-to-prod-psr4-classname-cli

# Publish to custom directory
vendor/bin/zero-to-prod-psr4-classname-cli /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-psr4-classname-cli"
        ],
        "post-update-cmd": [
            "zero-to-prod-psr4-classname-cli"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/psr4-classname-cli list
```

### Available Commands

#### `psr4-classname-cli:generate`

**Description**: Generates a valid PSR-4 compliant classname from a string.

**Usage**:
```shell
vendor/bin/psr4-classname-cli psr4-classname-cli:generate <classname>
```

**Arguments**:
- `classname` (required) - The string to convert to a PSR-4 compliant classname

**Examples**:
```shell
# Generate a classname from a simple string
vendor/bin/psr4-classname-cli psr4-classname-cli:generate "my class"
# Output: MyClass

# Generate a classname from a string with special characters
vendor/bin/psr4-classname-cli psr4-classname-cli:generate "user-profile_manager"
# Output: UserProfileManager

# Generate a classname from a string with numbers
vendor/bin/psr4-classname-cli psr4-classname-cli:generate "api v2 client"
# Output: ApiV2Client
```

#### `psr4-classname-cli:src`

**Description**: Displays the project's GitHub repository URL.

**Usage**:
```shell
vendor/bin/psr4-classname-cli psr4-classname-cli:src
```

**Arguments**: None

**Example**:
```shell
vendor/bin/psr4-classname-cli psr4-classname-cli:src
# Output: https://github.com/zero-to-prod/psr4-classname-cli
```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/psr4-classname-cli/general):

```shell
docker run --rm davidsmith3/psr4-classname-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/psr4-classname-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
