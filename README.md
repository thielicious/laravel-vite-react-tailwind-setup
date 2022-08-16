# laravel9-vite3-react18-setup
A working scaffolding setup with the latest versions of Laravel, ViteJS and ReactJS plus TailwindCSS run via a blade file. Mostly just for me so I can always clone and start off right away with new projects. It has no project presets, I made just a simple example component.

## Installation
<br>
1. Clone this repo
<br>
2. Open command tool and install dependencies in the root folder

`composer install` and `npm install`
<br>
3. Setup your database in the `.env` file, for example like:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mydb
DB_USERNAME=root
DB_PASSWORD=pass123
```

<br>
4. Do the boilerplate migration 
`php artisan migrate`
<br>
5. Run Laravel dev server
`php artisan serve`
<br>
6. Run React dev server
`npm run dev`
