#! /bin/bash

CAMINHO_BASE=/Documentos

if [ ! -d backup ]

then

	mkdir backup
fi

	mysqldump -u root $1 > $CAMINHO_BASE/backup/$1.sql
	
if [ $? -eq 0 ]
then
	echo "Backup realizado com sucesso"
else
	echo "Houve falha no processo"

fi


