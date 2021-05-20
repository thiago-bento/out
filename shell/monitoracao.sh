#!/bin/bash

resposta=$(curl --write-out %{http_code} --silent --output /dev/null http://localhost)

if [ $resposta -ne 200 ]

then

mail -s "problema no servidor apache2" thiagobento@nasajon.com.br<<del
Não há servidor do apache rodando.
del
		systemctl restart apache2
	
fi
