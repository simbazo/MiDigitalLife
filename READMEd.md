# README #

#MiDigitalLife#


Hi, All.

Please read this file carefully before you can start making any changes to the Application.

The Website is written using an MVC Structure, and it uses Laravel Framework for the backend, to speed up our work.

To get started with Laravel and to be familiar with the framework, please check the link bellow.
http://laravel.com/

or you guys can check for videos on Laracast, which is paid, but must be something for free.

http://laracasts.com/

The Front end, I use third party CSS, which is a Bootstrap, and some custom CSS files.

For more details about Bootstrap, Please check out the link bellow:

http://bootstrapsale.com/

The Javascript files, is just pure Jquery, But I'll be moving it to Angular 4 By Next Week.


### Application Structure ###

* Quick summary of Main Folders
* assets
* core

### How do I get set up? ###

* Tthe application start with a simple index.php file, which is outside of all folders.
The assets folder contain all Css and Javascript Files.

The core folder, contain the mvc structure for all application.

Folders which you guys should check and make some changes are:
[
controllers 
core/app/Http/Controllers/Web

inside of Web Folder, there are all controllers for the website.

Views
Views are located inside of :
core/app/resources/view
so all views for the website pages like Home Page, About us, Services ect, are located inside of this folder.

Models => Models will be the Business logic for admin side, and all models will be inside of core/app/Models

Routes => Routes are way to navigate between urls or link on website:
Like clicking services, projects, about us.

So the file which manage those links is located inside of 
core/app/routes/web.php
]
* Configuration => there some folders which are just for configuration, and do not touch those folders.

NB: Do not make any change inside of this folder described bellow:

1 => core/vendor
2=> core/config
3=> core/bootstrap
4=> core/app/providers

Any question, please let me know, and i will be able to guide you guys at anytime


* Repo owner or Jacinto Joao
* Team allowed 
* Rory Leisegang
* Ryan Johnson

/*Thanks All */