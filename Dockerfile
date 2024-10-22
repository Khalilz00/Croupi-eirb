# Utiliser l'image officielle NGINX
FROM nginx:latest

# Copier le fichier index.html dans le répertoire par défaut de NGINX
COPY ./index.html /usr/share/nginx/html/index.html

# Exposer le port 80 pour accéder au serveur NGINX
EXPOSE 80

# Lancer NGINX (la commande par défaut dans l'image NGINX)
CMD ["nginx", "-g", "daemon off;"]
