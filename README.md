# jgdm_php_boilerplate **Last Update:** 15-02-22

Boilerplate code for a PHP based website.

## Setup

```cd``` to a project route and clone repository using ```git clone https://github.com/jg-digital-media/jgdm_php_boilerplate```

### Use Sass to generate the styles needed - ```sass --watch sass.scss:styles.css```

### Use PHP variables to apply unique content to PHP Templates
  + `$page_name;`
  + `$meta_description;`
  + `$meta_keywords;`
  + `$meta_image;`
  + `$page_url;`
  + `$page_title;`
  + `$website_title;`


Fill in the values of these pages using the files provided, `index.php.php`, `page_one.php`, `page_two.php`, `page_three.php`. and more.  Feel free to rename the files as required.

These should be filled in at the top of each page above the require statement for the website header.


### Navigation Classes

Using page variables, you can style a "selected page state" according to the page that the user is viewing on your site.  This is done using PHP condition statements.  If a variable has a certain value, add a HTML CLASS to the menu item./ 

```html
<ul class="main_nav">
    <li>
        <a href="index.php" <?php if( $page_name == "home" ) {echo "class=\"selected\"" ;}  ?>>Home</a>
    </li>
    ...

</ul>

```
