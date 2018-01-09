#!/bin/bash

docker-compose run --rm wpcli search-replace 'http://localhost:XXXX' 'http://staging.dev' --export=/var/www/html/sql-dump.sql