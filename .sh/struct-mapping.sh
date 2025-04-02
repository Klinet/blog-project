#!/bin/bash

cd "$(dirname "$0")/.." || exit 1

find . \
  -path ./vendor -prune -o \
  -path ./.idea -prune -o \
  -path ./log -prune -o \
  -path ./.git -prune -o \
  -path ./project_structure.txt -prune -o \
  -print | sort > project_structure.txt

echo "Projekt struktúra mentve: project_structure.txt"