# Cat’s Meow Dev Challenge

Source files for Cat’s Meow dev challenge

Author: [Alberto Cristancho](mailto:acristancho@mac.com)  
Last modified: 21 April 2023

## Requirements

- Node.js (lts/hydrogen)
- gulp-cli (v2.3.0+), gulp (v4+), and Dart Sass (v1.5.6+)
- Local server environment running PHP 7.4+, e.g., MAMP PRO, VS Code extension, etc.
- Optional but recommended: `nvm` to manage node versions
- Git (v2.38+) for version control

## Installation

```sh
#navigate to the directory where you wish to install the repository
git clone https://github.com/albeeboy/cats-meow-dev-challenge
cd cats-meow-dev-challenge
nvm use
npm install
```

_Note: there are some vulnerabilities that will hopefully get sorted out with gulp_

## Compiling styles and copying all files to `dist` folder

```sh
# build files and watch for changes
npm run watch
```

## Editing files

- Always edit files in the `src` directory. Never edit anything in `dist` as these are deleted and recompiled each time any change is made while `npm run watch` is active.
- Make sure that any \*.php pages require `header.php` and `footer.php` from the site components directory
- Any additional PHP includes and require commands should follow the folder structure of `src/php`

## Local environment

Point your local server environment to the compiled `dist` folder

## Uploading files to a hosted web server

Due to time limitations, the contents of the `dist` folder are synced to this hosted site directory: https://cristancho.net/cats-meow-dev-challenge/. However, any PHP enabled web server will do. Use either `sftp` on the command line of an FTP client of your choice to connect to your server and upload the files.

In future, it would be a good idea to set up a pipeline script that installs dependencies, generates the dist folder and copies it to your web server of choice. There are many ways to do this, depending on your hosting plan,
