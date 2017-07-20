#!/bin/bash

#
# Initialize database for dev environment
source $(dirname $0)/config.sh

echo "Build database from dump/dump.sql"

sql=$(dirname $0)/../dump/dump.sql

mysql -h${DB_HOST} -u${DB_USER} -p${DB_PWD} ${DB_NAME} < ${sql}

#echo "Migrate schema..."
#sudo sh ${DIR_BIN}/migrate-database.sh

echo "Database initialize complete."
