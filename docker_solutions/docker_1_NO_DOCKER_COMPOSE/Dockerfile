# ------------------------------------------------------
#
# This Dockerfile is NOT used with docker-compose.yml.
# This Dockerfile is used to create a single-container
# version of the application. To run this you only need Docker.
#
# ------------------------------------------------------


FROM nginx
MAINTAINER Alex Karadimos


# Update Apt-Get:
RUN apt-get update
# Install MySQL:
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mysql-server
RUN apt-get -y install php5-mysql
# Install PHP:
RUN apt-get -y install php5-fpm
# Install SQLite, curl:
RUN apt-get -y install sqlite curl

# Copy php configuration files into the container:
#ADD php.ini /etc/php5/fpm
# Copy nginx configuration file into the container:
#ADD nginx.conf /etc/nginx

# Copy the web application's content on nginx server root directory:
COPY ../src /usr/share/nginx/html
# Create also a mount point for the directory above:
VOLUME ["/usr/share/nginx/html"]

# Start services:
RUN service nginx start
#RUN service php5-fpm start
# Expose port 80 and 443 for HTTP and HTTPS:
EXPOSE 80 443
