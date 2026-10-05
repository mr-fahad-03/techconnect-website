<?php

use Illuminate\Support\Facades\Route;

/*
 | TechConnect 2026 — page routes.
 | Each entry mirrors the original site's URL layout.
 */

$pages = [
    '/' => ['view' => 'pages.home', 'title' => 'TechConnect 2026', 'description' => 'TechConnect @ IIT Bombay', 'keywords' => 'Homepage', 'canonical' => '/', 'skip' => '#list-posts'],
    '/event/about/' => ['view' => 'pages.about', 'title' => 'About | TechConnect 2026', 'description' => 'Get to know more about TechConnect !', 'keywords' => 'about', 'canonical' => '/event/about/', 'skip' => '#content'],
    '/event/exhibition/' => ['view' => 'pages.exhibition', 'title' => 'Exhibition | TechConnect 2026', 'description' => 'TechConnect\'s pivotal segment - the research exhibition !', 'keywords' => 'exhibition,event,schedule,updates,important', 'canonical' => '/event/exhibition/', 'skip' => '#content'],
    '/event/symposium/' => ['view' => 'pages.symposium', 'title' => 'Symposium | TechConnect 2026', 'description' => 'The departmental tech exhibition !', 'keywords' => 'symposium,event,schedule,updates,important', 'canonical' => '/event/symposium/', 'skip' => '#content'],
    '/event/contact/' => ['view' => 'pages.contact', 'title' => 'Contact | TechConnect 2026', 'description' => 'Have question(s) ? Reach out to us !', 'keywords' => 'contact,updates,important', 'canonical' => '/event/contact/', 'skip' => '#content'],
    '/event/team/' => ['view' => 'pages.team', 'title' => 'Team | TechConnect 2026', 'description' => 'Meet the minds behind the TechConnect 2026 !', 'keywords' => 'team', 'canonical' => '/event/team/', 'skip' => '#content'],
    '/event/gallery/' => ['view' => 'pages.gallery', 'title' => 'Gallery | TechConnect 2026', 'description' => 'Moments from TechConnect 2025', 'keywords' => 'gallery,images', 'canonical' => '/event/gallery/', 'skip' => '#content'],
    '/event/highlights/' => ['view' => 'pages.highlights', 'title' => 'Highlights | TechConnect 2026', 'description' => 'TechConnect 2023 & 2024 highlights !', 'keywords' => 'highlights,images', 'canonical' => '/event/highlights/', 'skip' => '#content'],
    '/form/attendee-registration/' => ['view' => 'pages.registration', 'title' => 'Attendee Registration | TechConnect 2026', 'description' => 'Too early for registrations !', 'keywords' => 'form,registration,important', 'canonical' => '/form/attendee-registration/', 'skip' => '#content'],
    '/event/' => ['view' => 'pages.event_index', 'title' => 'Events & Details | TechConnect 2026', 'description' => 'section | TechConnect 2026', 'keywords' => '', 'canonical' => '/event/', 'skip' => '#list-posts'],
    '/form/' => ['view' => 'pages.form_index', 'title' => 'Forms | TechConnect 2026', 'description' => 'section | TechConnect 2026', 'keywords' => '', 'canonical' => '/form/', 'skip' => '#list-posts'],
    '/tags/' => ['view' => 'pages.tags', 'title' => 'Tags | TechConnect 2026', 'description' => 'taxonomy | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/', 'skip' => '#list-posts'],
    '/tags/about/' => ['view' => 'pages.tags.about', 'title' => 'About | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/about/', 'skip' => '#list-posts'],
    '/tags/contact/' => ['view' => 'pages.tags.contact', 'title' => 'Contact | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/contact/', 'skip' => '#list-posts'],
    '/tags/event/' => ['view' => 'pages.tags.event', 'title' => 'Event | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/event/', 'skip' => '#list-posts'],
    '/tags/exhibition/' => ['view' => 'pages.tags.exhibition', 'title' => 'Exhibition | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/exhibition/', 'skip' => '#list-posts'],
    '/tags/form/' => ['view' => 'pages.tags.form', 'title' => 'Form | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/form/', 'skip' => '#list-posts'],
    '/tags/gallery/' => ['view' => 'pages.tags.gallery', 'title' => 'Gallery | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/gallery/', 'skip' => '#list-posts'],
    '/tags/highlights/' => ['view' => 'pages.tags.highlights', 'title' => 'Highlights | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/highlights/', 'skip' => '#list-posts'],
    '/tags/images/' => ['view' => 'pages.tags.images', 'title' => 'Images | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/images/', 'skip' => '#list-posts'],
    '/tags/important/' => ['view' => 'pages.tags.important', 'title' => 'Important | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/important/', 'skip' => '#list-posts'],
    '/tags/registration/' => ['view' => 'pages.tags.registration', 'title' => 'Registration | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/registration/', 'skip' => '#list-posts'],
    '/tags/schedule/' => ['view' => 'pages.tags.schedule', 'title' => 'Schedule | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/schedule/', 'skip' => '#list-posts'],
    '/tags/symposium/' => ['view' => 'pages.tags.symposium', 'title' => 'Symposium | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/symposium/', 'skip' => '#list-posts'],
    '/tags/team/' => ['view' => 'pages.tags.team', 'title' => 'Team | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/team/', 'skip' => '#list-posts'],
    '/tags/updates/' => ['view' => 'pages.tags.updates', 'title' => 'Updates | TechConnect 2026', 'description' => 'term | TechConnect 2026', 'keywords' => '', 'canonical' => '/tags/updates/', 'skip' => '#list-posts'],
];

foreach ($pages as $uri => $meta) {
    Route::get($uri, fn () => view($meta['view'], $meta))
        ->name(trim(str_replace('/', '.', $uri), '.') ?: 'home');
}

/* ResCon 2026 — mirrors https://rnd.iitb.ac.in/rescon/en/ */
$rescon = [
    '/rescon/' => ['view' => 'rescon.pages.home', 'title' => 'ResCon 2026', 'description' => 'ResCon 2026 | TechConnect @ IIT Bombay', 'keywords' => 'Homepage', 'canonical' => '/rescon/', 'skip' => '#list-posts'],
    '/rescon/detail/' => ['view' => 'rescon.pages.detail', 'title' => 'Event Details | ResCon 2026', 'description' => 'section | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/detail/', 'skip' => '#list-posts'],
    '/rescon/detail/programme/' => ['view' => 'rescon.pages.programme', 'title' => 'Programme | ResCon 2026', 'description' => 'Schedule, sessions and key activities shaping the event !', 'keywords' => 'programme,updates', 'canonical' => '/rescon/detail/programme/', 'skip' => '#content'],
    '/rescon/detail/speakers/' => ['view' => 'rescon.pages.speakers', 'title' => 'Speakers | ResCon 2026', 'description' => 'Meet the experts driving cutting-edge research !', 'keywords' => 'speakers,updates', 'canonical' => '/rescon/detail/speakers/', 'skip' => '#content'],
    '/rescon/detail/dates/' => ['view' => 'rescon.pages.dates', 'title' => 'Important Dates | ResCon 2026', 'description' => 'To be updated !', 'keywords' => 'dates,updates,important', 'canonical' => '/rescon/detail/dates/', 'skip' => '#content'],
    '/rescon/detail/gallery/' => ['view' => 'rescon.pages.gallery', 'title' => 'Gallery | ResCon 2026', 'description' => 'Moments from ResCon 2025', 'keywords' => 'gallery,images', 'canonical' => '/rescon/detail/gallery/', 'skip' => '#content'],
    '/rescon/detail/highlights/' => ['view' => 'rescon.pages.highlights', 'title' => 'Highlights | ResCon 2026', 'description' => 'ResCon 2024 highlights !', 'keywords' => 'highlights,images', 'canonical' => '/rescon/detail/highlights/', 'skip' => '#content'],
    '/rescon/detail/contact/' => ['view' => 'rescon.pages.contact', 'title' => 'Contact | ResCon 2026', 'description' => 'Have question(s) ? Reach out to us !', 'keywords' => 'contact,updates,important', 'canonical' => '/rescon/detail/contact/', 'skip' => '#content'],
    '/rescon/tags/' => ['view' => 'rescon.pages.tags', 'title' => 'Tags | ResCon 2026', 'description' => 'taxonomy | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/', 'skip' => '#list-posts'],
    '/rescon/tags/contact/' => ['view' => 'rescon.pages.tags.contact', 'title' => 'Contact | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/contact/', 'skip' => '#list-posts'],
    '/rescon/tags/dates/' => ['view' => 'rescon.pages.tags.dates', 'title' => 'Dates | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/dates/', 'skip' => '#list-posts'],
    '/rescon/tags/gallery/' => ['view' => 'rescon.pages.tags.gallery', 'title' => 'Gallery | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/gallery/', 'skip' => '#list-posts'],
    '/rescon/tags/highlights/' => ['view' => 'rescon.pages.tags.highlights', 'title' => 'Highlights | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/highlights/', 'skip' => '#list-posts'],
    '/rescon/tags/images/' => ['view' => 'rescon.pages.tags.images', 'title' => 'Images | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/images/', 'skip' => '#list-posts'],
    '/rescon/tags/important/' => ['view' => 'rescon.pages.tags.important', 'title' => 'Important | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/important/', 'skip' => '#list-posts'],
    '/rescon/tags/programme/' => ['view' => 'rescon.pages.tags.programme', 'title' => 'Programme | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/programme/', 'skip' => '#list-posts'],
    '/rescon/tags/speakers/' => ['view' => 'rescon.pages.tags.speakers', 'title' => 'Speakers | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/speakers/', 'skip' => '#list-posts'],
    '/rescon/tags/updates/' => ['view' => 'rescon.pages.tags.updates', 'title' => 'Updates | ResCon 2026', 'description' => 'term | ResCon 2026', 'keywords' => '', 'canonical' => '/rescon/tags/updates/', 'skip' => '#list-posts'],
];

foreach ($rescon as $uri => $meta) {
    Route::get($uri, fn () => view($meta['view'], $meta))
        ->name('rescon'.rtrim(str_replace('/', '.', substr($uri, 7)), '.'));
}
