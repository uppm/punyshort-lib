# PunyShort Lib `UPPM`

```php
use modules\punyshort\Punyshort;

$pnsh = new Punyshort();
echo $pnsh->short("https://interaapps.de")->getLink();
```

Non-UPPM Usage
REQUIRED: https://github.com/interaapps/PHP-HttpRequest
```php
<?php
include "modules/punyshort/Punyshort.php";
include "modules/punyshort/LinkInformation.php";
include "modules/punyshort/NewShortenLink.php";
include "modules/httprequest/HTTPRequest.php";
include "modules/httprequest/HTTPResponse.php";

use modules\punyshort\Punyshort;

$pnsh = new Punyshort();
echo $pnsh->short("https://interaapps.de/ia")->getLink();
```

#### Installation
Download UPPM if you havent
```bash
wget https://raw.githubusercontent.com/interaapps/uppm/master/uppm
```

Installing punyshort-lib
```php
php uppm install punyshort-lib
```