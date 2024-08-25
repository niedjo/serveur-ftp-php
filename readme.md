# Serveur FTP PHP

Ce projet est un petit serveur FTP développé en PHP. Il permet de télécharger des fichiers image via un formulaire HTML et de les stocker dans un dossier dédié (`images`) situé à la racine du projet.

## Fonctionnalités

- **Téléchargement d'images** : Un formulaire HTML simple permet de télécharger des fichiers image sur le serveur.
- **Stockage sécurisé** : Les images téléchargées sont stockées dans un dossier `images` sécurisé à la racine du projet.
- **Validation des fichiers** : Seuls les fichiers image sont acceptés pour éviter les téléchargements non sécurisés.

## Structure du Projet

Le projet est structuré de la manière suivante :

```
|-- images/
|-- index.php
|-- README.md
```

- `images/` : Dossier où les fichiers image sont stockés.
- `index.php` : Contient le code PHP pour gérer le téléchargement des fichiers.
- `README.md` : Documentation du projet.

## Installation

### Prérequis

- Serveur web (Apache, Nginx, etc.) avec PHP installé.
- Accès en écriture au dossier `images/`.

### Étapes d'installation

1. **Clonez le dépôt** :
   ```bash
   git clone https://github.com/niedjo/serveur-ftp-php.git
   cd serveur-ftp-php
   ```

2. **Assurez-vous que le dossier `images/` est accessible en écriture** :
   ```bash
   chmod -R 755 images/
   ```

3. **Lancez votre serveur web** et accédez à `index.php` via votre navigateur.

## Utilisation

1. Ouvrez votre navigateur et accédez à la page d'accueil du projet (`index.php`).
2. Utilisez le formulaire pour sélectionner un fichier image à télécharger.
3. Cliquez sur "Télécharger" pour envoyer l'image au serveur.
4. Les images téléchargées seront stockées dans le dossier `images/`.

## Technologies Utilisées

- **PHP** : Pour gérer la logique de téléchargement des fichiers et le stockage sécurisé.
- **HTML** : Pour créer une interface utilisateur simple et accessible.

## Contribuer

Les contributions sont les bienvenues ! Pour contribuer :

1. Fork le projet.
2. Créez une branche pour votre fonctionnalité (`git checkout -b fonctionnalite-geniale`).
3. Commitez vos changements (`git commit -am 'Ajoutez une fonctionnalité géniale'`).
4. Poussez la branche (`git push origin fonctionnalite-geniale`).
5. Ouvrez une Pull Request.

## License

Ce projet est sous licence MIT. 