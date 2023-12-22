# Use the official XAMPP image from Docker Hub as the base
FROM tomsik68/xampp:latest

# Copy your PHP application files from 'alumni/app' directory into the XAMPP document root
COPY App /opt/lampp/htdocs/

# Expose the port Apache is listening on
EXPOSE 80

# Start XAMPP services when the container starts
CMD ["/opt/lampp/lampp", "startapache", "-foreground"]
