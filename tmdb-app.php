<?php

// Replace with your actual TMDB API Key
define('API_KEY', 'YOUR_TMDB_API_KEY');
define('API_URL', 'https://api.themoviedb.org/3/');

function fetchMovies($type) {
    $url = API_URL . 'movie/' . $type . '?api_key=' . API_KEY;
    $response = file_get_contents($url);
    
    if ($response === false) {
        echo "Error fetching data. Please check your network connection or API Key.\n";
        return;
    }

    $data = json_decode($response, true);

    if (isset($data['results'])) {
        return $data['results'];
    } else {
            echo "No results found for type:  $type\n";
            return[];
        }
    }

    function displayMovies($movies) {
        foreach ($movies as $movie) {
            echo "Title: " . $movie ['title'] . "\n";
            echo "Release Date: " . $movie ['release_date'] . "\n";
            echo "Rating: " . $movie ['vote_average'] . "\n";
            echo "Overview: " . $movie ['overview'] . "\n";
            echo "--------------------------------------\n";
        }
    }

    function main($argv) {
        if (count($argv) < 3 || $argv[1] !== '--type') {
            echo "Usage: php tmdb-app.php <type>\n";
            echo "Usage: php tmdb-app.php --type [popular|top|upcoming|playing]\n";
        exit(1);
        }

        $typeMap = [
            'popular' => 'popular',
            'top' => 'top_rated',
            'upcoming' => 'upcoming',
            'playing' => 'now_playing'
        ];

        $type = strtolower($argv[2]);

        if (!array_key_exists($type, $typeMap)) {
            echo "Invalid type specified. Please choose from: popular, top, upcoming, playing\n";
            exit(1);
        }

        $movies = fetchMovies($typeMap[$type]);

        if (!empty($movies)) {
            displayMovies($movies);
        }
    }
    
    main($argv);
