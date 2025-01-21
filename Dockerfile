FROM php:apache

# Copy the website files to the container
COPY . /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Update Apache configuration to use port 3003
RUN sed -i 's/Listen 80/Listen 3003/g' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:3003>/g' /etc/apache2/sites-available/000-default.conf

# Set ServerName to suppress the FQDN warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 3003
EXPOSE 3003

# Start Apache in the foreground
CMD ["apache2-foreground"]