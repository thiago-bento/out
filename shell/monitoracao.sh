#!/bin/bash

resposta=$(curl --write-out %{http_code} --silent --output /dev/null http://localhost)

if [ $resposta -eq 200 ]

then

	echo "servidor funcionando normalmente"
	
else
	echo "servidor parado inesperadamente, reiniciando o servidor apache..."
		systemctl restart apache2
		
	echo "servidor reiniciado com sucesso"
	
fi
