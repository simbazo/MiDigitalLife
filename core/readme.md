<p align="center"><img src="http://midigital.appenberg.co.za/assets/img/logos/Mdl_logo_colour-200x60.png"></p>

Hi All,
# editor2
New editor for appenberg

Hi ALl.

This Repository is our Backend for all our existing and coming up Projects.

This project was developed and still in progress, using Laravel Framework.

To have this Project running on your local development machine,
you need to have any web server running and you must have PHP 7.0 running.

If you are lazy guy like me, and like to avoid many setup, to get your local development sorted out, i would suggest you getting Laravel Homestead or Valet.

You can find the laravel homestead on laravel website, or by checking the url bellow.

## https://laravel.com/docs/5.4/homestead

This Project contain all files else laravel Dependences, which you can get it, after having your local development enviroment sorted out, and follow the steps bellow.

1: CLone the Repository
2: Navigate to the the cloned repository folder and go inside of core by using your command line or terminal
3: ex: cd /your_path/MiDigitalLife/core
4: run the command "composer install"

After the steps bellolow, make sure that you got a folder called vendor inside core folder.

And after this you done setting up and you ready to go.


## Project Structure

Core folder, contain all main core code which make the project to work.
Inside of Core there some folders and files which we can make changes also some which we cannot make changes.

Folders and Files  can be changed => {
assets
core/app/http/controllers
core/app/Models
core/app/Editor/Repositories/Eloquent
core/resources/views
core/routes
core/database
}

##
Folders not mentioned, please do not make change, Like => {
core/config
core/vendor
core/bootstrap
.env
composer.json
artisan
package.json
server.php
webpack.mix.js
lara.md
phpunit.xml
}

Happy Coding and Reviews. Dont forget to drop me any email or whatsapp in case having trouble

Jacinto Joao (JJ)

