# Magento 2 - CMS Canonical Link Module

## Overview

A Magento 2 module that adds a ```Canonical Link``` field to the ```Search Engine Optimisation``` 
section when editing CMS pages in the admin under ```Content -> Pages```.

Particularly useful in preventing potential duplicate page content issues involving the home page 
(where the ```BASE_URL``` and ```BASE_URL/home``` URLs are both accessible). 

## Requirements

Magento Open Source (CE) Version 2.2.x

## Installation

Include the package.

```bash
$ composer require scottparsons/module-cmscanonical
```

Enable the module.

```bash
$ php bin/magento module:enable ScottParsons_CmsCanonical
$ php bin/magento setup:upgrade
$ php bin/magento cache:clean
```

## Usage

In the admin, head to ```Content -> Pages```
