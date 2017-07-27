TASK : PHP

# System Setup:

* **Install the following on the system:**

    * phpmd 

    * phpcs (check if phpcs and phpcbf is installed using --version attribute)

    * Composer

    * sendmail server

    * Vagrant boxes (if not installed)

* **Install the following package in your sublime** 

    * SublimeLinter-php

    * SublimeLinter-phpmd

    * phpcs

    * phpcbf

    * php-cs-fixer

    * PHPDoc

    * And configure all for psr-2 standards.

* **Refs:**

    * Read [PSR-2 standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

    * Also read about psr-0 psr-1 and psr-4

    * Read [PHPmd ruleset](https://phpmd.org/rules/index.html). Read about Cyclomatic Complexity, N-Path Complexity

# Pre Task :

## Basic Php (if not done in pre-training) :

* [https://www.codecademy.com/learn/php](https://www.codecademy.com/learn/php)

## OO php : 

* **Course(if not already done)
**[https://www.codecademy.com/courses/web-beginner-en-bH5s3/0/2](https://www.codecademy.com/courses/web-beginner-en-bH5s3/0/2)

* **PHP OO Manual (Read all links): 
**[http://www.php.net/manual/en/language.oop5.php](http://www.php.net/manual/en/language.oop5.php)

## RegEx :

* **Course** 

    * [https://regexone.com/](https://regexone.com/)

* **Refs:** 

    * [https://www.phpro.org/tutorials/Introduction-to-PHP-Regex.html](https://www.phpro.org/tutorials/Introduction-to-PHP-Regex.html)

    * [https://regex101.com](https://regex101.com)  - You can check Regular expression here.

## PHP Unit Testing: 

* **Course:**

[https://drive.google.com/open?id=0B54t4GTQ5mSKLU1qV29oY1BWUmc](https://drive.google.com/open?id=0B54t4GTQ5mSKLU1qV29oY1BWUmc)

## Composer :

* [http://culttt.com/2013/01/07/what-is-php-composer/](http://culttt.com/2013/01/07/what-is-php-composer/)

* [https://scotch.io/tutorials/a-beginners-guide-to-composer](https://scotch.io/tutorials/a-beginners-guide-to-composer)

* [https://www.dev-metal.com/composer-tutorial/](https://www.dev-metal.com/composer-tutorial/)

* [Autoloading using composer](https://www.youtube.com/watch?v=84j61_aI0q8)

## Other Refs: 

* **PHP the right way**

    * [http://www.phptherightway.com](http://www.phptherightway.com)

    * [PDF](http://docshare01.docshare.tips/files/21790/217906846.pdf)** **of php the right way

* **PHP ini**

    * [http://www.99points.info/2010/04/php-ini-file-purpose-of-using-php-ini-fil/](http://www.99points.info/2010/04/php-ini-file-purpose-of-using-php-ini-fil/)

# Things to Note & be followed Strictly:

* Put your `node_module/` , `vendor/`  folder if any in your branch’s `.gitignore` file **before your first push**   

* You will strictly use SASS for all css related tasks ( exception for external libraries css files ).

* You must fix every error indicated by linters.

* You will be using GULP for compiling all js and sass file(s) from working directory to production directory.

* You should include scripts in gulpfile.js to minify/combine asset files wherever necessary and use the generated file in production.

* An example copy of gulpfile.js is available for you inside the boilerplate. You can modify or change it as per your convenience.

* You must strictly follow the coding standards.

# TASK ( Read all the point at once before starting ):

** **

Develop user registration and login system implementation with **object oriented programming** in PHP. Use **sessions** to maintain a state of user.

Create** `php.dev` **virtualhost for this task.

Code will be committed to the **php **branch. 

**Description:**

* **Generate a homepage which shows following two paragraphs. Let’s call it ‘http://****php.dev****/home/’**

*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus elementum*

*vehicula est vitae sollicitudin. Ut pulvinar ultricies posuere. Integer*

*ac iaculis dui, vel rhoncus erat. In tortor nisl, vulputate quis ante*

*vel, vestibulum luctus nunc. Phasellus id lectus ante. Vivamus ultrices,*

*nunc ut sollicitudin hendrerit, leo tellus lacinia nulla, at porta orci*

*orci eget eros. Nullam id ullamcorper mauris, sit amet cursus risus.*

*Nullam a commodo metus, et facilisis velit. Maecenas volutpat mattis*

*odio vel dignissim. Etiam ac fringilla diam, suscipit sodales ipsum. Nam*

*in velit quam. Nunc luctus tempor leo, vel rhoncus mi mattis nec. Lorem*

*ipsum dolor sit amet, consectetur adipiscing elit. Nullam felis massa,*

*ultrices sit amet turpis vel, accumsan blandit est. Etiam nec eros*

*commodo, cursus turpis pulvinar, volutpat odio.*

**
*Sed vitae turpis ac nisi malesuada blandit. Quisque eu molestie eros. Donec*

*facilisis hendrerit augue, eu adipiscing sem lacinia non. Integer*

*sodales purus odio, non pharetra massa accumsan in. In vitae nunc non*

*erat posuere tempus a id ipsum. Suspendisse enim augue, bibendum eget*

*nunc in, lacinia ultrices tortor. Nam enim lorem, gravida eget varius*

*eu, euismod et purus. Etiam egestas sem eu nisi porttitor pharetra.*

*Donec eu libero eu lorem convallis porta. Nullam interdum vitae lorem*

*sit amet dignissim. Proin sit amet tortor ac odio varius dapibus nec at*

*Sem.*

* The second paragraph of above text will be shown only for logged in users.

* If user is not logged in, then he will see two buttons at the place of second paragraph i.e. **Login **Or** Register**. (So at the place of second paragraph your text might go like: **To read more, please login or register**) .

**User visits `/home/`**

* **_If user logged in_***:* Show both paragraphs and also show **‘Edit account’** and **‘Logout’** link.

* **_If user is not logged in:_** Show only one paragraph and ask user to register/login to read second paragraph.

**When user clicks register link:**

* A new page will open showing a registration form. (**/register/**). The  form will include Name(Full name support), username, phone number(Indian), gender, password, confirm password and email id.

* On successful registration, an email will go to the email id specified in registration form, user will be logged in automatically to system and then redirected to ‘**/home/**’. In this case, **/home/** will show both the paragraphs because user is logged in now.

* If registration is not successful, user will be taken back to **‘/register/’** page, system will show the reason why user is not registered just above the registration form and user will be asked to register again.

**When user clicks Login link:**

* A new page will open showing a login form (**/login/**) which includes username and password field.

* On successful login, user will be redirected to **‘/home/’**. Now ‘/**home/’** will show both the paragraphs. At the top of **‘/home/’**, it should show the message **‘You are successfully logged in’**.

* If login is not successful, user will be taken back to **‘/login/’**, system will **alert(see rules for alert)** why user is not logged in and user will be asked to login again.

* The login page will also have **‘Forgot Password’** link.

**When user clicks ‘Forgot Password’ link:**

* Below the login form, a new textbox should appear with button **‘Send me password’**. That textbox will take an email id of the person. Once email id is filled, user will click **‘Send me password’** button.

* After clicking **‘Send Me password’** button, system should send an email to that  person containing link of login page, username and new password for his account.

* Code for sending an email will be accessed via **‘/ajax/send-password/’ **url. System will pass the data to this **url** via **ajax**. That means when user clicks **‘Send Me password’** button, page will not be refreshed but it will send an email call via ajax.

* After sending an email successfully, user will be shown a *alert* **‘An email has been sent to you at <email address>. Kindly check the email’** on the **‘/login/’** page.

* If email id entered by user is not found, then appropriate *alert* should be shown.

   

**When user clicks ‘Edit Account’ link: (/edit-account/):**

* *If user is logged in:*

    * Show Edit account form containing fields like **Name**, **Phone number(Indian)**, Gender, Email, password, confirm password. **Username** should **not be editable**.

    * After editing the account, user will click **‘Update Account’** button and after clicking that button, system will show *alert* on edit account page like **‘Account Information is updated successfully’**.

    * There should also be a link on this edit account page which will take a user to homepage if it is clicked.

   

* *If user is not logged in:*

    * System should redirect user automatically to **/home/**

**When user clicks Log out link: (/logout/)**

* System should log the user out of system.

## Rules of the task and Related Tasks(Read This before Coding): 

1. **Routing and Autoloading:**

    * All the routing logic will be written in  the **_public\index.php_** file

    * Implement PSR-0 autoloading using composer and include the autoloading file in the **_public\index.php _**** **to active autoloading of classes in your project

    * Write rewrite rules in your .htaccess file inside **public\ **folder to redirect all the url to the **index.php** file. Refer [Basic WP](https://codex.wordpress.org/htaccess#Basic_WP) from wordpress. Write an explanation of it’s working on your ReadMe file of this task.

2. **Object Oriented:**

    * The Task should be entirely done using Object Oriented approach.

3. **Database & PDO:**

    * **Setting File** and **DbConnection class** :-

        * All the database setting like( db-name, db-username, db-password  ) will be place inside a **public\setting.php **file. And will be used wherever required.

        * Create a **DbConnection** class that handle database connection. The class will have only one instance at any given point in time.

        * **_Interaction with database should be done using PHP data objects (PDO)_**

    * **Setting Up table**

        * Create a **public\schema.php **file. Write in code that will create schema for you in your database when we type in following command on the terminal
    ```sh
    ../public$ php schema create-schema
    ```
        * **Also**
    ```sh
    ../public$ php init delete-schema
    ```
    should delete all your tables.

        * Give proper permission to the file so that it is accessible only through terminal

4. **phpmailer/phpmailer from composer for Mail**

    * For mailing use [phpmailer/phpmailer](https://packagist.org/packages/phpmailer/phpmailer) package form composer instead of php’s default [mail](http://php.net/manual/en/function.mail.php) function. Though you need to be aware of the default mail function.

    * Try to send mails initially using the **sendmail** server. Then configure it to send mail via gmail smtp server. 

5. **Alert:**

    * For all the alerts use [SweetAlert2](https://www.npmjs.com/package/sweetalert2) **npm** package. Make inclusion in gulp file and not to copy paste it directly to the public folder.

6. **Validation and jQuery Validator**

7. **Unit Testing**

    * Write Test case for your Validator class file.

8. **Error and Access Logs**

    * Apache Access log and Error log on your **resources/logs/server/apache/ **folder.


9. **UI and UX**

    * Try to use standard CSS framework like [Bootstrap](http://getbootstrap.com/)  or [Semantic-UI](https://semantic-ui.com/) for creation of pages.

    * Your site should look neat and modern. Choose color combinations & placements wisely. 

10. **Create 404 page for the domain**

    * Create a 404.php page for your virtualhost and make a inclusion for the same in your apache setting. This page will be shown when user try to access a wrong url inside your domain.


## Folder Structure


```html
.
├── gulpfile.js
├── composer.json
├── package.json
├── public
│   ├── assets\         ( same as previous tasks )
│   ├── controllers\    ( business logic for each route goes here, create seperate classes for each CRUD )
│   ├── includes\       ( additional helper classes goes here )
│   ├── models\         ( your database logics(insert,update,select....) goes here )
│   ├── views\          ( your display logic goes here)
│   └── index.php       ( index.php, your autoloading and routing scripts goes here )
├── README.md
├── tests\              ( your unit test cases goes here )
└── resources
    ├── logs\           ( mail logs, server error logs, system error logs goes here )    
    └── assets\         ( same as previous tasks )
```


## Setting up a new domain name and virtualhost for this task
  * Create a new virtualhost for `html-css.dev` domain.
  * **DocumentRoot** for this virtualhost must point towards the `public/` folder of the html-css task.
  * Add the new domain to your host file with proper ip
  * Restart server and you should be able to access any files inside `public/` folder as `http://html-css.dev/<folder name>/<file name>` from your browser eg. `http://html-css.dev/index.html`