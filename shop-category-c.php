<?php
$pageKey = 'shop-category-c';
$pageTitle = 'Shop Category C | Oral Care, Supplements, and Sensory Care';
$pageDescription = 'Explore Category C on Zovita: oral care products, nutrition supplements, and eyes-nose-ear support essentials.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Shop category C']
];
require __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/products-data.php';

$catalog = zvGetCategoryCatalog();
$category = $catalog['c'];
$products = zvGetProductsByCategory('c');
$sectionCounts = [];
foreach ($products as $product) {
    $sectionId = $product['section'];
    if (!isset($sectionCounts[$sectionId])) {
        $sectionCounts[$sectionId] = 0;
    }
    $sectionCounts[$sectionId] += 1;
}

$heroPoints = [
    ['label' => '01', 'text' => 'Oral care, nutrition, and sensory support essentials in one routine.'],
    ['label' => '02', 'text' => 'Filter by section to stay focused on daily hygiene and supplements.'],
    ['label' => '03', 'text' => 'Build consistent care plans for mouth, eyes, and ears.'],
];

$sectionHighlights = [
    'oral-care' => 'Toothpaste, mouthwash, and oral hygiene essentials for daily care.',
    'nutrition-support' => 'Balanced supplement blends and nutrition drinks for routine support.',
    'eye-ear-care' => 'Targeted drops and ointments for sensitive eye and ear care.',
];
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="shop-category-c">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-1 sm:px-2">
            <section class="zv-hero zv-hero-premium p-6 sm:p-8 lg:p-10">
                <span class="zv-chip"><?php echo htmlspecialchars($category['badge'], ENT_QUOTES, 'UTF-8'); ?></span>
                <h1 class="zv-page-title"><?php echo htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <p class="zv-page-lead"><?php echo htmlspecialchars($category['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                <ul class="zv-hero-list">
                    <?php foreach ($heroPoints as $point): ?>
                        <li>
                            <span><?php echo htmlspecialchars($point['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <div><?php echo htmlspecialchars($point['text'], ENT_QUOTES, 'UTF-8'); ?></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="zv-section mt-5">
                <div class="zv-grid-cards cols-3">
                    <?php foreach ($category['sections'] as $section): ?>
                        <?php $sectionId = $section['id']; ?>
                        <a
                            href="#<?php echo htmlspecialchars($sectionId, ENT_QUOTES, 'UTF-8'); ?>"
                            class="zv-card p-5 flex flex-col gap-2">
                            <span class="zv-chip"><?php echo htmlspecialchars($section['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <p class="text-sm text-slate-600">Explore <?php echo htmlspecialchars($section['label'], ENT_QUOTES, 'UTF-8'); ?> essentials.</p>
                            <span class="text-sm font-semibold text-navy-800">
                                <?php echo (int)($sectionCounts[$sectionId] ?? 0); ?> products
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="zv-section-lg">
                <div class="mb-4">
                    <span class="zv-chip">Category highlights</span>
                    <h2 class="mt-3 text-3xl font-bold">Balanced routines for mouth, nutrition, and senses</h2>
                    <p class="mt-2 text-sm text-slate-600">Keep daily care organized with section-led guidance and essentials.</p>
                </div>
                <div class="zv-grid-cards cols-3">
                    <?php foreach ($category['sections'] as $section): ?>
                        <?php $sectionId = $section['id']; ?>
                        <article class="zv-glow-card">
                            <span class="zv-chip"><?php echo htmlspecialchars($section['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <h3 class="mt-3 text-xl font-bold"><?php echo htmlspecialchars($section['label'], ENT_QUOTES, 'UTF-8'); ?> focus</h3>
                            <p class="mt-2 text-sm text-slate-600">
                                <?php echo htmlspecialchars($sectionHighlights[$sectionId] ?? 'Curated essentials for everyday care routines.', ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                            <p class="mt-3 text-sm font-semibold text-navy-800">
                                <?php echo (int)($sectionCounts[$sectionId] ?? 0); ?> products ready
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="zv-section-lg zv-catalog mt-5" data-shop-catalog>
                <div class="zv-shop-head">
                    <h2 class="text-2xl font-bold">Category Catalog</h2>
                    <p class="text-sm font-semibold text-navy-800" data-product-count></p>
                </div>

                <div class="zv-shop-filter-grid mt-4">
                    <label>
                        <span class="zv-label">Search product</span>
                        <input type="search" class="zv-input" data-filter-query placeholder="Search by product name">
                    </label>
                    <div class="zv-filter-dropdown" data-filter-dropdown>
                        <span class="zv-label">Type</span>
                        <button type="button" class="zv-input zv-dropdown-trigger" data-filter-trigger aria-expanded="false">
                            <span data-filter-label>All types</span>
                            <span class="zv-dropdown-arrow">v</span>
                        </button>
                        <ul class="zv-dropdown-list zv-filter-dropdown-list" data-filter-list>
                            <li><button type="button" data-filter-option data-value="all">All types</button></li>
                            <li><button type="button" data-filter-option data-value="product">Product</button></li>
                            <li><button type="button" data-filter-option data-value="medicine">Medicine</button></li>
                        </ul>
                        <input type="hidden" data-filter-type value="all">
                    </div>

                    <div class="zv-filter-dropdown" data-filter-dropdown>
                        <span class="zv-label">Section</span>
                        <button type="button" class="zv-input zv-dropdown-trigger" data-filter-trigger aria-expanded="false">
                            <span data-filter-label>All sections</span>
                            <span class="zv-dropdown-arrow">v</span>
                        </button>
                        <ul class="zv-dropdown-list zv-filter-dropdown-list" data-filter-list>
                            <li><button type="button" data-filter-option data-value="all">All sections</button></li>
                            <?php foreach ($category['sections'] as $section): ?>
                                <li><button type="button" data-filter-option data-value="<?php echo htmlspecialchars($section['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($section['label'], ENT_QUOTES, 'UTF-8'); ?></button></li>
                            <?php endforeach; ?>
                        </ul>
                        <input type="hidden" data-filter-section value="all">
                    </div>

                    <div class="zv-filter-dropdown" data-filter-dropdown>
                        <span class="zv-label">Sort by</span>
                        <button type="button" class="zv-input zv-dropdown-trigger" data-filter-trigger aria-expanded="false">
                            <span data-filter-label>Featured</span>
                            <span class="zv-dropdown-arrow">v</span>
                        </button>
                        <ul class="zv-dropdown-list zv-filter-dropdown-list" data-filter-list>
                            <li><button type="button" data-filter-option data-value="featured">Featured</button></li>
                            <li><button type="button" data-filter-option data-value="price-low">Price: Low to High</button></li>
                            <li><button type="button" data-filter-option data-value="price-high">Price: High to Low</button></li>
                            <li><button type="button" data-filter-option data-value="name">Name</button></li>
                        </ul>
                        <input type="hidden" data-filter-sort value="featured">
                    </div>
                </div>

                <div class="zv-product-grid mt-5" data-product-grid>
                    <?php foreach ($products as $product): ?>
                        <article
                            class="zv-product-card zv-product-card-premium"
                            data-product-card
                            data-name="<?php echo htmlspecialchars(strtolower($product['name']), ENT_QUOTES, 'UTF-8'); ?>"
                            data-type="<?php echo htmlspecialchars(strtolower($product['type']), ENT_QUOTES, 'UTF-8'); ?>"
                            data-section="<?php echo htmlspecialchars(strtolower($product['section']), ENT_QUOTES, 'UTF-8'); ?>"
                            data-price="<?php echo (int)$product['price']; ?>">
                            <a href="<?php echo htmlspecialchars($product['url'], ENT_QUOTES, 'UTF-8'); ?>" class="zv-product-link">
                                <div class="zv-product-image-wrap">
                                    <img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?>">
                                </div>
                                <div class="zv-product-meta">
                                    <small><?php echo htmlspecialchars($product['sectionLabel'], ENT_QUOTES, 'UTF-8'); ?></small>
                                    <strong><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></strong>
                                    <p class="zv-product-price"><?php echo htmlspecialchars($product['priceLabel'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>

                <p class="zv-empty-state" data-empty-state>No products matched your selected filters.</p>
            </section>

            <section class="zv-section">
                <div class="zv-panel zv-hero-premium p-5 sm:p-6">
                    <h3 class="text-xl font-bold">Need a specific product?</h3>
                    <p class="mt-2 text-sm text-slate-600">Use search and section filters above to pinpoint oral, nutrition, or sensory care essentials.</p>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>