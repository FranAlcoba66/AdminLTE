# Usa una imagen base de PHP con Composer y las extensiones necesarias
FROM php:8.2-fpm

# Instala dependencias de PHP y librerías necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    grep \
    nano \
    net-tools \
    libssl-dev \
    procps \
    build-essential \
    && docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd && \
    pecl install redis && docker-php-ext-enable redis

# Cambiar la configuración de 'listen' a 0.0.0.0:9000 para PHP-FPM
RUN sed -i 's/^listen = .*/listen = 0.0.0.0:9000/' /usr/local/etc/php-fpm.d/www.conf

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala Node.js y NPM desde el repositorio oficial
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Configura el directorio de trabajo
WORKDIR /var/www

# Copia el proyecto Laravel en el contenedor
COPY . .

# Instala las dependencias de PHP y JavaScript
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Instala las dependencias de NPM
RUN npm install

# Construye los activos del frontend (Vite)
RUN npm run build

# Ajusta permisos para el contenedor
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# Comando para ejecutar PHP-FPM en primer plano
CMD ["php-fpm"]
