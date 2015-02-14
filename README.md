# moonmoon-foundation
A base [foundation](http://foundation.zurb.com) theme for [moonmoon](http://moonmoon.org) feed agregator.

This is a mobile friendly version of the default moonmoon theme.

Requirements
------------
* [moonmoon](http://moonmoon.org) 8.12
* [Bower](http://bower.io)

Usage
----------
Download the ZIP file of this repo and extract the `custom` folder into your moonmoon base directory.

Change directory to `custom` and execute `bower install`.

```sh
cd custom
bower install
```

You are ready to [customize](http://foundation.zurb.com/docs/) the theme as you wish.

To use it as it is, modify `index.php` so it defaults to `html5-fndtn` theme. For example:

```sh
sed -i s/default/html5-fndtn/ /your_moonmoon_base_dir/index.php
```

