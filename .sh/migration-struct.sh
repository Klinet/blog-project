#!/bin/bash

cd "$(dirname "$0")/.." || exit 1

mkdir -p migrations
mkdir -p database/factories
mkdir -p database/seeders

find database/factories -type d -exec touch {}/.gitkeep \;
find database/seeders -type d -exec touch {}/.gitkeep \;

echo "Migrációs, factory és seeder struktúra létrehozva."