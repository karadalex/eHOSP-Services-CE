# eHOSP (eHospital):
[![Build Status](https://travis-ci.com/karadalex/eHOSP_Server_MainSource.svg?token=FumMyzspBbeAxFNpcgVB&branch=master)](https://travis-ci.com/karadalex/eHOSP_Server_MainSource)
##### A Google Science Fair 2016 Project by Alex Karadimos

Introduction:
=============
Welcome to eHOSP, the hospital on the cloud, a platform for e-health and e-medicine!

To run thisapplication on aserver simply follow the steps from one of the following categories.

Virtual Machine configuration:
==============================
When you will start the VM for the first time, type `psswd` to change the default password.

Docker configuration:
=====================
_Steps to run a docker container **without** Docker-Compose_
Rename the file `Dockerfile_NO_DOCKER_COMPOSE` into `Dockerfile`.

Run the following commands, here `C:\Users\User1\Desktop\GOOGLE SCIENCE FAIR 2016\MAIN CODE` is the path on the host
where the project, the code and the Dockerfile live:
```
$ cd "C:\Users\User1\Desktop\GOOGLE SCIENCE FAIR 2016\MAIN CODE"
$ docker build -t nginx-container-name .
$ docker run -p 8080:80 nginx-container-name
```

or alternatively run these commands to run server files manually:
```
$ cd "C:\Users\User1\Desktop\GOOGLE SCIENCE FAIR 2016\MAIN CODE"
$ docker run -d -p 8080:80 --name nginx-bitnami-test2 bitnami/nginx
```

Docker Compose configuration:
=============================
_Steps to run a docker container **with** Docker-Compose_
Open a terminal in the directory were the `Dockerfile` resides and then type:
```
$ docker-compose up
```

Vagrant configuration:
======================

To start using the vagrant virtual environment first you need to download a box. We are using ubuntu/trusty32

```
$ vagrant box add ubuntu/trusty32
```
and then load this box by typing:

```
& vagrant init ubuntu/trusty32
```
