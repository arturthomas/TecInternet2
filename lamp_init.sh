# remove default website
#-----------------------
cd /opt/bitnami/apache2/htdocs 
rm -rf *

# clone github repo
#------------------
git clone -b parte06 https://github.com/lesimoes/TecInternet2 .
