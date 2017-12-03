### Laravel Flash Message

## Install

Add the providers on config/app.php file

    Neventum\Flash\FlashServiceProvider::class

And the facade alias
    
    'Flash' =>  Neventum\Flashs\Facade::class

## Publish


    php artisan vendor:publish --provider="Neventum\Flash\FlashServiceProvider" --tag="config"
        
    php artisan vendor:publish --provider="Neventum\Flash\FlashServiceProvider" --tag="views"