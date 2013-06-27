# Codelight-Spec

## This project uses the following:

### CSS tools:
* 1200px fixed with grid css (http://1200px.com)
* Normalize.css for normalized HTML elements(http://necolas.github.io/normalize.css/)
* SASS (http://sass-lang.com/)
* Bourbon (http://bourbon.io/)
* Entypo icon set (http://entypo.com)

### CSS notes:
To reduce class use as much as possible, CSS are based on the individual sections, and use the HTML5 semantic tags nested underneath to appropriately organize themselves.  In a minority of cases will any classes have to be added to these elements.  As long as the html is set up in consistent structure with the front-end, it will render correctly.  The SASS which compiles the CSS uses its built in functions to easily reuse common sections of code.  Any changes to the CSS should be appended to the bottom of the main.css file OR changed directly within the SASS file. 

### Javascript tools: 
* HTML5shiv for HTML5 semantic markup to work in IE9 or below (https://code.google.com/p/html5shiv/)
* jQuery 2.0.0
* Fancybox

### PHP notes
* header.php, footer.php, right-comments.php are parial files that help with HTML templating