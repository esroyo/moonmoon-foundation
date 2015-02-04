# moonmoon-foundation
A base [foundation](http://foundation.zurb.com) theme for [moonmoon](http://moonmoon.org) feed agregator.

It is a mobile friendly version of the default moonmoon theme.

Requirements
------------
* This repo is based on [moonmoon current git version](https://github.com/mauricesvay/moonmoon). It won't work with stable version (v8.12).
* [Bower](http://bower.io)

Usage
----------
From your moonmoon base directory:
* Make a backup of the default moonmoon theme. For example:
```sh
mv custom/views/default/ custom/views/fallback/
mv custom/views/archive/ custom/views/fallback-archive/
mv custom/style/default.css custom/style/fallback.css
sed -i s/default.css/fallback.css/ custom/views/fallback/head.tpl.php
sed -i s/default.css/fallback.css/ custom/views/fallback-archive/head.tpl.php
```
* Clone this repo.
* Change directory to `custom` and execute `bower install`.
* You are ready to go. Customize as you wish.
