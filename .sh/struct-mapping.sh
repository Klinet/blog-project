#!/bin/bash

cd "$(dirname "$0")/.." || exit 1

find . \
  -path ./vendor -prune -o \
  -path ./.idea -prune -o \
  -path ./log -prune -o \
  -path ./.git -prune -o \
  -path ./feature_controllers_tdd.txt -prune -o \
  -print | sort > feature_controllers_tdd.txt

//echo "Projekt struktúra mentve: project_structure.txt"
echo "Projekt struktúra a feature/controllers_tdd kezdetén: feature_controllers_tdd.txt"