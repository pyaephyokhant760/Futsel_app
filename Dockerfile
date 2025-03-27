FROM php:8.3.10

# Linux package dependencies install
RUN apt-get update -y && apt-get install -y openssl zip unzip git

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install MySQL PDO Extension
RUN docker-php-ext-install pdo pdo_mysql

# Verify mbstring extension is installed
RUN php -m | grep mbstring

# Set working directory
WORKDIR /app

# Copy project files into container
COPY . /app

# Install Laravel dependencies
RUN composer install

# Start Laravel server
CMD php artisan serve --host=0.0.0.0 --port=8000

# Expose port 8000
EXPOSE 8000
