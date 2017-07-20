#!/usr/bin/env bash

declare -xr REPO_ROOT=$( cd "$( dirname "${BASH_SOURCE[0]}" )/../" && pwd )
declare -xr DIR_BIN="${REPO_ROOT}/bin"

# Database config
declare -xr DB_HOST='localhost'
declare -xr DB_NAME='blog'
declare -xr DB_USER='blog'
declare -xr DB_PWD='wuming1q2w'
