FROM jenkins

USER root
RUN apt-get update && apt-get install -y 
# drop back to the regular jenkins user - good practice
USER jenkins 

# Configure Jenkins
COPY executors.groovy /usr/share/jenkins/ref/init.groovy.d/executors.groovy
# Install Jenkins plugins
COPY plugins.txt /usr/share/jenkins/plugins.txt
RUN /usr/local/bin/plugins.sh /usr/share/jenkins/plugins.txt