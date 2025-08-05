# 🏐 ASVB 🏐 

Site web du club de volley Saint Barthélémy d’Anjou 

Projet de création d’un site web moderne, évolutif et administrable pour l’association sportive **Saint Barthélémy Volley-ball**, à destination des membres du club mais aussi du grand public.

---

## 📌 1. Présentation du projet

### 1.1 Contexte

A ma propre initiative pour me former, je souhaite créer pour l’association sportive de volley **Saint Barthélémy d’Anjou** un site web moderne, évolutif et facile à administrer. 

Ce site a pour vocation de **servir à la fois les membres du club** et **les visiteurs extérieurs** (supporters, familles, amateurs de volley, partenaires…).

Le site permettra de :

- Présenter le club, ses valeurs et son fonctionnement
- Promouvoir les équipes, les joueurs et les événements
- Vendre des produits (merchandising) à tout public
- Offrir la possibilité de s’inscrire à des événements ponctuels
- Permettre aux visiteurs de s’abonner à une newsletter ou des notifications
- Fournir aux administrateurs un tableau de bord de gestion complet

### 1.2 Objectifs principaux

- Informer et valoriser l’activité du club
- Dynamiser la communauté sportive locale
- Augmenter la visibilité du club et attirer de nouveaux membres ou partenaires
- Créer une nouvelle source de revenus par la vente de produits
- Permettre à **tout visiteur**, même non membre, de participer à la vie du club

---

## 🎯 2. Public cible

- Joueurs et membres du club
- Supporters, familles et amis
- Résidents de la région intéressés par le volley
- Visiteurs souhaitant acheter du merchandising sans être membres
- Partenaires, sponsors et collectivités locales

---

## 🧩 3. Fonctionnalités principales

### 3.1 Pages publiques

- **Accueil** : Présentation générale, actualités, événements à venir
- **Le Club** : Histoire, équipe dirigeante, valeurs, carte, coordonnées
- **Équipes** : Liste des équipes par catégorie/âge, profils joueurs, entraîneurs
- **Événements** : Calendrier interactif, fiches événements, formulaire d’inscription
- **Boutique** : Catalogue produits, fiches articles, panier, paiement en ligne
- **Newsletter** : Abonnement simple avec email (double opt-in)
- **Contact** : Formulaire de contact, informations pratiques

### 3.2 Visiteurs externes

- Achat de produits **sans création de compte obligatoire**
- Inscription à des événements via formulaire (nom, email…)
- Abonnement à une newsletter d’information :
  - Nouveaux produits
  - Matchs ou tournois à venir
  - Actualités importantes

### 3.3 Espace administrateur

- Tableau de bord complet
- CRUD sur : équipes, joueurs, événements, produits
- Gestion des commandes
- Envoi de newsletters
- Système de rôles : admin / modérateur / rédacteur

---

## 🛍️ 4. Fonctionnalités e-commerce

- Catalogue produits : photos, description, prix, stock
- Panier d’achat dynamique
- Paiement en ligne via **Stripe** ou **PayPal**
- Achat avec ou sans compte
- Email de confirmation de commande
- Historique de commandes (pour les utilisateurs connectés)

---

## 📅 5. Événements & Notifications

### Inscriptions aux événements

- Ouvertes aux membres **et aux visiteurs**
- Formulaire simple : nom, prénom, email
- Liste des inscrits pour l’organisateur
- Rappel automatique par email (optionnel)

### Newsletter

- Abonnement rapide par email (double opt-in)
- Export CSV / Intégration Mailchimp ou autre
- Envois manuels ou automatiques

---

## 🛠️ 6. Stack technique

### Backend

- **Laravel 11**
  - API RESTful
  - Authentification via **Laravel Sanctum**
  - Gestion des rôles et permissions

### Frontend

- **React 18**
- **Tailwind CSS** (design responsive)
- **React Router** (navigation SPA)
- **Axios** (consommation de l’API Laravel)

### Base de données

- **MySQL** ou **MariaDB**
- Structure relationnelle : utilisateurs, équipes, produits, commandes, inscriptions…

### Infrastructure

- Déploiement possible sur hébergement mutualisé ou VPS
- Nom de domaine + certificat SSL (Let’s Encrypt)
- Git + CI/CD GitHub Actions (éventuellement)

---

## 🔒 7. Sécurité & performance

- Validation des données côté client & serveur
- Protection CSRF, XSS, injections SQL
- Authentification via token sécurisé
- Données chiffrées & RGPD-compliant
- Lazy loading & mise en cache API
- Responsive design (mobile/tablette/desktop)
- Accessibilité WCAG niveau AA

---

## 🎨 8. Design & ergonomie

- Identité visuelle respectant les couleurs du club
- UI simple, moderne, intuitive
- Composants visuels : cards, modals, sliders, carrousels…
- Photos valorisées (profils joueurs, galerie club)
- Mode sombre (optionnel)

---

## 🚧 9. Évolutions prévues

- Blog & articles
- Interface multilingue (FR / EN)
- Intégration réseaux sociaux
- Application mobile (React Native ou PWA)
- Système de commentaires / likes
- Intégration Google Calendar, Zapier, ou Mailchimp

---
