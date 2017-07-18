#!/usr/bin/env bash

#!/bin/sh
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

# composer install
git submodule update --init vendor/

# npm install
npm install

# Generate a new IDE Helper file
php artisan ide-helper:generate

# Generate metadata for PhpStorm
php artisan ide-helper:meta

# Update git hook
sh bin/update-hooks.sh

#run docker
git submodule update --init laradock/
cd laradock
cp .env-dev .env
docker-compose up -d nginx php-fpm mysql redis
