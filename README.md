# TASK : HTML
---------------------------------------------------------
# System Setup
* Install the following package in your sublime 
* [SASS linter](https://github.com/brigade/scss-lint)  
* Intall gulp globally 
 * npm install --global gulp-cli (https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)

# Study Material
Please ensure that you complete the `main link`(s) and course(s) before starting with the task. Other links are only for further reference.
* ## Sass:
   * ### Course 
     * https://www.codecademy.com/learn/learn-sass
   * ### Reference: 
     * http://sass-lang.com/guide
* ## Gulp Course :
   * Complete the following courses from [udacity](https://classroom.udacity.com/courses/ud892/lessons/5332430837/concepts/53252207760923#)
	 * Course - Lesson 3: Powerful builds
     * Advanced Training - Lesson 5: Awesome Optimization
* Gulp Task : 
   * Create a gulpfile that compiles style.scss from `sass/` folder and place the compiled css file into the `css/` folder
   * Also add snippet to your gulp file to combine and minify all js file inside `js` folder and place it in the `minified-js` folder 
   * Place your gulp task inside `gulp-task` folder.
   * Create a new branch called 'html-css' and then push your code to that branch.

		```html
gulp-task
    |
		├── gulpfile.js
		├── sass               (sass folder) 
		|	└── style.scss                 
		|── css                (css folder)
		|   └── style.css      (output file)
		|── js
		|    |── input1.js     (input file 1)
		|    └── input2.js     (input file 2) 
		└── minfied-js
			└── output.js       ( combine input1.js and input2.js and then minify the combined file and place it into output.js )
		```


# Things to Note:
* You will strictly use SASS for all css related tasks ( exception for external libraries css files ).
* You must fix every error indicated by linters.
* You will be using GULP for compiling all the js and sass file(s) from working directory to production directory.
* You should include scripts in gulpfile.js to minify/combine asset files wherever necessary and use the generated file in production.
* You must strictly follow the coding standards.
* Use the standard folder structure for this task. Keep your task modular as much as possible.

## Task - Create Ecommerce Website ( Html/Css/Responsive ) - 54 Hours:

* Mockup -

    * [https://drive.google.com/open?id=0B1_MAzSfl-xeUVRRRkMyWVpjT0E](https://drive.google.com/open?id=0B1_MAzSfl-xeUVRRRkMyWVpjT0E)

* Create a static ecommerce website which contains the following pages.

* Home

* Blog

* Single blog

* Store

* Single product

* Each pages will have a common header and footer as shown in the mockup.

* Header contains logo and menu links

* Footer contains gallery of static images and back to top button, nav links and copyright content

* **The home page will contain the following sections**

* Banner section

    * Banner section contains the slider which contains 3 slides and 4 images (2 on each side of the slider. Look mockup)

    * Each slide in banner will contain the image and the image title text

* Recent articles

    * Structure and style the sections as shown in mockup

    * Each section contains:

        * Image

        * Title

        * Category

        * Published date

        * Author

        * Excerpt

        * Continue reading link

        * Comments count

* Featured articles

    * Same as recent articles

* **The Blog page will contain the following sections**

* Banner with breadcrumb of links (static links)

* Left Sidebar which contains 

    * Author sections

    * Categories listing

    * Recent posts

    * Tags section

* The main section will contain

    * 2 column grid of blog posts which contains

        * Image

        * Title

        * Category

        * Published date

        * Author

        * Excerpt

        * Continue reading link

        * Comments count

* Pagination

* **The Single blog page will contain the following sections**

    * Banner with breadcrumb of links (static links)

    * Right Sidebar which contains 

        * Author sections

        * Categories listing

        * Recent posts

        * Tags section

    * The main section will contain

        * Single article which contains

            * Featured Image

            * Title

            * Category

            * Published date

            * Author

            * Content

            * Comments Form

            * List of comments

            * Comments count

        * Related posts section which contains 

            * 2 column grid of posts (see design)

* **The Store page will contain the following sections**

* Banner with breadcrumbs

* Left sidebar which contains

    * Product categories

    * Filter by price

    * Sale products

    * Product tags

* Right Main section contains

    *  sort filter

    * 3 column grid of products. Each section contains

        * Product image

        * Sale tag (see design)

        * Title

        * Actual price and sale price (see design)

    * Load more button (keep it static)

* **The single product page will contain the following sections**

* Breadcrumbs

* Product image with gallery

* Right section contains

    * Title

    * Price

    * Short description

    * Color variations

    * Size variations

    * Quantity

    * Add to cart

    * Sku

    * Categories

    * Tags

    * Share sections

* Tabs which contains

    * Description 

        * Product image

        * Detailed product description

    * Additional Information

        * Table data of color and sizes (see design)

    * Reviews

        * Review form

        * Rating section

* Implement sass/gulp for this ( keep the directories modular )

* Test/Markup created mark up through [Markup V
alidation Service](http://validator.w3.org/)


# To Read:
* http://learn.shayhowe.com/
* https://internetingishard.com/html-and-css
* ## How does a browser renders a web page(Critical Render Page):  
   * https://developers.google.com/web/fundamentals/performance/critical-rendering-path/
* ## Standards:
   * ### Main Link: 
     * HTMl PART of (https://github.com/bendc/frontend-guidelines)
   * ## Reference Links :
     * https://github.com/brigade/scss-lint/blob/master/lib/scss_lint/linter/README.md
* ## HTML good Practices 
   * https://www.w3schools.com/html/html5_syntax.asp

## Other Reference 
   * https://www.thoughtco.com/why-use-semantic-html-3468271
   * http://html5doctor.com/avoiding-common-html5-mistakes/#nav-external
   * http://html5doctor.com/avoiding-common-html5-mistakes/#figure
   * http://html5doctor.com/avoiding-common-html5-mistakes/#type-attr
   * http://html5doctor.com/avoiding-common-html5-mistakes/#form-attr


## FOLDER STRUCTURE

```html
.
├── gulpfile.js
├── TASK                  (contains your task images)
├── public                (your production files goes here)
│   ├── assets
│   │   ├── css
│   │   │   └── fonts
│   │   ├── images
│   │   └── js
│   └── index.html
├── README.md
└── resources             (your dev files goes here)
    └── assets
        ├── scripts       (place your js,typescript or other script files here)
        └── styles 
            ├── css       (place all css files here and compile it to production css folder using gulp)
            └── scss      (place all scss files here and compile it to production css folder using gulp)
```