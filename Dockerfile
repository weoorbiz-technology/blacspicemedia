FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files
COPY . /var/www/html/

# Use the PORT environment variable in Apache configuration
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Set working directory
WORKDIR /var/www/html

# Adjust permissions (optional, but good practice)
RUN chown -R www-data:www-data /var/www/html
