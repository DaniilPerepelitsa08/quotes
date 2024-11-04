# Kanye Quotes App

## Installation
1. Clone the repository.
2. Run `./vendor/bin/sail up -d` to start the environment.
3. Run `composer install`
4. Change variables if needed in your .env file, namely (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD). By default DB_HOST always `mysql`, but for me it didn't work. I ran: 
`docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' kanye-quotes-mysql-1`, copied ip address and pasted it as DB_HOST variable.
5. Set permissions to 777 to all files in bootstrap directory and storage directory including the folders themselves.
6. Visit `http://localhost` to see the app.

## Features
- Livewire component to show 5 random Kanye quotes.
- Automatic refresh every 60 seconds with a manual refresh button.
- API route to fetch quotes at `/api/quotes`.

## Testing
Run `./vendor/bin/sail test` to execute tests.
