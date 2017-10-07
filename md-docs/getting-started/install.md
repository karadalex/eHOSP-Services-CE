Installation
============

### Manual
Requirements:
  1. PHP version 7.0 or later
  2. Composer package manager
  3. NodeJS version 8.0 or later
  4. YARN (recommended) or NPM

```sh
git clone https://github.com/ehosp/eHOSP-Services-CE.git ehosp
cd ehosp
composer global require "laravel/installer"
composer install
yarn install
```

### Docker & Docker-Compose

Requirements:
  1. Docker
  2. Docker-Compose

To run the containers in development mode simply run
```sh
docker-compose up -d --file docker-compose.dev.yml
```

---

### DigitalOcean LEMP

Follow these steps if the development team is big and across different timezones.

Requirements:
  - LEMP environment
  - PHP >=5.6.4

```sh
apt-get update
apt-get install git node
composer global require "laravel/installer"
npm install
composer install
gulp --production
```

### DigitalOcean Docker
