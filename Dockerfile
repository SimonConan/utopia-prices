FROM wordpress

WORKDIR /var/www/html/wp-content/plugins/utopia-prices

RUN apt-get update
RUN apt-get -y install curl gnupg
RUN curl -sL https://deb.nodesource.com/setup_12.x  | bash -
RUN apt-get -y install nodejs
RUN npm install
RUN npm run watch-css
