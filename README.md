# TMDB CLI Application

A simple command line interface (CLI) tool to fetch and display movie data from The Movie Database (TMDB) API. This application allows users to view popular, top-rated, upcoming, and now playing movies directly from the terminal.

## Features

- Fetch and display:
  - Popular Movies
  - Top Rated Movies
  - Upcoming Movies
  - Now Playing Movies
- Error handling for API failures and network issues
- Easy to use command line interface

## Requirements

- PHP 7.0 or higher
- Composer (optional, for dependency management)
- TMDB API Key

## Getting Started

### Prerequisites

1. **Install PHP**: Ensure you have PHP installed on your machine. You can check by running:
   ```bash
   php -v

2. Get a TMDB API Key:
  Sign up at TMDB.
  Create an API key in your account settings under the "API" section.

## Usage
- Run the application from the command line with the desired movie type:

bash

php tmdb-app.php --type "playing"
php tmdb-app.php --type "popular"
php tmdb-app.php --type "top"
php tmdb-app.php --type "upcoming"


## Examples
To view popular movies:
```bash

php tmdb-app.php --type "popular"
To view top-rated movies:

```bash

php tmdb-app.php --type "top"

## Error Handling

The application gracefully handles errors such as:

API failures
Network issues
Invalid movie type inputs
Contributing
Feel free to submit issues or pull requests. Contributions are welcome!

## Fork the repository.
Create your feature branch:
```bash
git checkout -b feature/YourFeature
Commit your changes:

```bash
git commit -m "Add some feature"
Push to the branch:

```bash
git push origin feature/YourFeature
Open a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

Acknowledgments
TMDB API for providing the movie data.
Inspiration from various CLI applications.

## Project url
https://roadmap.sh/projects/tmdb-cli
