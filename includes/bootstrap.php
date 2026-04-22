<?php
$siteDomain = 'https://zovita.ahmershah.dev';
$currentScript = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');

$pageKey = $pageKey ?? 'default';
$pageTitle = $pageTitle ?? 'Zovita | Trusted Healthcare Commerce';
$pageDescription = $pageDescription ?? 'Zovita offers trusted healthcare products, wellness essentials, and support-focused shopping experiences.';
$pageKeywords = $pageKeywords ?? 'zovita, online pharmacy, healthcare, supplements, wellness';
$pageRobots = $pageRobots ?? 'index, follow';

$canonical = $canonical ?? ($currentScript === 'index.php' ? $siteDomain . '/' : $siteDomain . '/' . $currentScript);
$ogImage = $ogImage ?? ($siteDomain . '/frontend/assets/images/main_page_images/hero.png');
$ogType = $ogType ?? 'website';
$ogTitle = $ogTitle ?? $pageTitle;
$ogDescription = $ogDescription ?? $pageDescription;

$breadcrumbs = $breadcrumbs ?? [];

if (empty($breadcrumbs)) {
    $breadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php']
    ];

    if ($currentScript !== 'index.php') {
        $breadcrumbs[] = ['label' => preg_replace('/\.php$/', '', ucfirst(str_replace(['-', '_'], ' ', $currentScript)))];
    }
}

$organizationJsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'Zovita',
    'url' => $siteDomain,
    'logo' => $siteDomain . '/frontend/assets/images/logo/logo.png',
    'contactPoint' => [
        [
            '@type' => 'ContactPoint',
            'telephone' => '+92-300-1234567',
            'contactType' => 'customer service',
            'email' => 'help@zovita.pk',
            'availableLanguage' => ['en']
        ]
    ]
];

$webPageJsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $pageTitle,
    'description' => $pageDescription,
    'url' => $canonical,
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Zovita',
        'url' => $siteDomain
    ]
];

$breadcrumbListJsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => []
];

$position = 1;
foreach ($breadcrumbs as $crumb) {
    $label = $crumb['label'] ?? '';
    $url = $crumb['url'] ?? null;

    $item = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $label
    ];

    if (!empty($url)) {
        $item['item'] = (strpos($url, 'http') === 0) ? $url : ($siteDomain . '/' . ltrim($url, '/'));
    }

    $breadcrumbListJsonLd['itemListElement'][] = $item;
    $position++;
}

function zvActiveClass($targets, $currentScript)
{
    $files = is_array($targets) ? $targets : [$targets];
    foreach ($files as $file) {
        if ($currentScript === $file) {
            return ' is-active';
        }
    }
    return '';
}
