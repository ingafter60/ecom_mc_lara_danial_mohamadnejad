# ecom_mc_lara_danial_mohamadnejad

https://github.com/ingafter60/ecom_mc_lara_danial_mohamadnejad
Based on mc: Master Mysql, Javascript, Laravel 5.8 and e-commerce project

## Section 5: Laravel & Javascript - Preparing application

### 40.1 Part 2. (Create the app) Preparing application

    	new file:   .editorconfig
        new file:   .env.example
        new file:   .gitattributes
        modified:   .gitignore
        new file:   .styleci.yml
        modified:   README.md
        ...
        new file:   webpack.mix.js

### 40.2 Part 2. (Moving from public folder) Preparing application

        renamed:    public/.htaccess -> .htaccess
        modified:   README.md
        renamed:    public/index.php -> index.php
        modified:   server.php

### 40.3 Part 2. (Setting up the database) Preparing application

        modified:   README.md
        modified:   config/database.php

### 40.4 Part 2. (Setting up the configuration) Preparing application

        modified:   README.md
        modified:   app/Http/Controllers/Auth/LoginController.php
        modified:   app/Http/Controllers/Auth/RegisterController.php
        new file:   app/Http/Controllers/HomeController.php
        modified:   app/Http/Middleware/RedirectIfAuthenticated.php
        modified:   app/Providers/AppServiceProvider.php
        modified:   config/filesystems.php
        new file:   resources/views/auth/login.blade.php
        new file:   resources/views/auth/passwords/email.blade.php
        new file:   resources/views/auth/passwords/reset.blade.php
        new file:   resources/views/auth/register.blade.php
        new file:   resources/views/auth/verify.blade.php
        new file:   resources/views/home.blade.php
        new file:   resources/views/layouts/app.blade.php
        modified:   routes/web.php
        > php artisan migrate
        > php artisan make:auth
        > php artisan serve

## Section 6: Laravel & Javascript - Header and footer design

### 41. Part 3. Header

        modified:   .gitignore
        modified:   README.md
        new file:   public/fa/css/all.css
        modified:   resources/views/home.blade.php
        modified:   resources/views/layouts/default.blade.php

        NOTE: by mistake i did 'git add .' added _copy folder
        To undo it to this
        >> λ git reset HEAD _copy

### 42. Part 4. Header

        modified:   README.md
        new file:   public/css/grid.css
        modified:   public/css/header.css
        modified:   public/css/public.css
        modified:   resources/views/layouts/default.blade.php
        modified:   resources/views/partials/header.blade.php

### 43. Part 5. Header

        modified:   README.md
        ... (added fa/css) to public folder
        new file:   public/images/app/wish-icon.png
        new file:   public/images/app/wish.png
        modified:   resources/views/partials/header.blade.php

## 44. Part 6. Header

        modified:   README.md
        modified:   public/css/header.css
        modified:   public/css/public.css
        modified:   resources/views/partials/header.blade.php

## 45. Part 7. Footer

        modified:   README.md
        modified:   resources/views/layouts/default.blade.php
        new file:   resources/views/partials/footer.blade.php

## 46. Part 8. Footer

        modified:   README.md
        new file:   public/css/footer.css
        modified:   resources/views/home.blade.php
        modified:   resources/views/layouts/default.blade.php
        modified:   resources/views/partials/footer.blade.php
