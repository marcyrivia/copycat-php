# Use the official PHP image from Docker Hub as the base
FROM php:latest

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP application files from 'www/alumni' directory into the container
COPY www/alumni /var/www/html/

# Expose the port that the PHP server will use
EXPOSE 80

# Start PHP built-in web server when the container starts
CMD ["php", "-S", "0.0.0.0:80"]
