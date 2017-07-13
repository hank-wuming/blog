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

#run docker
git submodule update --init laradock/
cd laradock
cp .env-dev .env
docker-compose up -d nginx php-fpm mysql redis
