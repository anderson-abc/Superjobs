Superjobs Website
=================

A new website to help candidates find their best computer job, and to help recuiters to find their best applicant.
This project is under construction.
To suggestion some thing or any question tell us at : contact@irmasoft.com

** Installation 

    sudo git clone https://github.com/anderson-abc/Superjobs.git

    composer install

    HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`

    sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var/cache var/logs

    sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var/cache var/log

    php app/console doctrine:database:create

    php app/console doctrine:schema:update --force

