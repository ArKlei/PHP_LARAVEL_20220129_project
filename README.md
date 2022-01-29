# PHP_LARAVEL_20220129_project

******************* Užduotis: **********************

2022-01-29 Laravel užduotis
Due tomorrow at 11:59 PM
Instructions
1. Sukurti Laravel projektą.
2. Į projektą įtraukti autentifikacijos modulį. Komandos:
composer require laravel/ui
php artisan ui vue --auth
npm install
npm run dev
3. Sukurti modelį "ArticleCategory":
id
title(string)
description(longtext)
4. Sukurti modelį "Article":
id
title(string)
excerpt(text)
description(longtext)
author(text)
5. Sukurti modelį "AuthorImage"
id
alt(string)
src(string)
width(string)
height(string)
class(string)
6. Tarp modelių savo nuožiūrą sudaryti ryšį: ArticleCategory gali turėti daug Article, vienam Article galim parinkti vieną AuthorImage.
7. Visiems modeliams sukurti pilnas CRUD operacijas.
8. ArticleImage modeliui, kuriant CRUD operacijas pritaikyti paveiksliuko įkėlimo kodą.
9. Visiems puslapiams pritaikyti autentifikacijos modulio dizainą.

******************* CRUD kūrimas: *******************
  
1. Sukurti projektą: New Terminal>composer create-project laravel/laravel projekto_pavadinimas.
2. Patikrinti ar viskas susikūrė, ar atsirado projektas + įkelti į github
3. Įeiti į projektą per cd projekto_pavadinimas
4. Per PhPMyAdmin sukurti duomenų bazę "projekto_pavadinimas ir nustatyti šriftą utf8mb4_unicode_ci + "create"
5. Faile ".env" 14 eilutėje pakeisti "laravel" į "projekto_pavadinimas"
6. Direktorijos "Config" faile "Database.php" 60 eilutėje pakeisti "null" į "'InnoDB'", su viengubomis kabutėmis!
7. Instaliuoti paketą composer require laravel/ui ("What is Laravel ui? Laravel UI is a new first-party package that extracts the UI portion of a Laravel project into a separate laravel/ui package. The separate package enables the Laravel team to iterate on the UI package separately from the main Laravel codebase.")
8. Instaliuoti autorizaciją php artisan ui vue --auth ("php artisan ui vue --auth -> The command will generate the auth routes and a VueJs starter template. php artisan ui:auth -> The command will generate the auth routes, a HomeController, auth views, and a app. blade. php layout file.")
9. Atlikti migraciją php artisan migrate ("Migrations are a type of version control for your database. They allow a team to modify the database schema and stay up to date on the current schema state. Migrations are typically paired with the Schema Builder to easily manage your application's schema.")
10. Paleisti npm install ("npm install downloads a package and it's dependencies. npm install can be run with or without arguments. When run without arguments, npm install downloads dependencies defined in a package. json file and generates a node_modules folder with the installed modules. / NPM is used to manage dependencies for packages. If you were to unpack a framework and use it outside NPM, you would have to do this every time you want to update the framework. NPM does this for you. You always know what version you're on, and you can limit a dependency to a specific major/minor/patch version. / The name npm (Node Package Manager) stems from when npm first was created as a package manager for Node. js. All npm packages are defined in files called package. json. The content of package.")
11. Paleisti npm run dev ("run : It is a command native to npm. More information here. Keep in mind this is an aliases to the original command run-script . dev and prod : They're user defined. dev : Used for running the specific commands for serving the project, to any server, to live")
12. Esant klaidoms (pabėgęs app dizainas) - ištrinti bylą package-lock.json, package.json pakeisti 23 eilutėje versiją iš "7" į "8", ištrinti "node_modules" direktoriją ir vėl paleisti "npm i" bei "npm run dev"
13. Sukurti modelį: php artisan make:model AuthorImage --all
14. Sukurti modelį: php artisan make:model Article --all
15. Sukurti modelį: php artisan make:model ArticleCategory --all
16. Numatyti modelių/Objektų savybių rinkinius ir ryšius tarp jų web.php route suformavimui ir migracijos eiliškumui parinkti.
17. Sukurti modelio/objekto "ArticleCategory" savybes/DB duomenų tipus: id, title(string), description(longtext) ir article_id(unsignedBigInteger) bei ryšį foreign/hasMany tipus su Article per article_id > id
18. Sukurti modelio/objekto "Article" savybes/DB duomenų tipus: id, title(string), excerpt(text), description(longtext), author(text) ir author_image_id(unsignedBigInteger) bei ryšį foreign/belongsTo tipus su AuthorImage per author_image_id > id + ryšį hasMany su ArticleCategory
19. 
