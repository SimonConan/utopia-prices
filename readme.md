
# UTOPIA-PRICES

Wordpress plugin to display utopia specifics blocks

## Getting Started

These instructions will cover usage information and for the docker container 

### Prerequisities


In order to run this container you'll need docker installed.

* [Windows](https://docs.docker.com/windows/started)
* [OS X](https://docs.docker.com/mac/started/)
* [Linux](https://docs.docker.com/linux/started/)

### Usage

#### Container Parameters

Build container

```shell
docker-compose build
```

Start container

```shell
docker-compose up
```

Silently start container

```shell
docker-compose up -d
```

Watch scss files during development

```shell
docker exec -it wp-utopia bash
cd ./wp-content/plugins/utopia-prices/ && npm run watch-css
```

#### Volumes

* `/utopia-prices` - Plugin files location


## Authors

* **Simon Conan** - [Github](https://github.com/SimonConan)

See also the list of [contributors](https://github.com/your/repository/contributors) who 
participated in this project.
