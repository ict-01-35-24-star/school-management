<?php

declare(strict_types=1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli(
        hostname: 'localhost',
        username: 'root',
        password: 'wilson12+',
        database: 'school_management'
    );
} catch (mysqli_sql_exception $e) {
    error_log('Database connection failed: ' . $e->getMessage());
    die('Sorry, we are experiencing technical difficulties. Please try again later.');
}