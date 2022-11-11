FROM php:8.2.0RC6-cli-bullseye
COPY ./index.php ./
EXPOSE 80
CMD ["php","-S", "0.0.0.0:80"]
