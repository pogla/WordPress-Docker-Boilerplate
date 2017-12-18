# Boilerplate for WordPress theme and plugin development with Docker
* Replace all occurrences of 'boilerplate' keyword in build commands and docker-compose file
* For XDEBUG, use your ip
* You need to configure local PHP interpreters in PhpStorm to be able to use Xdebug
* Installing Xdebug chrome plugin is necessary

#### Build nginx proxy image
`docker build -f Dockerfile.nginx -t boilerplate-nginx .`

#### Build wp image
`docker build -f Dockerfile.wp -t boilerplate-wp .`

#### Build wp image with Xdebug

Replace ip with yours if on Windows

For Mac run:

`sudo ifconfig lo0 alias 10.254.254.254`

`docker build --build-arg XDEBUG_REMOTE_HOST=10.254.254.254 -f Dockerfile.wp.xdebug -t primerjam-wp .`

#### Start conteiners

`docker-compose up -d`

### WordPress starter theme
Theme gets copied to themes directory. Rename it as you wish and run: `yarn -i` inside theme directory

Replace proxy in webpack.config.js

#### Theme features
* Webpack
* SCSS
* Minify
* Browsersync
* Autoprefix

#### Commands

`npm run build`
`npm run watch`
`npm run production`

Webpack: https://www.youtube.com/watch?v=IAWi-z-bblQ&feature=youtu.be
Go to yourdomain.dev:3000 and start developing.