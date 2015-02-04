# moonmoon-foundation
A base [Foundation](https://github.com/zurb/foundation) theme for [moonmoon](https://github.com/mauricesvay/moonmoon) feed agregator.

Requirements
------------
This repo is based on moonmoon git version. It won't work with stable version (v8.12).

Usage
----------
* Make a copy of the default moonmoon theme. For example:

```shell
mv custom/views/default/ custom/views/fallback/
mv custom/views/archive/ custom/views/fallback-archive/
mv custom/style/default.css custom/style/fallback.css
sed -i s/default.css/fallback.css/ custom/views/fallback/head.tpl.php
sed -i s/default.css/fallback.css/ custom/views/fallback-archive/head.tpl.php
```

* Clone this repositori inside your moonmoon directory.
* Customize as you wish.
