# ------------------------------------------------------
#
# This Dockerfile is used along with docker-compose.yml
# to create a multi-container version of the application.
# To run this you need Docker as well as Docker-compose.
#
# ------------------------------------------------------

FROM httpd:latest
MAINTAINER Alex Karadimos

COPY dist /usr/local/apache2/htdocs/
VOLUME ['/usr/local/apache2/htdocs/']

EXPOSE 80 443