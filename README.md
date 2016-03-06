# Google Science Fair 2016 Project - eHospital:
[![Build Status](https://travis-ci.com/karadalex/GSF2016_MainCode.svg?token=FumMyzspBbeAxFNpcgVB&branch=master)](https://travis-ci.com/karadalex/GSF2016_MainCode)

Virtual Machine configuration:
==============================

Docker configuration:
=====================
Run the following commands, here `C:\Users\User1\Desktop\GOOGLE SCIENCE FAIR 2016\MAIN CODE` is the path on the host
where the project, the code and the Dockerfile live:
```
$ cd "C:\Users\User1\Desktop\GOOGLE SCIENCE FAIR 2016\MAIN CODE"
$ docker build -t nginx-container-name .
$ docker run -p 8080:80 nginx-container-name
```

or alternatively run this commands to run server files manually:
```
$ cd "C:\Users\User1\Desktop\GOOGLE SCIENCE FAIR 2016\MAIN CODE"
$ docker run -d -p 8080:80 --name nginx-bitnami-test2 bitnami/nginx
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

