# Opis

Projekt demonstruje aplikację webową, która składa się z komponentów przejmujących odpowiedzialność za poszczególne zadania. Zostały one umieszczone w osobnych kontenerach.

## Technologie

- Docker + Docker Compose
- Nginx (reverse proxy, HTTPS, HSTS)
- PHP-FPM
- MariaDB
- WordPress (headless CMS)
- Next.js (App Router, Server Actions, SSR, API Routes)
- `.env` + wstrzykiwanie zmiennych środowiskowych

## Architektura

- `nginx` — reverse proxy działające na `localhost`, obsługuje:
  - `https://localhost` – aplikacja Next.js
  - `https://cms.localhost` – panel WordPress (ograniczony do lokalnego dostępu)
- `php-fpm` — osobny kontener z podpiętym katalogiem `public_html`, obsługujący WordPress
- `wordpress` — CMS dostępny lokalnie, zabezpieczony (deny all), z możliwością aktualizacji i korzystania z motywu potomnego
- `mariadb` — baza danych CMS, dostępna tylko wewnętrznie
- Sieci Docker:
  - `bpublic` – nginx, php, frontend
  - `bprivate` – php, mariadb

## 🌍 Dostępy lokalne

- Frontend (Next.js): [https://localhost](https://localhost)
- CMS (WordPress): [https://cms.localhost](https://cms.localhost) – tylko lokalnie

## 📝 Wymagania

- Docker i Docker Compose
- Wpisy w pliku `hosts`:


## 🚀 Uruchomienie

1. Sklonuj repozytorium.
2. Skopiuj plik `.env.example` do `.env` i uzupełnij dane (np. hasła do bazy).
3. W terminalu:

```bash
docker compose up --build
