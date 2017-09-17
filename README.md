# eHOSP:
<p align="center"> 
  <a href="http://ehosp.azurewebsites.net" target="_blank">
    <img src="public/img/256x256.png" align="center"/>
  </a> 
</p>

[![Build Status](https://travis-ci.org/ehosp/eHOSP-Services-CE.svg?branch=master)](https://travis-ci.org/ehosp/eHOSP-Services-CE)

Introduction:
=============
Welcome to eHOSP, the hospital on the cloud, a platform for e-health and e-medicine!

To run thisapplication on aserver simply follow the steps from one of the following categories.


Server Configuration
======================

_(Instructions tested in DigitalOcean)_

Requirements
  - LEMP environment
  - PHP >=5.6.4

```
apt-get update
apt-get install git node
composer global require "laravel/installer"
npm install
composer install
gulp --production
```
