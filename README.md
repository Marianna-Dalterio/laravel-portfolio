## Laravel Portfolio
Questo progetto rappresenta il lavoro finale del modulo di Specializzazione PHP del Master Boolean. Si tratta di un sistema di gestione portfolio (CMS) che permette agli amministratori di gestire i propri progetti, categorie e tecnologie, esponendo i dati tramite API a un front-end esterno.

## 📸 Panoramica
Ecco come appare la dashboard amministrativa del portfolio. Da qui è possibile gestire l'intero archivio progetti e le relative tassonomie.

![Dashboard backoffice](./screenshots/Dashboard%20backoffice.jpg)

Una visuale della sezione Progetti, Categorie e Linguaggi.

![Catalogo progetti](./screenshots/Catalogo%20progetti.jpg)

![Lista categorie](./screenshots/Lista%20categorie.jpg)

![Lista linguaggi](./screenshots/Lista%20linguaggi.jpg)

## 🚀 Caratteristiche Principali
- Autenticazione Multi-livello: Area admin protetta tramite Laravel Breeze.

- Gestione CRUD completa: Gestione dinamica di Progetti, Tipologie e Tecnologie.

- Relazioni Complesse: Implementazione di relazioni One-to-Many e Many-to-Many.

- API Ready: Endpoint JSON pronti per essere consumati da client esterni (Vue/React).

- UI/UX: Dashboard amministrativa responsive realizzata con Bootstrap.

## 🛠️ Percorso di sviluppo
Il progetto è stato sviluppato in diverse fasi incrementali:

1. Setup & Auth

Inizializzazione del progetto con Laravel Breeze per la gestione dell'autenticazione. 
Configurazione del layout Admin basato su Bootstrap e verifica dei flussi di login/register.

2. Gestione Progetti (Back-office)

Implementazione dell'entità Project con:
- Migrazioni, Model e Seeder dedicati. 
- ProjectController per la visualizzazione (Index, Show) e successivamente per tutte le operazioni CRUD.
- Bonus UI: Implementazione di una modale Bootstrap per la conferma della cancellazione.

3. Relazioni: Tipologie (One-to-Many)

Introduzione dell'entità Type per categorizzare i progetti:
- Relazione 1 ➡️ N tra Type e Project.
- CRUD completo per i tipi di progetto.
- Integrazione nei form di creazione/modifica dei progetti tramite menu a tendina.

4. Relazioni: Tecnologie (Many-to-Many)

Introduzione dell'entità Technology (es. PHP, JavaScript, Laravel):
- Creazione della tabella pivot project_technology.
- Relazione N ➡️ N gestita tramite checkbox nei form.
- Visualizzazione delle tecnologie utilizzate in ogni singolo progetto.

5. API ed Esposizione Dati

Configurazione del backend come sorgente dati:
- Creazione di Api/ProjectController per restituire dati in formato JSON.
- Gestione dei filtri e delle relazioni caricate tramite with().
- Configurazione delle policy CORS per permettere la comunicazione con applicazioni esterne.

## 🌐 Integrazione Frontend (BONUS)
È stata sviluppata un'applicazione separata in React che consuma le API di questo repository. Il frontend permette agli utenti non autenticati di:

1. Vedere la lista completa dei progetti in homepage.

2. Visualizzare i dettagli del singolo progetto tramite rotte dinamiche.

## 💻 Installazione locale
Per installare il progetto localmente: 

1. Clona la repository:

Bash

git clone [https://github.com/Marianna-Dalterio/laravel-portfolio.git]

2. Installa le dipendenze PHP e JS:

Bash

composer install
npm install

3. Crea il file .env e genera la key:

Bash

cp .env.example .env
php artisan key:generate

4. Configura il database nel file .env e lancia le migrazioni con i seeder:

Bash

php artisan migrate --seed

5. Avvia i server:

Bash

php artisan serve
npm run dev

## 🧠 Cosa ho imparato
Questo progetto è stato una palestra fondamentale per consolidare le basi dello sviluppo Full Stack. Ecco i punti chiave del mio percorso:
- Gestione del Database: Ho imparato a progettare database relazionali complessi, passando da semplici tabelle a relazioni dinamiche 1 ➡️ N e N ➡️ N.
- Sicurezza e Accessi: Grazie a Laravel Breeze, ho capito come gestire l'autenticazione e proteggere le rotte sensibili (Middlewares), separando l'area pubblica da quella amministrativa.
- Logica CRUD Avanzata: Non solo semplici inserimenti, ma gestione di dati correlati, validazione dei form e messaggi di feedback per l'utente (come le modali di conferma cancellazione).
- Sviluppo API-First: Ho compreso l'importanza di separare il Back-end dal Front-end, imparando a strutturare dati JSON puliti e a gestire le problematiche relative ai CORS.
- Refactoring Incrementale: Lavorando al progetto in diverse fasi, ho imparato a rimettere mano al codice esistente per integrarlo con nuove funzionalità senza rompere ciò che era già stato costruito.

---
## 🔗Repository collegati
Il portfolio è composto da due parti separate. Puoi trovare il codice del front-end qui sotto:

Front-end (React): [Vai al Repository Frontend →](https://github.com/Marianna-Dalterio/laravel-portfolio-frontend.git) – Applicazione client che consuma le API prodotte in questo progetto per mostrare i lavori al pubblico.

---