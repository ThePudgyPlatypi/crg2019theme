# Critical Response Group 2019 Theme

## Usage

Please use this guide to navigate your way thru the Critical Response Group Theme. I will roughly breakdown how to add general posts, new content, pages, team members and resource center content. 

--------------------------------------------------------------------------------------

## Creating New Posts
These are the different types of posts. Some are just in different categories, and others you need to select a different post type from the menu

#### Standard News Posts
Use these settings to add a post onto the blog page (News)
**Post Type** - Posts
**Post Format** 
    - Leave Standard
        - This will give you a thumbnail post that has a vertical rectangle image on the left or right, and a small blurb on the opposite side. 
        - Desktop: When post is opened you will have a large vertical rectangle on the left and narrow vertical text on the right
        - Mobile: When the post is opened the image will be stacked over the post text
        - If no featured image then it will just render the text in the center of the screen
**Category** - Critical Response Group Post
**Tags** - Use any tags you feel are relavent. 

#### Resource Center Posts
Use these settings to add a post into the Resource Page (Database)
**Post Type** - Resources
**Post Format**
    (Only use these post formats)
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
**Tags** - Use any tags you feel are relavent. Please add some.
**Featured Image** - See post format.

#### Team Posts
Use these settings to add a post into the Meet the Team Page
**Post Type** - Team
**Post Format** 
    - Only use Standard Post Format
        - YOU MUST USE FEATURED IMAGE IN THE RIGHT SIZE AND ORIENTATION
            - For all employees you will need a large 16:9 aspect ratio image where the left half of the image is occupied by a bust of the employee.
            - for advisors you will need a square image. 
            - no conditions are prepared for without an image.
**Category** 
    (You must select both the correct parent category, and a sub-category for it to show up)
    - Team members -> ${relevant sub-category}
**Tags** - Do not use.
**Order**
    - You must add order meta tag to each employee or it will not show up. The Order meta will align them on the grid in the order that you wish
    - The pagination will be wrong unless you adjust the date and time of the post to fit where you want. Basically if you add a new employee the pagination (those little buttons that let you get to the next employee when inside an employee post already) will be wrong because the newest employee will be all the way at the end of the list and not where you expect them.

#### Partner Posts
Use these settings to add a post into the Partners Page
**Post Type** - Partners
**Post Format** 
    - Post format is disabled
        - You still need to add a featured image.
        - No need to write anything in the post if there is nothing to write about. If you add a link please use the link shortcode.
**Category** 
    (You must select both the correct parent category, and a sub-category for it to show up)
    - Partners -> ${relevant sub-category}
**Tags** - Do not use.
**Order**
    - You must add order meta tag to each partner or it will not show up. The Order meta will align them on the grid in the order that you wish

--------------------------------------------------------------------------------------

## Creating New Pages
To add a new page you can either talk to me or create a basic page in the form of the About Us page. You will need to pick a page template and image for the header. All content typed in Page editor will show before hardcoded anything. Best bet for any serious setup would be to code it. Every page except for the about me page is coded statically and you will have to open up an editor to get it to work. 

**Page templates:**
(as of 02/10/2020)
    - Page-Default - Hero Header (Home page, about page, etc)
    - Page-Extra - No Header (used alot for news posts and such)
    - Page-SmallHeader - Half height header (used for most of the sub pages)

Most pages are setup like (as of 02/10/2020):
**Header template partial:**
    - Header Full - Hero page
    - Header small - Half height header banner
    - Header No - No header
    (there are a few others that are mainly legacy)
**Content Template partial:**
    - All content partials can be found in template-parts folder and are generally named after where they are used...generally. Some of the templates may be legacy
**Footer Template partial:**
    - Just use footer-custom. 

### Shortcodes

**Add stylish button to your post**
The shortcode below can be pasted into a post and it will render a small button in either yellow or blue. 
Defaults
- Color: Yellow
- Text: Read More...

[small_button url="https://someurl.com" text="What you want the button to say" color="yellow||blue"]

https://docs.google.com/forms/d/e/1FAIpQLScXtYgnrE5zkcuU-1UczqPr5E0_lVSgHdPTrafPOJ4hlEkdTg/viewform?vc=0&c=0&w=1