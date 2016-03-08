echo "########## Atualizando pacotes ##########"
sudo apt-get update
echo "########## Instalando XDEBUG ##########"
sudo apt-get install php5-xdebug
echo "########## Ativando XDEBUG ##########"
sudo php5enmod xdebug
echo "########## Reiniciando o Apache ##########"
sudo service apache2 restart
