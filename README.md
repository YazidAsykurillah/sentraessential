# Laravel CMS Boilerplate

A production-ready Laravel CMS Boilerplate built with Laravel 12, Filament v5, Docker, Tailwind CSS v4, and Spatie Permission.

This boilerplate is designed to serve as a reusable foundation for:

- Company Profile Websites
- Corporate Websites
- Agency Websites
- Landing Pages
- Small Business Websites
- Custom CMS Projects

The goal of this project is to provide a clean, modern, and extensible CMS foundation while keeping frontend implementation fully flexible and project-specific.

---

# Tech Stack

## Backend

- Laravel 12
- PHP 8.4
- MySQL 8.4
- Redis
- Filament v5
- Spatie Laravel Permission

## Frontend

- Blade
- Tailwind CSS v4
- Vite

## Infrastructure

- Docker
- Nginx
- Mailpit
- phpMyAdmin

---

# Features

## Authentication & Authorization

- Filament Authentication
- User Management
- Role Management
- Permission Management
- Permission Matrix
- Super Admin Bypass
- RBAC powered by Spatie Permission

## CMS Modules

### Posts

Blog and article management with:

- Title
- Slug
- Excerpt
- Content
- Featured Image
- Category
- Tags
- Draft / Published Status

### Categories

Content categorization module.

### Tags

Content tagging module.

### Website Settings

Global website configuration:

- Site Name
- Site Tagline
- Company Name
- Logo
- Favicon
- Contact Information
- Social Media Links
- Default SEO Settings
- Maintenance Mode

### Page SEO

Page-level SEO management:

- Page Name
- Page Key
- Slug
- SEO Title
- SEO Description
- Open Graph Image
- Active Status

### Contact Messages

Stores incoming contact messages from frontend forms.

---

# Dashboard

Custom Filament Dashboard includes:

### Statistics Overview

- Total Posts
- Total Categories
- Total Tags
- Total Contact Messages

### Recent Contact Messages

Displays latest contact submissions.

### Quick Actions

Quick navigation to frequently used CMS modules.

---

# Frontend Foundation

The boilerplate includes a lightweight frontend foundation:

### Layout Structure

```text
resources/views/frontend
├── layouts
│   └── app.blade.php
│
├── partials
│   ├── header.blade.php
│   ├── footer.blade.php
│   └── seo.blade.php
│
└── home
    └── index.blade.php
```

### Dynamic Website Settings

Frontend content can be accessed globally using:

```php
setting('site_name')
setting('company_name')
setting('email')
setting('phone')
```

### SEO Foundation

Global SEO partial support:

```blade
<title>{{ $seoTitle ?? setting('default_seo_title') }}</title>
<meta name="description" content="{{ $seoDescription ?? setting('default_seo_description') }}">
```

---

# Theme System

Tailwind CSS v4 design tokens are supported through:

```css
@theme {

    --color-primary;
    --color-secondary;
    --color-accent;

    --color-success;
    --color-warning;
    --color-danger;
    --color-info;

    --color-light;
    --color-dark;
}
```

This allows easy branding customization across projects.

---

# Project Structure

```text
app
├── Filament
│   ├── Resources
│   ├── Pages
│   └── Widgets
│
├── Helpers
│   └── Settings.php
│
├── Http
│   └── Controllers
│
├── Models
│
└── Providers

database
├── migrations
├── factories
└── seeders

resources
├── css
├── js
└── views
    └── frontend

routes
└── web.php

docker
├── nginx
├── php
└── mysql
```

---

# Installation

## Clone Repository

```bash
git clone <repository-url>
cd laravel-cms-boilerplate
```

## Copy Environment File

```bash
cp .env.example .env
```

## Start Docker Containers

```bash
docker compose up -d
```

## Generate Application Key

```bash
docker compose exec app php artisan key:generate
```

## Run Database Migration

```bash
docker compose exec app php artisan migrate
```

## Run Seeders

```bash
docker compose exec app php artisan db:seed
```

## Create Storage Symlink

```bash
docker compose exec app php artisan storage:link
```

---

# Development Commands

## Clear All Caches

```bash
docker compose exec app php artisan optimize:clear
```

## Run Vite Development Server

```bash
docker compose exec node npm run dev
```

## Build Frontend Assets

```bash
docker compose exec node npm run build
```

## Access Laravel Container

```bash
docker compose exec app bash
```

## Access Node Container

```bash
docker compose exec node sh
```

---

# Docker Services

| Service | Description |
|----------|-------------|
| app | PHP 8.4 Application |
| nginx | Web Server |
| mysql | Database |
| redis | Cache & Queue |
| node | Frontend Build |
| phpmyadmin | Database Management |
| mailpit | Local SMTP Testing |

---

# Default URLs

| Service | URL |
|----------|-----|
| Website | http://cms.local |
| Admin Panel | http://cms.local/admin |
| phpMyAdmin | http://localhost:8080 |
| Mailpit | http://localhost:8025 |

> URLs may vary depending on local DNS and Docker configuration.

---

# Default Roles

## Super Admin

Full access to all resources and permissions.

## Admin

Can manage website content and settings.

## Editor

Can manage content only.

---

# Permission Matrix

Permissions are managed through Spatie Permission and exposed through Filament Resources.

Example permissions:

```text
view_user
create_user
update_user
delete_user

view_post
create_post
update_post
delete_post

view_category
create_category
update_category
delete_category

view_tag
create_tag
update_tag
delete_tag
```

Additional permissions can be added without modifying existing resources.

---

# Website Settings Cache

Website settings are automatically cached for performance.

Cache is automatically invalidated when:

- Settings are updated
- Settings are deleted

No manual cache clearing is required.

---

# Recommended Workflow

When starting a new project:

1. Clone the boilerplate.
2. Configure `.env`.
3. Run migrations and seeders.
4. Configure Website Settings.
5. Configure Page SEO.
6. Build custom frontend pages manually.
7. Deploy.

This approach keeps the boilerplate clean while allowing maximum frontend flexibility.

---

# Deployment

Recommended deployment stack:

- Ubuntu 24.04 LTS
- Docker
- Docker Compose
- Nginx Proxy Manager (optional)
- Cloudflare (optional)

Production deployment documentation can be added under:

```text
docs/
├── installation.md
├── docker.md
└── deployment.md
```

---

# Version

Current Release:

```text
Laravel CMS Boilerplate v1.0.0
```

---

# License

MIT License

Copyright (c) 2026

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files to deal in the Software without restriction.