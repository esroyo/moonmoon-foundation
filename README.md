# moonmoon-foundation
A base [foundation](http://foundation.zurb.com) theme for [moonmoon](http://moonmoon.org) feed agregator.

This is a mobile friendly version of the default moonmoon theme.

Requirements
------------
* This repo is based on [moonmoon current git version](https://github.com/mauricesvay/moonmoon). It won't work with stable version (v8.12).
* [Bower](http://bower.io)

Usage
----------
Work from your moonmoon base directory.
If you don't have a copy, get it now:

```sh
git clone https://github.com/mauricesvay/moonmoon
cd moonmoon
```

Make a backup of the default moonmoon theme. For example:

```sh
git mv custom/views/default/ custom/views/fallback/
git mv custom/views/archive/ custom/views/fallback-archive/
git mv custom/style/default.css custom/style/fallback.css

sed -i s/default.css/fallback.css/ custom/views/fallback/head.tpl.php
sed -i s/default.css/fallback.css/ custom/views/fallback-archive/head.tpl.php

git commit -a -m 'Backup the default moonmoon theme'
```

Pull this repo:

```sh
git pull https://github.com/esroyo/moonmoon-foundation.git
```

Change directory to `custom` and execute `bower install`.

```sh
cd custom
bower install
```

You are ready to go. [Customize](http://foundation.zurb.com/docs/) as you wish ;)
