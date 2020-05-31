FROM wordpress

WORKDIR /var/www/html
COPY utopia-prices/package.json ./wp-content/plugins/utopia-prices/package.json

RUN apt-get update
RUN apt-get -y install curl gnupg
RUN curl -sL https://deb.nodesource.com/setup_12.x  | bash -
RUN apt-get -y install nodejs
RUN cd ./wp-content/plugins/utopia-prices/ && npm install
#RUN cd ./wp-content/plugins/utopia-prices/ && npm run watch-css