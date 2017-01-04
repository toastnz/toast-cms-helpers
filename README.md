[![Total Downloads](https://poser.pugx.org/toastnz/toast-cms-helpers/downloads)](https://packagist.org/packages/toastnz/toast-cms-helpers)
[![License](https://poser.pugx.org/toastnz/toast-cms-helpers/license)](https://packagist.org/packages/toastnz/toast-cms-helpers)
[![Build Status](https://travis-ci.org/toastnz/toast-cms-helpers.svg?branch=master)](https://travis-ci.org/toastnz/toast-cms-helpers)
<img src="https://img.shields.io/badge/made_with-%20%20%20%E2%98%95-green.svg">
<img src="https://img.shields.io/badge/made_by-%F0%9F%92%A9%F0%9F%92%A9-dddddd.svg">
<img src="https://img.shields.io/badge/made_for-%F0%9F%92%B5-e6acca.svg">

# Silverstripe CMS Helpers

Small helpers, fields, and requirements to assist users with navigating and using the CMS.

## Installation

```
 composer require toastnz/toast-cms-helpers
```

## Features

### Reference Field

The Reference Field displays an image inside a styled block, with the purpose of showing the user where content will be displayed on the frontend.

#### Usage

```PHP
$referenceField = ReferenceField::create(
    'FieldName', // Can be blank
    'Heading / Label',
    'Hint / ToolTip',
    'example.png' // Image / screenshot filename
);
```

### Configuration

```YAML
ReferenceField:
  base_image_path: 'mysite/images/reference'
  border_color: '#0073aa'
```
