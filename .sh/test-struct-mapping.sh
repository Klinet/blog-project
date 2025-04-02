#!/bin/bash

cd "$(dirname "$0")/.." || exit 1

while IFS= read -r line; do
  if [[ "$line" =~ ^\./src/Domains/([^/]+)/ ]]; then
    domain="${BASH_REMATCH[1]}"
    mkdir -p "tests/Feature/Domains/${domain}"
    mkdir -p "tests/Unit/Domains/${domain}"
    touch "tests/Feature/Domains/${domain}/.gitkeep"
    touch "tests/Unit/Domains/${domain}/.gitkeep"
  fi

done < project_structure.txt

echo "Tesztekhez tartozó mappastruktúra generálva a Domains alapján."