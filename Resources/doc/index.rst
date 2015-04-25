============
Installation
============
1. Using Composer (recommended)
-------------------------------

To install YandexTranslateBundle with Composer just add the following to your
`composer.json` file:

.. code-block :: js

    // composer.json
    {
        require: {
            "remedge/yandex-translate-bundle": "dev-master"
        }
    }


Then, you can install the new dependencies by running Composer's ``update``
command from the directory where your ``composer.json`` file is located:

.. code-block :: bash

    $ php composer.phar update

Now, Composer will automatically download all required files, and install them
for you. All that is left to do is to update your ``AppKernel.php`` file, and
register the new bundle:

.. code-block :: php

    <?php

    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
        new Remedge\YandexTranslateBundle\RemedgeYandexTranslateBundle(),
        // ...
    );


Configuration
-------------

.. code-block :: yml

    remedge_yandex_translate:
        api_key: %yandex_translate_api_key%

The bundle caches translation to database, so you need to update your database:

=====
Usage
=====

.. code-block :: php

    <?php

    $translateManager = $this->get('remedge.yandex_translate.manager');
    $result = $translateManager->translate($name, 'en-ru');

