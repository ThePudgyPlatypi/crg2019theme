# Usage

Please use this guide to navigate your way thru the Critical Response Group Theme. I will roughly breakdown how to add general posts, new content, pages, team members and resource center content. 

# Creating New Posts
These are the different types of posts. Some are just in different categories, and others you need to select a different post type from the menu

## Standard News Posts
Use these settings to add a post onto the blog page (News)

**Post Type**
- Posts

**Post Format** 
- Leave Standard
  - This will give you a thumbnail post that has a vertical rectangle image on the left or right, and a small blurb on the opposite side. 
  - Desktop: When post is opened you will have a large vertical rectangle on the left and narrow vertical text on the right
  - Mobile: When the post is opened the image will be stacked over the post text
  - If no featured image then it will just render the text in the center of the screen
  
**Category**
- Critical Response Group Post

**Tags**
- Use any tags you feel are relavent. 

## Resource Center Posts
Use these settings to add a post into the Resource Page (Database)

**Post Type**
- Resources

**Post Format** (Only use these post formats)
- Standard Format will give you a post that looks like a standard news posts with or without a featured image
- Video Format should only be used for video and needs to have a video placed inside the post body in some way. 
  - Featured Image not fully supported. It will not show thumbnail on grid, but will render when someone clicks on the video. So if you have something fun you want to show when someone opens the post then go for it, but it is not recommended as a good user experience.
  - Video thumbnail is rendered from first video block entered into the post.
  - You can put multiple videos into the post but only the first will get its thumbnail rendered.
- Link Format should be used for all resource posts where the primary purpose is to just link to another document somewhere. You should also include the link shortcode that I outline below. 
  - Featured image not supported in anyway. If you absolutely need to put an image on this then you will need to put it in the post body.
  - No Thumbnail is rendered in posts grid.
  
**Category** 
(You must select both the correct parent category, and a sub-category for it to show up)
- Database -> ${relevant sub-category}
    
**Tags**
- Use any tags you feel are relavent. Please add some.

**Featured Image**
- See post format.

## Team Posts
Use these settings to add a post into the Meet the Team Page

**Post Type**
- Team

**Post Format** 
- Only use Standard Post Format
  - YOU MUST USE FEATURED IMAGE IN THE RIGHT SIZE AND ORIENTATION
  - For all employees you will need a large 16:9 aspect ratio image where the left half of the image is occupied by a bust of the employee.
  - for advisors you will need a square image. 
  - no conditions are prepared for without an image.
            
**Category** (You must select both the correct parent category, and a sub-category for it to show up)
- Team members -> ${relevant sub-category}
    
**Tags**
- Do not use.

**Order**
- You must add order meta tag to each employee or it will not show up. The Order meta will align them on the grid in the order that you wish
- The pagination will be wrong unless you adjust the date and time of the post to fit where you want. Basically if you add a new employee the pagination (those little buttons that let you get to the next employee when inside an employee post already) will be wrong because the newest employee will be all the way at the end of the list and not where you expect them.

**Meta**
You can use meta tags title, email, phone, and select media links. If the field does no exist it is not added. If you fill in phone, email, or title with the words default it will print crg email and phone. Links will dislplay an icon for the corresponding social media place.

- Links
  - website -> use for personal link
  - linkedin
  - youtube
  - twitter
  - instagram
  - facebook

## Partner Posts
Use these settings to add a post into the Partners Page

**Post Type**
- Partners

**Post Format** 
- Post format is disabled
  - You still need to add a featured image.
  - No need to write anything in the post if there is nothing to write about. If you add a link please use the link shortcode.
  
**Category** 
(You must select both the correct parent category, and a sub-category for it to show up)
- Partners -> ${relevant sub-category}

**Tags**
- Do not use.

**Order**
- You must add order meta tag to each partner or it will not show up. The Order meta will align them on the grid in the order that you wish

# Creating New Pages
To add a new page you can either talk to me or create a basic page in the form of the About Us page. You will need to pick a page template and image for the header. All content typed in Page editor will show before hardcoded anything. Best bet for any serious setup would be to code it. Every page except for the about me page is coded statically and you will have to open up an editor to get it to work. 

**Page templates:**
(as of 02/10/2020)
- Page-Default - Hero Header (Home page, about page, etc)
- Page-Extra - No Header (used alot for news posts and such)
- Page-SmallHeader - Half height header (used for most of the sub pages)

**General Structure of page template is as follows**
1. **Header template partial:**
  - Header Full - Hero page
  - Header small - Half height header banner
  - Header No - No header
  - (there are a few others that are mainly legacy)
2. **Content Template partial:**
  - All content partials can be found in template-parts folder and are generally named after where they are used...generally. Some of the templates may be legacy    
3. **Footer Template partial:**
  - Just use footer-custom. 

### Shortcodes

**Add stylish button to your post**
The shortcode below can be pasted into a post and it will render a small button in either yellow or blue. 
Defaults
- Color: Yellow
- Text: Read More...

[small_button url="https://someurl.com" text="What you want the button to say" color="yellow||blue"]

https://docs.google.com/forms/d/e/1FAIpQLScXtYgnrE5zkcuU-1UczqPr5E0_lVSgHdPTrafPOJ4hlEkdTg/viewform?vc=0&c=0&w=1

Below here is all information on the framework used to build this theme

# FoundationPress

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/olefredrik/foundationpress?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![GitHub version](https://badge.fury.io/gh/olefredrik%2Ffoundationpress.svg)](https://github.com/olefredrik/FoundationPress/releases)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

This is a starter-theme for WordPress based on Zurb's [Foundation for Sites 6](https://foundation.zurb.com/sites.html), the most advanced responsive (mobile-first) framework in the world. The purpose of FoundationPress, is to act as a small and handy toolbox that contains the essentials needed to build any design. FoundationPress is meant to be a starting point, not the final product.

Please fork, copy, modify, delete, share or do whatever you like with this.

All contributions are welcome!

## Requirements

**This project requires [Node.js](http://nodejs.org) v6.x.x 11.6.x to be installed on your machine.** Please be aware that you might encounter problems with the installation if you are using the most current Node version (bleeding edge) with all the latest features.

FoundationPress uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

If you have not worked with a Sass-based workflow before, I would recommend reading [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners), a short blog post that explains what you need to know.

## Quickstart

### 1. Clone the repository and install with npm
```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/olefredrik/FoundationPress.git
$ cd FoundationPress
$ npm install
```

### 2. Configuration

#### YAML config file
FoundationPress includes a `config-default.yml` file. To make changes to the configuration, make a copy of `config-default.yml` and name it `config.yml` and make changes to that file. The `config.yml` file is ignored by git so that each environment can use a different configuration with the same git repo.

At the start of the build process a check is done to see if a `config.yml` file exists. If `config.yml` exists, the configuration will be loaded from `config.yml`. If `config.yml` does not exist, `config-default.yml` will be used as a fallback.

#### Browsersync setup
If you want to take advantage of [Browsersync](https://www.browsersync.io/) (automatic browser refresh when a file is saved), simply open your `config.yml` file after creating it in the previous step, and put your local dev-server address and port (e.g http://localhost:8888) in the `url` property under the `BROWSERSYNC` object.

#### Static asset hashing / cache breaker
If you want to make sure your users see the latest changes after re-deploying your theme, you can enable static asset hashing. In your `config.yml`, set ``REVISIONING: true;``. Hashing will work on the ``npm run build`` and ``npm run dev`` commands. It will not be applied on the start command with browsersync. This is by design.  Hashing will only change if there are actual changes in the files.

### 3. Get started

```bash
$ npm start
```

### 4. Compile assets for production

When building for production, the CSS and JS will be minified. To minify the assets in your `/dist` folder, run

```bash
$ npm run build
```

#### To create a .zip file of your theme, run:

```
$ npm run package
```

Running this command will build and minify the theme's assets and place a .zip archive of the theme in the `packaged` directory. This excludes the developer files/directories from your theme like `/node_modules`, `/src`, etc. to keep the theme lightweight for transferring the theme to a staging or production server.

### Project structure

In the `/src` folder you will find the working files for all your assets. Every time you make a change to a file that is watched by Gulp, the output will be saved to the `/dist` folder. The contents of this folder is the compiled code that you should not touch (unless you have a good reason for it).

The `/page-templates` folder contains templates that can be selected in the Pages section of the WordPress admin panel. To create a new page-template, simply create a new file in this folder and make sure to give it a template name.

I guess the rest is quite self explanatory. Feel free to ask if you feel stuck.

### Styles and Sass Compilation

 * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

 * `src/assets/scss/app.scss`: Make imports for all your styles here
 * `src/assets/scss/global/*.scss`: Global settings
 * `src/assets/scss/components/*.scss`: Buttons etc.
 * `src/assets/scss/modules/*.scss`: Topbar, footer etc.
 * `src/assets/scss/templates/*.scss`: Page template styling

 * `dist/assets/css/app.css`: This file is loaded in the `<head>` section of your document, and contains the compiled styles for your project.

If you're new to Sass, please note that you need to have Gulp running in the background (``npm start``), for any changes in your scss files to be compiled to `app.css`.

### JavaScript Compilation

All JavaScript files, including Foundation's modules, are imported through the `src/assets/js/app.js` file. The files are imported using module dependency with [webpack](https://webpack.js.org/) as the module bundler.

If you're unfamiliar with modules and module bundling, check out [this resource for node style require/exports](http://openmymind.net/2012/2/3/Node-Require-and-Exports/) and [this resource to understand ES6 modules](http://exploringjs.com/es6/ch_modules.html).

Foundation modules are loaded in the `src/assets/js/app.js` file. By default all components are loaded. You can also pick and choose which modules to include. Just follow the instructions in the file.

If you need to output additional JavaScript files separate from `app.js`, do the following:
* Create new `custom.js` file in `src/assets/js/`. If you will be using jQuery, add `import $ from 'jquery';` at the top of the file.
* In `config.yml`, add `src/assets/js/custom.js` to `PATHS.entries`.
* Build (`npm start`)
* You will now have a `custom.js` file outputted to the `dist/assets/js/` directory.

## Demo

* [Clean FoundationPress install](http://foundationpress.olefredrik.com/)
* [FoundationPress Kitchen Sink - see every single element in action](http://foundationpress.olefredrik.com/kitchen-sink/)

## Local Development
We recommend using one of the following setups for local WordPress development:

* [MAMP](https://www.mamp.info/en/) (macOS)
* [WAMP](http://www.wampserver.com/en/download-wampserver-64bits/) (Windows)
* [LAMP](https://www.linux.com/learn/easy-lamp-server-installation) (Linux)
* [Local](https://local.getflywheel.com/) (macOS/Windows)
* [VVV (Varying Vagrant Vagrants)](https://github.com/Varying-Vagrant-Vagrants/VVV) (Vagrant Box)
* [Trellis](https://roots.io/trellis/)


## Tutorials

* [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners/)
* [Responsive images in WordPress with Interchange](http://rachievee.com/responsive-images-in-wordpress/)
* [Learn to use the _settings file to change almost every aspect of a Foundation site](http://zurb.com/university/lessons/66)
* [Other lessons from Zurb University](http://zurb.com/university/past-lessons)

## Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)

## Showcase

* [Harvard Center for Green Buildings and Cities](http://www.harvardcgbc.org/)
* [The New Tropic](http://thenewtropic.com/)
* [Parent-Child Home Program](http://www.parent-child.org/)
* [Hip and Healthy](http://hipandhealthy.com/)
* [Franchise Career Advisors](http://franchisecareeradvisors.com/)
* [Maren Schmidt](http://marenschmidt.com/)
* [Finnerodja](http://www.finnerodja.se/)
* [WP Diamonds](http://www.wpdiamonds.com/)
* [Storm Arts](http://stormarts.fi/)
* [ProfitGym](http://profitgym.nl/)
* [Agritur Piasina](http://www.agriturpiasina.it/)
* [Byington Vineyard & Winery](https://byington.com/)
* [Show And Tell](http://www.showandtelluk.com/)
* [Wahl + Case](https://www.wahlandcase.com/)
* [Morgridge Institute for Research](https://morgridge.org)
* [Impeach Trump Now](https://impeachdonaldtrumpnow.org/)
* [La revanche des sites](https://www.la-revanche-des-sites.fr/)
* [Dyami Wilson](https://dyamiwilson.com)
* [Madico Solutions](https://madico.com)

>Credit goes to all the brilliant designers and developers out there. Have **you** made a site that should be on this list? [Please let me know](https://twitter.com/olefredrik)

## Contributing
#### Here are ways to get involved:

1. [Star](https://github.com/olefredrik/FoundationPress/stargazers) the project!
2. Answer questions that come through [GitHub issues](https://github.com/olefredrik/FoundationPress/issues)
3. Report a bug that you find
4. Share a theme you've built on top of FoundationPress
5. [Tweet](https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffoundationpress.olefredrik.com%2F&text=Check%20out%20FoundationPress%2C%20the%20ultimate%20%23WordPress%20starter-theme%20built%20on%20%23Foundation%206&tw_p=tweetbutton&url=http%3A%2F%2Ffoundationpress.olefredrik.com&via=olefredrik) and [blog](http://www.justinfriebel.com/my-first-experience-with-foundationpress-a-wordpress-starter-theme-106/) your experience of FoundationPress.

#### Pull Requests

Pull requests are highly appreciated. Please follow these guidelines:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)
4. Verify that all the Travis-CI build checks have passed
