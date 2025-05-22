#!/bin/bash

if [ ! -f artisan ]; then
  echo "Laravel non trovato. Lo sto creando..."
  composer create-project laravel/laravel .
  composer require laravel/breeze
  php artisan breeze:install livewire
  npm install
  npm run build
else
  echo "Laravel già presente. Avvio..."
fi

php artisan serve --host=0.0.0.0 --port=8000
