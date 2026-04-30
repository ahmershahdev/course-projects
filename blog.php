<?php
$pageKey = 'blog';
$pageTitle = 'Blog | Zovita';
$pageDescription = 'Read insights on building commerce systems, AI development, and product engineering from Zovita.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Blog']
];
require __DIR__ . '/includes/bootstrap.php';

$blogs = [
    [
        'title' => 'I Almost Lost Commerza: The Brutal Reality of Building an Ecommerce System Without a Framework',
        'url' => 'https://dev.to/syedahmershah/i-almost-lost-commerza-the-brutal-reality-of-building-an-ecommerce-system-without-a-framework-5b78',
        'source' => 'Dev.to',
        'excerpt' => 'A candid breakdown of building a full ecommerce system from scratch and the hard lessons learned along the way.'
    ],
    [
        'title' => 'What If AI Started in 2006?',
        'url' => 'https://dev.to/syedahmershah/what-if-ai-started-in-2006-8ig',
        'source' => 'Dev.to',
        'excerpt' => 'A thought experiment on how the AI boom might have unfolded if modern capabilities arrived a decade earlier.'
    ],
    [
        'title' => 'How 1 Missing Line of Code Cost Anthropic $340 Billion',
        'url' => 'https://medium.com/ai-in-plain-english/how-1-missing-line-of-code-cost-anthropic-340-billion-074db31fae55',
        'source' => 'Medium',
        'excerpt' => 'A deep dive into system fragility, hidden costs, and the compounding impact of small engineering misses.'
    ],
    [
        'title' => 'Beyond the Prompt: The Rise of the Sovereign Developer',
        'url' => 'https://medium.com/@syedahmershah/beyond-the-prompt-the-rise-of-the-sovereign-developer-b8cb2806a8b1',
        'source' => 'Medium',
        'excerpt' => 'Why developers are reclaiming their stacks and building with more autonomy in the AI era.'
    ],
    [
        'title' => 'The Enemy in Your Terminal: Why OpenClaw Was the Perfect Trojan Horse',
        'url' => 'https://blog.ahmershah.dev/the-enemy-in-your-terminal-why-openclaw-was-the-perfect-trojan-horse',
        'source' => 'Hashnode',
        'excerpt' => 'A security-focused story on how developer tooling can become a quiet attack surface.'
    ],
    [
        'title' => 'Build Your Own Private Copilot in 10 Minutes: Ollama, Continue, and DeepSeek V3',
        'url' => 'https://blog.ahmershah.dev/build-your-own-private-copilot-in-10-minutes-ollama-continue-and-deepseek-v3',
        'source' => 'Hashnode',
        'excerpt' => 'A practical guide to setting up a private AI assistant using open tools and local models.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="blog">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-2 sm:px-3">
            <section class="zv-hero zv-hero-premium p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">Zovita blog</span>
                <h1 class="zv-page-title">Insights on building products, AI, and ecommerce systems</h1>
                <p class="zv-page-lead">Curated writing from ahmershahdev on systems design, engineering lessons, and modern AI workflows.</p>
                <ul class="zv-hero-list">
                    <li><span>01</span>
                        <div>Real engineering stories from production systems.</div>
                    </li>
                    <li><span>02</span>
                        <div>AI thought experiments and developer workflows.</div>
                    </li>
                    <li><span>03</span>
                        <div>Security, tooling, and build discipline insights.</div>
                    </li>
                </ul>
            </section>

            <section class="zv-section-lg">
                <div class="mb-4">
                    <span class="zv-chip">Latest posts</span>
                    <h2 class="mt-3 text-3xl font-bold">Explore the six featured articles</h2>
                    <p class="mt-2 text-sm text-slate-600">Each post opens in a new tab so you can keep browsing Zovita.</p>
                </div>

                <div class="zv-grid-cards cols-3">
                    <?php foreach ($blogs as $blog): ?>
                        <a
                            class="zv-glow-card zv-blog-card"
                            href="<?php echo htmlspecialchars($blog['url'], ENT_QUOTES, 'UTF-8'); ?>"
                            target="_blank"
                            rel="noopener">
                            <span class="zv-chip"><?php echo htmlspecialchars($blog['source'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <h3 class="text-xl font-bold"><?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="text-sm text-slate-600"><?php echo htmlspecialchars($blog['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <span class="zv-blog-meta">Read article</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>