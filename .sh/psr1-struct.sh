#!/bin/bash
cd "$(dirname "$0")/.." || exit 1

mkdir -p src/{Domains,Application,Infrastructure,Interfaces,Shared}
mkdir -p src/Interfaces/Http/{Controllers,Requests,Responses}
mkdir -p templates/{admin,guest,partials}
mkdir -p public/{css,js,img}
mkdir -p config log scripts tests/{Unit,Feature}
mkdir -p database && touch database/database.sqlite
touch .env

domain=Post
mkdir -p src/Domains/$domain/{Models,Repositories,Services,Exceptions,Events,Listners,Actions}
touch src/Domains/$domain/{Models,Repositories,Services,Exceptions,Events,Listners,Actions}/.gitkeep

mkdir -p src/Shared/ValueObjects
mkdir -p src/Shared/Exceptions

cat <<EOF > src/Interfaces/Http/Controllers/BaseController.php
<?php

declare(strict_types=1);

namespace App\Interfaces\Http\Controllers;

abstract class BaseController
{
    protected function render(string \$template, array \$data = []): void
    {
        // Smarty render logika
    }
}
EOF

cat <<EOF > public/index.php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Routing indulhat itt
EOF

find . -type d \( -path ./vendor -o -path ./.git \) -prune -o -exec touch {}/.gitkeep \;

if [ ! -f composer.json ]; then
    echo -e '{
  "name": "blog/app",
  "description": "Moduláris DDD PHP Blog",
  "type": "project",
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  },
  "require": {}
}' > composer.json
    composer install
    composer dump-autoload
fi

# Struktúra mentés
find . -path ./vendor -prune -o -path ./.idea -prune -o -path ./log -prune -o -path ./.git -prune -o  -path ./project_structure.txt -prune -o -print | sort > project_structure.txt

echo "DDD struktúra generálás kész."
exit 0