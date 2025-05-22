#!/bin/bash

if [ ! -f artisan ]; then
  echo "Laravel non trovato. Lo sto creando..."
  composer create-project laravel/laravel .
else
  echo "Laravel già presente. Avvio..."
fi

php artisan serve --host=0.0.0.0 --port=8000
