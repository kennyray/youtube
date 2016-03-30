# Laravel-YouTube-Package
A package for working with the YouTube API v3

To use this package you must first import it with composer using the following command:

    composer require kennyray/youtube

Next, add the YouTubeServiceProvider to your config/app.php providers array:

    'KennyRay\YouTube\YouTubeServiceProvider',

To make sure it's working, try this:

    YouTube::hello();  // Prints "hello" to the screen to verify it's working


 (Portions of my code are adapted from others. Thank you for putting your code up publicly to help me learn and grow. alaouy, susomena, and others)