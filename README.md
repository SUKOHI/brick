brick
=====

A PHP package mainly developed for Laravel to enter data to input and textarea randomly and automatically.

![alt text](http://i.imgur.com/4p59b3B.png)

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Brick\BrickServiceProvider', 
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Brick' =>'Sukohi\Brick\Facades\Brick',
    )

Usage
====

Brick basically use label texts as input data.  
So, you need to prepare html-tags in your view like this.  
(Match for="\*\*\*" and id="\*\*\*")

&lt;label for="first_name"&gt;First Name&lt;/label&gt;  
&lt;input id="first_name" type="text" value=""&gt;


**Minimal way**

    {{ Brick::render() }}
    and type ctrl + B on your browser

**with jQuery**

    {{ Brick::jquery() }}
    in this case, no need to call render() method.

**Set shortcut key**

    {{ Brick::fire('CTRL+I') }}
    {{ Brick::fire('ALT+B') }}
    {{ Brick::fire('SHIFT+A') }}

**Set data type**

	{{ Brick::fire('CTRL+B', array(
		'twitter' => 'url', 	// inputed random URL 
		'url' => 'password',	// inputed random numbers
		'user-id' => 'email'	// inputed random email
	))->jquery() }}

**Only for DEV environment**  
    
    @if(App::isLocal())  
        {{ Brick::render() }}
    @endif


License
====

This package is licensed under the MIT License.

Copyright 2014 Sukohi Kuhoh