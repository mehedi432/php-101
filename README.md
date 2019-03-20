# php-101
Basics of php learning from laracast with proper comments in both bangla and english.

### Update the system packages to the latest versions:
`
sudo apt update && sudo apt upgrade
`
### Installing PHP
`
sudo apt install php7.2-common php7.2-cli php7.2-gd php7.2-mysql php7.2-curl php7.2-intl php7.2-mbstring php7.2-bcmath php7.2-imap php7.2-xml php7.2-zip
`
### Installing Composer
`
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
`
### Checking version
`
composer --version
`

### Making a laraver project:
`
composer create-project --prefer-dist laravel/laravel my_app
`
### Start the development server by navigating to the Laravel project directory and executing the artisan serve command:
` 
cd ~/my_app
`
`
php artisan serve
`


