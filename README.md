# laravel9-vite3-react18-setup
<br>
A working scaffolding setup with the latest versions of Laravel, ViteJS and ReactJS plus TailwindCSS run via a blade file. Mostly just for me so I can always clone and start off right away with new projects. It has no project presets, I made just a simple example component.
<br>

## Installation

1. Clone this repo

2. Open command tool and install dependencies in the root folder `composer install` and `npm install`

3. Setup your database in the `.env` file, for example like:

```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=mydb
  DB_USERNAME=root
  DB_PASSWORD=pass123
```

4. Do the boilerplate migration 

```
php artisan migrate
```

5. Run Laravel dev server

```
php artisan serve
```

6. Run React dev server

```npm run dev```

7. Have fun

`\o/`
