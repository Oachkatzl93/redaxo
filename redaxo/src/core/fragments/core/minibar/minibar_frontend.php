<div class="rex-minibar" data-minibar="<?= rex_minibar::getInstance()->isVisible() ? 'true' : 'false' ?>">
    <a class="rex-minibar-opener" href="<?= rex_getUrl('', '', ['visibility' => true] + rex_api_minibar::getUrlParams()) ?>">
        <i class="rex-minibar-opener-icon"></i>
    </a>
    <a class="rex-minibar-close" href="<?= rex_getUrl('', '', ['visibility' => false] + rex_api_minibar::getUrlParams()) ?>">
        <i class="rex-minibar-close-icon"></i>
    </a>
    <div class="rex-minibar-elements">
        <?php foreach ($this->elements as $element): ?>
        <div class="rex-minibar-element
            <?= rex_string::normalize(get_class($element), '-') ?>
            <?= ($element->getOrientation() == rex_minibar_element::RIGHT ? ' rex-minibar-element-right' : '') ?>
            <?= ($element->isDanger() ? ' rex-minibar-status-danger' : '') ?>
            <?= ($element->isWarning() ? ' rex-minibar-status-warning' : '') ?>
            <?= ($element->isPrimary() ? ' rex-minibar-status-primary': '') ?>
        ">
            <?= $element->render() ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
