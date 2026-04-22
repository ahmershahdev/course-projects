<?php if (!empty($breadcrumbs)): ?>
    <section class="zv-section">
        <div class="zv-container px-2 sm:px-3">
            <ul class="zv-breadcrumbs" aria-label="Breadcrumb">
                <?php foreach ($breadcrumbs as $crumb): ?>
                    <li>
                        <?php if (!empty($crumb['url'])): ?>
                            <a href="<?php echo htmlspecialchars($crumb['url'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php else: ?>
                            <span><?php echo htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>