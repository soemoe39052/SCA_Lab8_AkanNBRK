FROM php:8.5.0RC2-trixie
COPY ./index.php ./
EXPOSE 80
CMD ["php","-S", "0.0.0.0:80"]
