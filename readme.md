# ridrog/logviewer

This package provides a arcanedev/logviewer integration for ridrog/adminlte

## Setup ARCANEDEV/logviewer

1. Composer require  
    ``` composer require arcanedev/log-viewer ```
2. Include the ServiceProvider  
    ```  Arcanedev\LogViewer\LogViewerServiceProvider::class, ```
3. Publish Config  
    ```  php artisan log-viewer:publish --tag=config ```    
4. Set log to daily

do not puplish the views  

more info @ [ARCANEDEV/LogViewer](https://github.com/ARCANEDEV/LogViewer)
## Install ridrog/logviewer

1. Composer require  
    ``` composer require ridrog/adminlte-logviewer ```
2. Publish the Views  
```  php artisan vendor:publish --tag=adminlte-logviewer-views ```    

We're hijacking the views from the original package and exchange them with our own, that extends adminLte.


### Sample Links for adminlte

```
'LogViewer' => [
    'treeview' => true,
    'name' => 'LogViewer',
    'route_name' => 'log-viewer::dashboard',
    'icon' => 'home',
    'links' => [
        [
            'name' => 'Dashboard',
            'route_name' => 'log-viewer::dashboard',
            'icon' => 'home'
        ],
        [
            'name' => 'Logs',
            'route_name' => 'log-viewer::logs.list',
            'icon' => 'home'
        ],
    ]
],
```