# Laravel Web Application - Virtual Art Gallery

## Introduction
A PHP Assignment from the fourth year of University as a part of my Advanced Web Programming module. This is a virtual art gallery where users can view paintings & artists and edit them.

Technical Features & Languages Included:
- MVC Framework
- Laravel PHP
- Tailwind CSS
- Vite

## Running the Web Application

### Installation
Tailwind can be installed using the Terminal. To install Tailwind, enter:

```
npm install tailwindcss @tailwindcss/cli
```

This should install a folder of libraries neccessary for Tailwind to run called *node_modules*, as well as a JSON file called *package.json* to track the project's dependencies. In order to scan the project for any outlying CSS, run the following command:

```
npx @tailwindcss/cli -i public/css/layout.css -o public/css/output.css --watch
```

## How To Run
In a new Terminal tab, enter:

``` npm run dev ```

Once this has run, switch to the Ports tab and locate port number 5173. Select the port, right click, and hover over 'Port Visibility'. Select the option 'Public', and in the table port 5173 should now have a Visiblity reading Public.

Next switch back to the Terminal tab. On the right click the 'plus' icon to create a New terminal. In this new terminal, enter:

``` php artisan serve ```

In the bottom right a pop-up should appear announcing that port 8000 is available to run. If not, navigate to the 8000 port and right click to open in the browser.