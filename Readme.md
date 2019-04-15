# in2code Training Boilerplate

This is a basic boilerplate for training purposes.

The infrastructure basis is ddev : 

* https://www.drud.com/get-started/
* https://ddev.readthedocs.io/en/latest/ 

## Requirements

* local docker installation (depending on your os) https://www.docker.com/get-started
* ddev installation https://ddev.readthedocs.io/en/stable/
* composer installation https://getcomposer.org/download/


## Basic usage

* Clone repo
* `cd` to project root 
* `composer install`
* `ddev start`
* `ddev import-db` 
    * use `build/import/database/db.sql` as path
* now you are able to log into the BE with user `admin` and password `12345678` 

##  
