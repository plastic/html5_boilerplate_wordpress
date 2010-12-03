Yet another HTML5 Boilerplate Wordpress theme - with a twist
============================================================

This is a very stripped down wordpress theme that hopes to fill in a niche that, from our experience, hasn't been fully realized.  If we're going to future-proof our wordpress themes with HTML5 and CSS3 let's not stop at just integrating Paul Irish and Divya Manian's Boilerplate or marking up with all the new HTML5 tags, let's use something like SASS/SCSS, Compass, and the Susy grid framework to facilitate easier and faster stylesheet authoring.  The goal of this experiment is to pull in the best open source tools to help us work with wordpress theming.

What do I need to get started with this theme?
==============================================

* Compass
* The Susy grid framework

The above are all gems and depend on ruby and rubygems being installed.  If you do not have ruby and rubygems installed, visit http://www.ruby-lang.org/en/ and http://rubygems.org/ to get started.  To determine if you have them installed:

    which ruby
    which gem

If either of those two do not return a path to the binary, you'll need to install them.

To install compass and susy (if you are using RVM you won't need to sudo the following commands) : 

    sudo gem install compass --pre
    sudo gem install compass-susy-plugin

You should have the necessary dependencies installed and are now ready to clone this to your wordpress project.

    git clone git://github.com/jayroh/html5_boilerplate_wordpress.git /path/to/project/wp-content/themes/html5_boilerplate

And most importantly - to compile the changes you make in the theme's SCSS files, located in wp-content/themes/html5_boilerplate/sass/*, you may continually watch for changes :

    compass watch /path/to/project/wp-content/themes/html5_boilerplate

The above will compile to wp-content/themes/html5_boilerplate/style.css with comments detailing the line in the SCSS where that was defined.   For production purposes, or just for cleanliness's sake, to forcefully compile in a compact format, without the line comments :

    compass compile /path/to/project/wp-content/themes/html5_boilerplate -s compact --force --no-line-comments

To see more options just run `compass help`

Anatomy of this theme
=====================

* As mentioned above, the html5 boilerplate project (https://github.com/paulirish/html5-boilerplate) serves as the basis for the markup and stylesheet as much as possible.  The one exception that stands out is that javascript is still included within `<head/>` by default instead of just before `</body>`.
* The latest versions of Modernizr, DD_belatedPNG and jQuery.
* CSS has been split up into partials using the SCSS formatting method instead of traditional SASS.   All partials can be found in html5_boilerplate/sass/partials.
* In addition to base font variables, style.scss contains grid-related variables that will drive how we layout the theme.  Currently the default is a 16 column grid (for a 960px wide grid), but you will also find a 12 column grid commented out above.
* functions.php does some light housekeeping as well as additional options under _Appearance > More Theme Options_ for turning on/off and setting up multiple sidebars (left, right, footer).

Further Reading
===============

We highly recommend looking through the documentation for all the projects that helped make this theme what it is :

* The HTML5 Boilerplate Project.  http://html5boilerplate.com
* Sass. http://sass-lang.com/, http://sass-lang.com/tutorial.html
* Compass. http://beta.compass-style.org/
* Susy. http://susy.oddbird.net/

Many Thanks To
==============

[Paul Irish](http://paulirish.com/), [Divya Manian](http://nimbupani.com/), [Faruk Ates](http://farukat.es/), [Chris Eppstein](http://compass-style.org), [the OddBirds - Carl Meyer, Eric Meyer and Jonny Gerig Meyer](http://susy.oddbird.net/) - thank you all for your hard work!

Contact
=======

This is by no means done and we would LOVE feedback - pull requests, patches, additions, anything.

Thank you.

Joel Oliveira [@jayroh](http://twitter.com/jayroh) and Mike Susz  [@mikesusz](http://twitter.com/mikesusz)