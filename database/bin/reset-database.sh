#!/bin/bash

#
# Reset database for dev environment

source "$(dirname $0)/config.sh"

echo $(dirname $0)

cd ${REPO_ROOT}

echo "Cleanup database blog..."

mysql  -h${DB_HOST} -u${DB_USER} -p${DB_PWD} -e 'DROP DATABASE IF EXISTS blog;CREATE DATABASE blog;'

bash ${DIR_BIN}/initialize-database.sh
