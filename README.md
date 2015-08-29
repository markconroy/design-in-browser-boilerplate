Design in Browser Boilerplate

This is an attempt to put together a sensible (and quick) boilerplate for
creating designs in the browser.

It aims to use Drupal classes where possible to allow CSS be transferred
directly from this to a Drupal theme with minimal effort.

It uses Zen-Grids for laying out of items. For this reason, it's best to use
this boilerplate with Zen themes, though it should work for any theme.

## Basic Documentation
(things will be more streamlined as the project develops)

### Colours
Colours are defined by variables in the variables.scss file. Please ignore the
garishness of this at the moment - the colours there are only to show the
different site areas.

### Sidebars
To set the number of sidebars, edit the main.php file in the directory of your
choice (we suggest starting with a clone of the starter-directory).  
The sidebars are set by choosing a layout template. Presently there are four
you can choose:  
1) left-main-right.php - left sidebar, main content, and right sidebar  
2) left-main.php - left sidebar and main content  
3) main-right.php - main content and right sidebar  
4) main.php - main content area only  

### Footer Blocks
You can have 1, 2, 3, or 4 blocks in footer at the moment. To change footer layout
edit inludes/footer.php  
One block: change 4-block.php to 1-block.php  
Two blocks: change 4-block.php to 2-block.php  
Three blocks: change 4-block.php to 3-block.php  
Four blocks: change 4-block.php to 4-block.php  
CSS has been added to lay the different layouts out accordingly.

### News Listing Page
The news is laid out in a grid at the moment. to change this to a list, edit
news/main.php changing news-grid.php to news-list.php  
The news page is not yet using the $mainContent variable for its content. This
may change in the future (note - it probably will).

### Menu
The menu has basic responsiveness built-in. It does not have a browser resize
feature yet, so you need to refresh the page to see the mobile/desktop menu
@todo - make the menu look acceptable on desktop

### Contact Form
There is no functionality here yet. It's just a prototype.
