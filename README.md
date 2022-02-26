# Stanbridge Example Course app

## Stack
- Laravel, Vue.js/TailwindCSS, MySQL, Docker

## Requirements:
- Docker

## Usage
Clone repo:
```$ git clone https://github.com/rconjoe/sb_example_course```

You will need to use a small docker container to install dependencies:
```$ cd sb_example_course```
```chmod +x setup```
```./setup```

Seed data:
```./vendor/bin/sail artisan tinker```
and in tinker:
```App\Models\Student::factory()->times(50)->create();```

Browse to `http://127.0.0.1`.
