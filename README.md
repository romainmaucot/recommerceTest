![RECOMMERCE TEST]

## Contents
-   [Requirements](#-requirements)
-   [Configuration](#-configuration)
-   [Building your app](#-building-your-app)


## 📋 Requirements
- 🛠Make
- :elephant: PHP-fpm >= 7.3 
- MariaDB = 10.5
- NGINX >= 1.13.6
- Composer = 1.10.19
- 🐳Docker

## :gear: Configuration
0. Create a .env file on the api folder
1. Override .env with create .env.local 
2. Update the variables on the .env.local at your environement 
3. Create a passphrase for the JWT Authentication


## 🎉 Building your app  

### with docker
1. Launch the command  `make help` or `make` generate list of targets with descriptions
2. Build the docker & the app

``` bash
$ make install
$ make composer
$ make fixtures
```

or

``` bash
$ make all
```

### without docker
[Read the official "Getting Started" guide for the API Plateform](https://api-platform.com/docs/distribution/#using-symfony-flex-and-composer-advanced-users).

### Install the JWT Authentication
Launch the command `make jwt`

## API URL

Go to http://recommerce-api.docker.localhost/api

Get your token with route login_check

Credentials:
username: api@recommerce.fr
password: root

Copy the response Token and paste it in Authorization with Bearer before :

Bearer your_token



Enjoy !
