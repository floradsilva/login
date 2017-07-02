# TASK : JAVASCRIPT
---------------------------------------------------------
# System Setup
* Install the following package in your sublime 
* [ES linter](https://github.com/roadhump/SublimeLinter-eslint) 


# Study Material
Please ensure that you complete the `main link`(s) and course(s) before starting with the task. Other links are only for further reference.
* ## Developer Tools:
   * ### Course 
     * https://www.codeschool.com/courses/discover-devtools
 > Note: Share screenshot of your progress in status mail.
* ## Coding Standards:
   * ### Main Link: 
     * Search For Linting Issues you encounter as you code ar [ESLint Rules](http://eslint.org/docs/rules/) and try to fix them.  
   * ###  JQuery best practices
     * http://gregfranko.com/jquery-best-practices


## Other References
* ### Javascript Reference:
   * http://javascript.info/
* ### Javascript promises
   * https://kosamari.com/notes/the-promise-of-a-burger-party
* ### Understanding Javascript scope
   * https://scotch.io/tutorials/understanding-scope-in-javascript
   

# Task For HTML JavaScript
 #### Things to Note:
* You will strictly use SASS for all css related tasks ( exception for external libraries css files ).
* You must fix every error indicated by linters.
* You will be using GULP for compiling all js and sass file(s) from working directory to production directory.
* You should include scripts in gulpfile.js to minify/combine asset files wherever necessary and use the generated file in production.
* An example copy of gulpfile.js is available for you inside the boilerplate. You can modify or change it as per your convenience.
* You must strictly follow the coding standards.

## Your Task:
* Clone the given git repository and switch to branch 'javascript-task' for the current task's working directory boilerplate.
   * http://git.wisdmlabs.net/wisdmlabs/wisdm_training.git
* You can find the reference images for this task in the `TASK` folder. We have also provided you a wireframe for further clarification. 
* Create a seperate working directory for this task. Copy paste the code from your `html-css` task and use it as your base code.
* You need to create a new branch in your repo called 'javascript' and commit/push your work for this task onto that branch.
* You are given a data.json file. You can access the json file by making a call to http:\\\\\<your task url>\data\data.json.

**This task is divided into 4 subtask**:
------------------------------------
  * ### Slider 
    * For slider you will be using bootstrap carousel slider. (Refer wireframe )
    * Data for the slider can be found in data.json, **[slider]** variable
    * **NOTE:** Make necessary changes in the botstrap css file to ensure that your site's UX dosen't break after importing bootstrap css.
    * Customize your bootstrap http://getbootstrap.com/customize/ before downloading and using it. 
  * ### Featured posts images:
    * In this section you need to display images of the **latest** four featured posts. Featured posts are those posts in **[posts]** variable whose **is_featured** value is **1**. 
  * ### Search Posts / Result display / Pagination
 	  * The post will be diplayed in latest first fashion 
 	  * On page load all the post should be loaded. Only upto 4 post will be show in the screen at a time. You must implement pagination to hide rest of the posts.
 	  * You have to implement title search. As the person types in letter in the search text area, they have to search through all the post for 'title' starting with the given set of letters and display it. `'No results found'` will be dsiplayed if no match is found.
 	  * For simplicity you are allowed to implement a case sensitive search. Added benifit will be give to person completing this task with a case insensitive search. You are olny allowed to use jQuery or vanila javascript for this task.  
 	  * You must also change pagniation bar based on the number of results obtained.
 	  * The results should be re-rendered each time instead of just hiding/showing posts. 
 	  * Results should also be displayed in the latest first fashion.
  * ### Image grid and popup
    * Data for the grid is available inside the **[grid]** variable
    * There are two images for each grid item. The smaller image needs to be displayed on the grid.
    * Clicking on any of the image in grid should popup its corresponding large image onto a in page popup div.   

## Debugging Task:

* You will find your task inside 'DEBUG-TASK'. You need to fix the code and your final result should be as shown in the images.
* Coding standards is not manditory for this task.



## FOLDER STRUCTURE


```html
.
├── gulpfile.js
├── TASK                  (contains your task images and wireframe)
├── public                (your production files goes here)
│   ├── data
|   |   ├── data.json
|   ├── assets
│   │   ├── css
│   │   │   └── fonts
│   │   ├── images
│   │   └── js
│   └── index.html
├── README.md
├── DEBUG-TASK
└── resources             (your development files goes here)
    └── assets
        ├── scripts       (place your js,typescript or other script files here.Create seperate folder for each extension)
        └── styles 
            ├── css       (place all css files here and compile it to production css folder using gulp)
            └── scss      (place all scss files here and compile it to production css folder using gulp)
```
