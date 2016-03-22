# ------------------------------------------------------
#
# This Dockerfile is used along with docker-compose.yml
# to create a multi-container version of the application.
# To run this you need Docker as well as Docker-compose.
#
# ------------------------------------------------------

FROM nginx
MAINTAINER Alex Karadimos

# Copy the web application's content on nginx server root directory:
COPY dist /usr/share/nginx/html
