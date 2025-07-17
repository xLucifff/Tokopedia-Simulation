# Menggunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# Salin semua file dari direktori lokal ke dalam server container
COPY . /var/www/html/

# Pastikan file log.txt bisa ditulis oleh server
RUN chmod 777 /var/www/html/log.txt

# Aktifkan mod_rewrite Apache (kalau suatu saat perlu .htaccess)
RUN a2enmod rewrite
