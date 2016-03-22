# ------------------------------------------------------
#
# This Dockerfile is NOT used with docker-compose.yml.
# This Dockerfile is used to create a single-container
# version of the application. To run this you only need Docker.
#
# ------------------------------------------------------
FROM httpd:latest
MAINTAINER Alex Karadimos

COPY dist /usr/local/apache2/htdocs/
VOLUME ['/usr/local/apache2/htdocs/']

EXPOSE 80 443