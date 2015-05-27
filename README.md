#Mzeis Mm15nl

This extension is part of the talk "Building Magento 2 extensions 101 for Magento 1 developers" at
[MM15NL](https://www.meet-magento.nl/). The slides can be found at [SlideShare](http://www.slideshare.net/mzeis/).

This module was created for demo purposes only. Do not use it in production.

##Installation

Using the [Magento Composer installer](https://github.com/Cotya/magento-composer-installer) or
[AOE Composer installer](https://github.com/AOEpeople/composer-installers), add the module to your `composer.json`
project file:

    {
        "require": {
            "mzeis/mm15nl": "dev-master"
        },
        ...
    }
    
Then, add the repository to your repositories list:
    
    {
        ...
        "repositories": [
            ...,
            {
                "type": "vcs",
                "url": "https://github.com/mzeis/Mm15nl_Magento1.git"
            }
        ],
        ...
    }

Update your project by calling:

    composer update
    
##Developer

* Matthias Zeis

    [http://www.matthias-zeis.com](http://www.matthias-zeis.com)  
    [@mzeis](https://twitter.com/mzeis)

License
-------
[MIT License](http://opensource.org/licenses/MIT)
