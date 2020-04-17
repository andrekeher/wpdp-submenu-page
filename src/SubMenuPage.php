<?php
namespace AndreKeher\WPDP;

use AndreKeher\WPDP\MenuPage;

class SubMenuPage extends MenuPage
{
    protected $parentSlug;

    public function __construct(
        $parentSlug,
        $pageTitle,
        $menuTitle,
        $menuSlug,
        $capability = 'manage_options',
        $position = null
    ) {
        $this->parentSlug = $parentSlug;
        parent::__construct($pageTitle, $menuTitle, $menuSlug, $capability, '', $position);
    }
}
