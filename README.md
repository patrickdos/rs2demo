# RS2/S3 Scality Web Interface v1.0

## Info

The RS2 Web Interface allows accessing your data stored with your S3/RS2 account from everywhere .
A lot of companies provide this services :

	*HostEurope
	*Scality
	*Nifty
	*Tiscali
	*SeeWeb
	*Amazon S3
	*Connectria
	*GreenQloud
	*......and many others 

The files pushed with any kind of client can be accessed and downloaded through the Web Interface helps by the signature Url .

##Demo Interace

http://demo.scality.com:5443/demo/

AccesKey: demo
SecretKey : demopass
bucket : demos

## Requirements

Having an RS2/S3 account and having created a bucket .

## Installations

By default the endpoint is configured to talk with the Scality RS2 Demo platform .
If you wanna link with another platform you have to modify the following files :


    sed 's/demo.scality.com/<endpoint>/' server/php/awssdk.php
    sed 's/demo.scality.com/<endpoint>/' server/php/services/s3.class.php
    sed 's/demo.scality.com/<endpoint>/' server/php/login.post.php


System Dependancies:

	*Apache2 + php5
	*php-mhash
	*php-curl
	*php-pecl-json


Edit the php.ini file to increase the file upload filesize


    file_uploads = On
    upload_max_filesize = 1000M


##Browsers
Desktop browsers

The File Upload plugin supports the following minimal versions:

    *Google Chrome
    *Apple Safari 4.0+
    *Mozilla Firefox 3.0+
    *Opera 10.0+
    *Microsoft Internet Explorer 6.0+

Mobile browsers

The File Upload plugin has been tested with and supports the following mobile browsers:

    *Apple Safari on iOS 6.0+
    *Google Chrome on iOS 6.0+
    *Default Browser on Android 2.3+
    *Opera Mobile 12.0+

Drag & Drop is only supported on Google Chrome, Firefox 4.0+, Safari 5.0+ and Opera 12.0+.  
Microsoft Internet Explorer has no support for multiple file selection or upload progress.  

## TODO

    *Handling more than 1000 files with paging .
    *Managing the virtual folders .
    *Be able to create/select/change the bucket .

## License
Released under the [MIT license](http://www.opensource.org/licenses/MIT).
