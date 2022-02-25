# Stanbridge Example Course app

## Stack
- Laravel, Vue.js/TailwindCSS, MySQL, Docker

## Requirements:
- Docker, docker-compose

## Usage
Clone repo:
```git clone https://github.com/rconjoe/sb_example_course```

Start containers:
```cd sb_example_course && ./vendor/bin/sail up -d```

Scaffold data:
```./vendor/bin/sail artisan tinker```
and in tinker:
```App\Models\Student::factory()->times(50)->create();```

Browse to `http://127.0.0.1`.
