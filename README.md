# Stanbridge Example Course app

## Stack
- Laravel, Vue.js/TailwindCSS, MySQL, Docker

## Requirements:
- Docker

## Usage
Clone repo:
```$ git clone https://github.com/rconjoe/sb_example_course```
```cd sb_example_course```

Install dependencies with docker:
```docker run --rm --interactive --tty -v $(pwd):/app composer install```

Start containers:
```./vendor/bin/sail up -d```

Run migrations:
```./vendor/bin/sail artisan migrate```

Browse to `http://127.0.0.1`.
