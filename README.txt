INSTALLAZIONE
=============

https://zircote.github.io/swagger-php/Getting-started.html#cli

1) install composer

2) create thos project:
   composer require zircote/swagger-php

3) use this project
   php build.php
	now callme.yaml is ready 

5) ONCE !: 

   git clone https://github.com/swagger-api/swagger-ui.git
   cp -a swagger-ui/docs/samples/webpack-getting-started .
   cd webpack-getting-started
   mv _sample_package.json package.json 
   vi src/index.js
      -> replace yaml spec. in javascript : 
         const spec = require('../../callme.yaml');
   npm install
   cd ..

4) cd webpack-getting-started
   npm start


AGGIORNAMENTO DELLA DOCUMENTAZIONE
==================================

1) php build.php
2) scp callme.yaml mntfrcud@ucloud-dev.urmet.com:phpdoc/callme.yaml

   la semplice copia fa ricaricare il file yaml al server (server restart NOT required)

TROUBLESHOOTING: 
To restart server 
	- find pid of process "npm start" with ps ax 
	- cd /home/mntfrcud/phpdoc/webpack-getting-started 
	- npm start &




//////////////////////////////////////////

swagger ui:
https://github.com/swagger-api/swagger-ui/blob/master/docs/usage/installation.md

npm install husky
npm install swagger-ui

//////////////////////////////////////////

References:

Writing PHP doclets:
https://github.com/zircote/swagger-php

Swagger UI:
https://github.com/swagger-api/swagger-ui.git

General Open API spe.:
https://spec.openapis.org/oas/v3.0.3

Swagger hub (ACCOUNT CLOUD PERSONALE)
https://app.swaggerhub.com/apis/hammertong/
	e.g.:
	https://app.swaggerhub.com/apis/hammertong/callme-web_api/2.0.14#/Installation/get_sharing_tokens
	public (readonly) :
	https://app.swaggerhub.com/apis/hammertong/callme-web_api/2.0.14

Other resources and exmples:
https://zircote.github.io/swagger-php/Getting-started.html#detects-values-based-on-context
https://ivankolodiy.medium.com/how-to-write-swagger-documentation-for-laravel-api-tips-examples-5510fb392a94
https://idratherbewriting.com/learnapidoc/pubapis_openapi_activity.html


//////////////////////////////////////////

Da investigare ...:

https://github.com/swagger-api
	- https://github.com/swagger-api/swagger-ui.git (già installato su ucloud-dev)
	- https://github.com/swagger-api/swagger-editor




https://app.swaggerhub.com/apis/hammertong/callme-web_api/2.0.14

PROXY:
	#
	# Swagger reverse proxy for api test and documentation
	#

	ProxyRequests Off
	ProxyPreserveHost On
	ProxyPass /api-dev/ http://127.0.0.1:9090/
	ProxyPassReverse /api-dev/ http://127.0.0.1:9090/

oqC4gY+CgVmCmalXowtGjLNKoo7wfovImN73aiDHrSj/AK9GHUBUlFHoAwfCLOO6vUEmXkP8Il48nlMv27F9FYBOQGp6A02lPRj73m+c5u/LJxzF5/eRQwm2f/IGGPNhUg4NNl2yTan5GXR1IwupYP6Wi61u545Y
