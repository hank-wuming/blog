#!/usr/bin/env bash
#
# This script needs to run on your local machine (Not in vagrant box)
# Before you start coding.
# It will update git hooks and up a vagrant box
#

# Load config values
source $(dirname $0)/config.sh

cd ${REPO_ROOT}

# Fetch master branch
git fetch origin master:master

# Initial git flow
git flow init -d

# Update environment config
cp .env.example .env

# Composer install
git submodule update --init vendor/

# Npm install
npm install

# Generate a new IDE Helper file
php artisan ide-helper:generate

# Generate metadata for PhpStorm
php artisan ide-helper:meta

# Update git hook
sh bin/update-hooks.sh

# Run docker
git submodule update --init laradock/
cd laradock
cp .env-dev .env
docker-compose up -d nginx php-fpm mysql redis

# Initialize database
docker-compose exec mysql bash docker-entrypoint-initdb.d/bin/initialize-database.sh
