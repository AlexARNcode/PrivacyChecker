# PrivacyChecker - Cahier des charges

PrivacyChecker sera une application web destinée à sensibiliser les utilisateurs au sujet de la confidentialité sur Internet.

Pour celà, PrivacyChecker affichera des informations liées à l'utilisateur pour lui faire prendre conscience des informations qui peuvent être utilisées à son encontre.

Le tout sera présenté sous forme d'un terminal de commande de type macOS, pour avoir une présentation moderne et esthétiquement agréable.

L'idée générale est de sensibiliser l'utilisateur à cette thématique de façon pédagogique, en lui montrant des informations concrètes, et en lui proposant des solutions.

## Données à récupérer et afficher sur l'utilisateur
- Adresse IPv4 (utilisation de MaxMind GeoIP)
- Adresse IPv6 (optionnel)
- Nom du FAI
- Ville correspondant à l'utilisateur
- Pays correspondant à l'utilisateur
- Navigateur de l'utilisateur
- OS de l'utilisateur
- Page visitée avant la page actuelle
- Horloge de l'ordinateur de l'utilisateur
- Résolution d'écran de l'utilisateur

## Features 
- Afficher les informations
- Afficher une carte avec la localisation de l'utilisateur (v2)
  
## Design
- Affichage sous forme d'un terminal de commande de style macOS
- Animation du terminal (v2)