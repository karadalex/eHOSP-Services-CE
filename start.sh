echo "Starting nginx..."
service nginx start

echo "Starting MySQL for the first time."
echo "Initializing configuration..."
mysql_install_db
/usr/bin/mysql_secure_installation

echo "Starting PHP..."
service php5-fpm start
