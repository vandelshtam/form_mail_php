# form_mail_php
## Applied technologies:
### phpmailer:
https://packagist.org/packages/phpmailer/phpmailer
## How to install
- clone this project
- install vendor laravel
```bash
composer install
```
## NOTE
- Write the settings of your mail service to the configuration file  conf.phph in section $mail_settings_prod or $mail_settings_dev: <br>
```php
 'host' => 'smtp.gmail.com',
    'auth' => true,
    'port' => 465, // 587
    'username' => 'your_email@gmail.com',
    'password' => 'your_password',
    'secure' => 'ssl', // tls
    'charset' => 'UTF-8',
    'from' => 'your_email@gmail.com',
    'name' => 'WebForMyself',
    'is_html' => true,
    ```

