# Laravel Valet Setup (Mac)

This will get you setup with Laravel & Valet on your Mac. **Quentin Watt** has a good video tutorial on getting setup [here](https://www.youtube.com/watch?v=sbv61xK_vD8) as well

## Install Homebrew
Go to [https://brew.sh/](https://brew.sh/) and copy the command and run in your terminal

It will be something like this...
```
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```
Then update
```
brew update
```

## Install PHP
```
brew install php
```

## Install composer (PHP Dependency Manager)
```
brew install composer
```

## Put Composer in your $PATH
Run the following and see if it says "composer" anywhere
```
echo $PATH
```
If not, you have to add it to your path

Open your .zshrc (This command will open it with VS Code but you can open with any text editor)
```
code ~/.zshrc
```

## Add this line and save
```
export PATH=$PATH:$HOME/.composer/vendor/bin
```

- NOTE: If you are using bash instead of zsh, you need to edit ~/bashrc instead of ~/zshrc

- Restart your terminal and run this again and you should see "composer"
```
echo $PATH
```

## Install Valet with Composer
```
composer global require laravel/valet
```

## Run valet install
```
valet install
```

## Install Laravel Installer
```
composer global require laravel/installer
```

## Create a Laravel Project
Make sure you go to where you want to create your project folder
```
laravel new PROJECT_NAME
```

## Tell Valet to use the current folder for Laravel projects
```
valet park
```

## Open your project
Go to your browser and type http://PROJECT_FOLDER.test

## To see all parked projects
```
valet parked
```

## To rename your TLD from .test to something else, such as .dev
```
valet tld dev
```