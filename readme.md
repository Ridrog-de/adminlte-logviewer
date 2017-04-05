# ridrog/logviewer

This package provides a arcanedev/logviewer integration for ridrog/adminlte

## Setup ARCANEDEV/logviewer

1. Composer require  
    ``` composer require toDO Name ```
2. Include the ServiceProvider  
    ```  toDo Name ```
3. Publish Config  
    ```  toDo command ```    
4. Set log to daily

do not puplish the views
more info @ link to original repo

## Install ridrog/logviewer

1. Composer require  
    ``` composer require toDO Name ```
2. Include the Service Provider  
    ```  toDo Name ```
3. Publish the Views


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