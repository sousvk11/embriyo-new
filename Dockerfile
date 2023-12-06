# Use an official PHP image with Apache as the base image.
FROM php:8.2-apache

# Set environment variables.
ENV ACCEPT_EULA=Y

# Install system dependencies.
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \ 
    && rm -rf /var/lib/apt/lists/*

# Enable Apache modules required for Laravel.
RUN a2enmod rewrite

# Set the Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update the default Apache site configuration
COPY ./laravel/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Install PHP extensions.
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql

# Install Composer globally.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Install nodejs npm

# Install Node.js using NVM
ENV NVM_DIR /usr/local/nvm
ENV NODE_VERSION 20.5.0
RUN mkdir -p $NVM_DIR
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm use $NODE_VERSION \
    && ln -s "$(npm config get prefix)/bin/node" "/usr/local/bin/node" \
    && ln -s "$(npm config get prefix)/bin/npm" "/usr/local/bin/npm"


COPY ./entrypoint.sh /

#working Directory 
WORKDIR /var/www/html

RUN rm -Rf /var/www/html/*

RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Start Apache web server.
#CMD ["apache2-foreground"]
CMD ["/bin/bash", "-c", "/entrypoint.sh"]

