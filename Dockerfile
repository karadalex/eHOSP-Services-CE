FROM bitnami/nginx:latest
MAINTAINER Alex Karadimos

# Copy the web application's content on /app to be served by nginx:
COPY /src /app

# Expose port 21 for FTP:
EXPOSE 21

