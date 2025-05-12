# Mon histoire interactive – Chirurgie Esthétique

Bienvenue dans ce projet de jeu interactif développé avec **Laravel** (backend/API) et **Vue.js** (frontend).  
Ce jeu propose une aventure narrative autour de la chirurgie esthétique, où chaque choix influence la confiance en soi et le risque médical du personnage.

---

## Fonctionnalités principales

- Parcours interactif avec choix multiples
- Deux jauges dynamiques : **Confiance en soi** et **Risque médical**
- Finalités positives ou négatives selon les choix du joueur
- Interface responsive et design inspiré du monde médical

---

## Installation

### 1. Cloner le dépôt

```bash
git clone <url-du-repo>
cd <nom-du-dossier>
```

### 2. Installer les dépendances PHP (Laravel)

```bash
composer install
```

### 3. Installer les dépendances JS (Vue)

```bash
npm install
```

### 4. Configurer l’environnement

- Copier `.env.example` en `.env` et adapter les variables si besoin
- Générer la clé d’application Laravel :
  ```bash
  php artisan key:generate
  ```

### 5. Lancer les migrations et seeders

```bash
php artisan migrate:fresh --seed
```

### 6. Lancer le serveur de développement

- Backend (Laravel) :
  ```bash
  php artisan serve
  ```
- Frontend (Vite ou Mix selon config) :
  ```bash
  npm run dev
  ```

---

## Structure du projet

- `chirurgie/app/Http/Controllers/Api/` : Contrôleurs API Laravel
- `chirurgie/database/seeders/` : Seeders pour les chapitres et choix
- `chirurgie/resources/js/components/` : Composants Vue.js
- `chirurgie/resources/css/app.css` : Styles globaux
- `chirurgie/routes/api.php` : Routes API

---

## Personnalisation

- **Couleurs et styles** : modifiables dans `resources/css/app.css`
- **Textes et scénarios** : modifiables dans les seeders `ChapterSeeder.php` et `ChoiceSeeder.php`
- **Logique des jauges** : gérée côté backend dans le contrôleur `ChapterController.php`

---

## Auteurs

- [Ton nom]
- [Collaborateurs éventuels]

---

## Licence

Ce projet est open-source et libre d’utilisation dans un cadre pédagogique ou personnel.

---

## Remerciements

Merci à tous ceux qui ont contribué, testé ou inspiré ce projet !

---