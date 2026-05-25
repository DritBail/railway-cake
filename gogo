FROM dunglas/frankenphp:php8.2-bookworm

# Install system dependencies for the intl PHP extension
RUN apt-get update && apt-get install -y \
    libicu-dev \
    git \
    unzip \
    zip \
    && docker-php-ext-install intl \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy composer files first for better layer caching
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --optimize-autoloader --no-scripts --no-interaction

# Copy the rest of the application
COPY . .

EXPOSE ${PORT:-80}

CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]
