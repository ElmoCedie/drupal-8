CONTENTS OF THIS FILE
---------------------
   
 * INTRODUCTION
 * THEME FEATURES
 * THEME REGIONS
 * REQUIREMENTS
 * INSTALLATION
 * FAQ
 * MAINTAINERS
 * DEMO

INTRODUCTION
------------
Bootstrap Mint is a mobile-first Drupal 8 theme, built on the powerful Bootstrap
 3.x Framework.

THEME FEATURES
--------------
Mobile-first clean & modern design
HTML5 & CSS3
Powerful grid system - Bootstrap 3.x
Retina-ready icons - Font Awesome 4.x
Google Font - Exo 2
Responsive multi-level navigation menu
Bootstrap carousel for slideshow
Four columns layout
Intelligent dynamic columns
Customizable theme setting
and more..

THEME REGIONS
-------------
Bootstrap Mint encapsulates these following regions:

+-----------------------------------------+
| +-----------------+-------------------+ |
| |      Sliding    |     Sliding       | |
| |    Header Left  |   Header Right    | |
| +-----------------+-------------------+ |
| +-------------------------------------+ |
| |              Header                 | |
| +-------------------------------------+ |
| |           Primary Menu              | |
| +-------------------------------------+ |
| |            Slideshow                | |
| +-------------------------------------+ |
| +-------------------------------------+ |
| |             Search                  | |
| +-------------------------------------+ |
| +-------------------------------------+ |
| |         Promotion Banner            | |
| +-------------------------------------+ |
| +-------------------------------------+ |
| |           Highlighted               | |
| +-------------------------------------+ |
| +-------------------------------------+ |
| |              Help                   | |
| +-------------------------------------+ |
| +------------+------------+-----------+ |
| | Top Widget | Top Widget | Top Widget| |
| |   Left     |  Middle    |   Right   | |
| +------------+------------+-----------+ |
| +---------+ +---------------+---------+ |
| |         | |  Content Top  |         | |
| |         | +---------------+         | |
| |         | |  Breadcrumbs  |         | |
| |         | +---------------+         | |
| | Sidebar | +---------------+ Sidebar | |
| |  Left   | |   Page Title  |  Right  | |
| |         | +---------------+         | |
| |         | |    Content    |         | |
| |         | +---------------+         | |
| |         | |Content Bottom |         | |
| +---------+ +---------------+---------+ |
| +--------+---------+---------+--------+ |
| | Footer |  Footer |  Footer | Footer | |
| | Top1   |  Top2   |  Top3   | Top4   | |
| +--------+---------+---------+--------+ |
| |               Footer                | |
| +-------------------------------------+ |
| |            Footer Menu              | |
| +-------------------------------------+ |
+-----------------------------------------+

As you can see, Bootstrap Mint theme support multiple columns in the top, middle
 and footer area. Width of a column gets dynamically calculated at run time. For
 example, the 'Footer Top' region (i.e. Footer Top 1 + Footer Top 2 + Footer Top
 3 + Footer Top 4) can host max of 4 blocks in a row. In the event of having 
 only 3 blocks, each block will occupy 33.33% of the full width.

'Sliding Header' regions at the top can be toggled on/off.

This theme also packs an additional region - 'Optional Blocks' with it, to hold 
optional core blocks like 'Primary admin actions'.

REQUIREMENTS
------------
Bootstrap Mint theme does not require anything beyond Drupal 8 core to work.

INSTALLATION
------------
1. Drupal 8 site (preferrably using Standard installation profile).
2. Place "bootstrap_mint" folder to the root /themes directory.
3. Login to the site and click on "Appearance" in the top Administration menu.
4. Click on "Install and set as default" next to Bootstrap Mint theme.

FAQ
---
Q: I have added slogan for my site, but the theme is not rendering it. What 
have I missed?
A: Bootstrap Mint theme has the 'Site slogan' option disabled by default. 
To enable it, configure the Structure > Block Layout > Site Branding block
 settings. Tick 'Site slogan' checkbox and save.

Q: "Main navigation" menu does not show dropdown beyond level 2. What to do?
A: Configure the Structure > Block Layout > Site Branding block
 settings. Select "Maximum number of menu levels to display" in the 
 'Menu levels' section accordingly.

MAINTAINERS
-----------
Current maintainer:
 * Binu Varghese - https://www.drupal.org/user/1111950

DEMO
----
http://dev-mint.pantheonsite.io/
