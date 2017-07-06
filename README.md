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
    | └── style.scss                 
    |── css                (css folder)
    |   └── style.css      (output file)
    |── js
    |    |── input1.js     (input file 1)
    |    └── input2.js     (input file 2) 
    └── minfied-js
      └── output.js       ( combine input1.js and input2.js and then minify the combined file and place it into output.js )
    ```


* ## Resonsive Design: 
    * ### Main Link:
      * https://internetingishard.com/html-and-css/responsive-design/
    * ### Course: 
      * https://www.codecademy.com/learn/learn-responsive-design
    * ### Reference Links: 
      * http://learn.shayhowe.com/advanced-html-css/responsive-web-design/
* ## Semantic html
   * ### Main Link: 
     * https://internetingishard.com/html-and-css/semantic-html/
   * ### Reference Links:
     * http://learn.shayhowe.com/html-css/getting-to-know-html/
* ## Standards:
   * ### Main Link: 
     * HTMl PART of (https://github.com/bendc/frontend-guidelines)
   * ## Reference Links :
     * https://github.com/brigade/scss-lint/blob/master/lib/scss_lint/linter/README.md


## Other Reference 
* ## How does a browser renders a web page(Critical Render Page):  
   * https://developers.google.com/web/fundamentals/performance/critical-rendering-path/
* ## HTML good Practices 
   * https://www.w3schools.com/html/html5_syntax.asp
* ## Some Good Links:
   * http://learn.shayhowe.com/html-css/building-your-first-web-page/
   * http://html5doctor.com/avoiding-common-html5-mistakes/#nav-external
   * http://html5doctor.com/avoiding-common-html5-mistakes/#figure
   * http://html5doctor.com/avoiding-common-html5-mistakes/#type-attr
   * http://html5doctor.com/avoiding-common-html5-mistakes/#form-attr
   * https://www.thoughtco.com/why-use-semantic-html-3468271

# Task For HTML CSS
 #### Things to Note:
* You will strictly use SASS for all css related tasks ( exception for external libraries css files ).
* You must fix every error indicated by linters.
* You will be using GULP for compiling all the js and sass file(s) from working directory to production directory.
* You should include scripts in gulpfile.js to minify/combine asset files wherever necessary and use the generated file in production.
* An example copy of the gulpfile.js is available for you inside the boilerplate. You can modify or change it as per your convenience.
* You must strictly follow the coding standards.

## Your Task:
* Clone the given git repository and switch to branch 'html-css-task' for the current task's working directory boilerplate.
   * http://git.wisdmlabs.net/wisdmlabs-training/backend-task/tree/html-css-task
* Create responsive web page as shown in the images. You will find your images in the `TASK` folder 
* You must use proper html sementic elements for completion of this task.
* You are free to use any images online. We expect you to use a font which is viusally closer to the fonts used in the images, exact font is not needed.
* Change the remote repository of the git to your personal repository. Push your code to 'html-css' branch
* Add the 'TASK' folder in your .gitignore file before your first push to the 'html-css' branch
* Once the task is complete add a readme.md file with a short discription of your task. And commit the same to your repository. 

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