# Utiliser une image de base contenant PHP et Apache
FROM php:8.2-apache

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Installer les dépendances nécessaires pour Symfony
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    zlib1g-dev \
    libzip-dev \
    && docker-php-ext-install \
    pdo_mysql \
    intl \
    zip

# Activer les modules Apache nécessaires pour Symfony
RUN a2enmod rewrite

# Copier les fichiers de l'application Symfony dans le conteneur
COPY . .

# Installer les dépendances PHP avec Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader --prefer-dist

# Exposer le port 80
EXPOSE 80

# Commande pour démarrer Apache
CMD ["apache2-foreground"]
