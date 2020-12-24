FROM cs2ag/php5.6-devtest

RUN apk add --update autoconf
RUN apk add --update aspell-dev
RUN apk add --update build-base
RUN apk add --update bzip2-dev
RUN apk add --update c-client
RUN apk add --update curl-dev
RUN apk add --update db-dev
RUN apk add --update enchant-dev
RUN apk add --update freetds-dev
RUN apk add --update freetype-dev
RUN apk add --update gdbm-dev
RUN apk add --update geoip
RUN apk add --update geoip-dev
RUN apk add --update gettext-dev
RUN apk add --update gmp-dev
RUN apk add --update gcc
RUN apk add --update g++
RUN apk add --update imagemagick
RUN apk add --update imagemagick-dev
RUN apk add --update icu-libs
RUN apk add --update icu-dev
RUN apk add --update imap-dev
RUN apk add --update jpeg-dev
RUN apk add --update krb5-libs
RUN apk add --update krb5-dev
RUN apk add --update libbz2
RUN apk add --update libcurl
RUN apk add --update libedit-dev
RUN apk add --update libmcrypt
RUN apk add --update libmcrypt-dev
RUN apk add --update libpng
RUN apk add --update libpng-dev
RUN apk add --update libxml2-dev
RUN apk add --update libldap
RUN apk add --update libxpm-dev
RUN apk add --update libtool
RUN apk add --update libxslt
RUN apk add --update libxslt-dev
RUN apk add --update make
RUN apk add --update net-snmp-dev
RUN apk add --update openldap
RUN apk add --update openldap-dev
RUN apk add --update openssl-dev
RUN apk add --update postgresql
RUN apk add --update postgresql-dev
RUN apk add --update readline-dev
RUN apk add --update ssmtp
RUN apk add --update tzdata
RUN apk add --update zlib-dev

RUN pecl install imagick

#Possible values for ext-name:
#bcmath 
#bz2 
#calendar 
#ctype 
#curl 
#dba 
#dom 
#enchant 
#exif 
#fileinfo 
#filter 
#ftp 
#gd 
#gettext 
#gmp 
#hash 
#iconv 
#imap 
#interbase 
#intl 
#json 
#ldap 
#mbstring 
#mcrypt 
#mssql 
#mysql 
#mysqli 
#oci8 
#odbc 
#opcache
#pcntl 
#pdo 
#pdo_dblib 
#pdo_firebird 
#pdo_mysql 
#pdo_oci 
#pdo_odbc 
#pdo_pgsql 
#pdo_sqlite 
#pgsql 
#phar 
#posix pspell 
#readline recode 
#reflection 
#session 
#shmop 
#simplexml 
#snmp 
#soap 
#sockets 
#spl 
#standard 
#sybase_ct 
#sysvmsg 
#sysvsem 
#sysvshm 
#tidy 
#tokenizer 
#wddx 
#xml 
#xmlreader 
#xmlrpc 
#xmlwriter 
#xsl 
#zip

RUN docker-php-ext-install bcmath
RUN docker-php-ext-install bz2
RUN docker-php-ext-install calendar 
RUN docker-php-ext-install dba 
RUN docker-php-ext-install enchant
RUN docker-php-ext-install exif 
RUN docker-php-ext-install gd 
RUN docker-php-ext-install gettext 
RUN docker-php-ext-install gmp 
RUN docker-php-ext-install intl
RUN docker-php-ext-install imap
#RUN docker-php-ext-install interbase
RUN docker-php-ext-install ldap 
RUN docker-php-ext-install mcrypt 
RUN docker-php-ext-install mssql 
RUN docker-php-ext-install mysql 
RUN docker-php-ext-install mysqli
#RUN docker-php-ext-install oci8
#RUN docker-php-ext-install odbc 
RUN docker-php-ext-install opcache 
RUN docker-php-ext-install pcntl 
RUN docker-php-ext-install pdo_dblib
#RUN docker-php-ext-install pdo_firebird 
RUN docker-php-ext-install pdo_mysql 
#RUN docker-php-ext-install pdo_oci
#RUN docker-php-ext-install pdo_odbc
RUN docker-php-ext-install pdo_pgsql 
RUN docker-php-ext-install pgsql 
RUN docker-php-ext-install pspell 
#RUN docker-php-ext-install recode
RUN docker-php-ext-install shmop 
RUN docker-php-ext-install snmp 
RUN docker-php-ext-install soap 
RUN docker-php-ext-install sockets 
#RUN docker-php-ext-install sybase_ct
RUN docker-php-ext-install sysvmsg 
RUN docker-php-ext-install sysvsem 
RUN docker-php-ext-install sysvshm 
#RUN docker-php-ext-install tidy
RUN docker-php-ext-install wddx 
RUN docker-php-ext-install xmlrpc 
RUN docker-php-ext-install xsl 
RUN docker-php-ext-install zip

#All modules and extensions that downloaded and enabled in php
#[PHP Modules]
#bcmath
#bz2
#calendar
#Core
#ctype
#curl
#date
#dba
#dom
#enchant
#ereg
#exif
#fileinfo
#filter
#ftp
#gd
#gettext
#gmp
#hash
#iconv
#imagick
#imap
#intl
#json
#ldap
#libxml
#mbstring
#mcrypt
#mssql
#mysql
#mysqli
#mysqlnd
#openssl
#pcntl
#pcre
#PDO
#pdo_dblib
#pdo_mysql
#pdo_pgsql
#pdo_sqlite
#pgsql
#Phar
#posix
#pspell
#readline
#Reflection
#session
#shmop
#SimpleXML
#snmp
#soap
#sockets
#SPL
#sqlite3
#standard
#sysvmsg
#sysvsem
#sysvshm
#tokenizer
#wddx
#xml
#xmlreader
#xmlrpc
#xmlwriter
#xsl
#Zend OPcache
#zip
#zlib
#
#[Zend Modules]
#Zend OPcache