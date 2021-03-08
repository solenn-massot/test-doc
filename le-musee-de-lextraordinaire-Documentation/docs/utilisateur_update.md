---
id: Update utilisateur
hide_title: \[POST\] Utilisateur/
---
## \[POST\] Utilisateur/

### Description

Modifier les informations d'un compte utilisateur.
Cette fonction permet de modifier uniquement les informations de l'utilisateur connecté.

### Requête

| Paramètres       |Type      ||
| ------------- | :-----------: | -----: |
| identifiant      | string | obligatoire |
| email      | string | obligatoire |
| mdp      | string | obligatoire |

### Réponse

| Paramètres       |Type      |
| ------------- | :-----------: |
| status      | bool |  
| message     |   string    |

