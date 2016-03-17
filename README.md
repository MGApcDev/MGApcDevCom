# MGApcDevCom
[![Build Status](https://travis-ci.org/MGApcDev/MGApcDevCom.svg?branch=master)](https://travis-ci.org/MGApcDev/MGApcDevCom)

> My personal Drupal 8 site. 

All relevant database login information should have been excluded, but if I've made a mistake feel free to inform me.

For the site I'm using a custom theme, it's likely not very interesting for other people, but feel free to use it if you want.

![Android Emote](http://mgapcdev.com/giffy/droid-20.gif)

## Installation
1. Download the repo to server or local environent: `git clone https://github.com/MGApcDev/MGApcDevCom.git`

2. Rename `default.settings.php` (located in `sites/default/`) to `settings.php` and add database properties
3. Create database:

  3a. Create empty database and run through the drupal install process 
  
  3b. Or use existing database and copy existing files folder to: `/sites/default/`
4. There you go --> run drupal's `update.php` just in case and you should be good to go

## Usage
Do whatever you want.. obviously my templates will only be usefull if you're using the same content types

## Contributions
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :smile:

## Credits

#### Code
- **GitHub Widget** :arrow_right: [GitHub Activity Stream Widget by Casey Scarborough](https://github.com/caseyscarborough/github-activity)
- **Hide nav on scroll** :arrow_right: [Medium article by Marius Craciunoiu](https://medium.com/@mariusc23/hide-header-on-scroll-down-show-on-scroll-up-67bbaae9a78c#.x8e490sdf)

#### Styling
- **Main color scheme** :arrow_right: Inspired by [our little projects](http://ourlittleprojects.com/)
- **Transition mixin** :arrow_right: [Transition mixin by David McFarland](http://codepen.io/sawmac/pen/cayhK/)
- **Aspect Ratio mixin** :arrow_right: [Maintain Aspect Ratio Demo by Sean Dempsey](http://codepen.io/seanseansean/pen/NPwLxg)
- **Nav bar** :arrow_right: [Simple Responsive Menu by Css Menu Maker](http://cssmenumaker.com/menu/simple-responsive-menu)
- **Pagination** :arrow_right: [Pure Css3 Animated Pagination design by cssPro](http://codepen.io/lmacchiavelli/pen/KslLx)

#### Bugs and fixes
- **Force remove of twitter widget photos** :arrow_right: Twitter removed functionality in last update [solution found by serathium](https://twittercommunity.com/t/auto-expand-photos-always-on-for-embedded-timeline/62510/28)

#### Icons & Fonts
- **"Work In Progress" Icon** :arrow_right: Check out work in progress icon designed by Gleb Khorunzhiy on the [@NounProject](https://thenounproject.com/term/work-in-progress/42732).

---

Copyright &copy; 2015-2016 MGApcDev. Licensed under the terms of the [MIT license](LICENSE.md).
