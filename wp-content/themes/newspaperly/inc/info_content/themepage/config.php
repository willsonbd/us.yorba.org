<?php
defined("ABSPATH") || exit();

class SuperbInfoContentConfig
{
    const THEME_LINK = 'https://superbthemes.com/newspaperly/';
    const DEMO_LINK = 'https://superbthemes.com/demo/newspaperly/';

    private $FEATURES = array();

    public function __construct()
    {
        $this->AddFeature(__("Customize Header Logo, Text & Background Color", "newspaperly"), "purple-paint-brush.svg");
        $this->AddFeature(__("Translation Ready", "newspaperly"), "purple-article-medium.svg");
        $this->AddFeature(__("Fully SEO Optimized", "newspaperly"), "purple-gauge.svg");
        $this->AddFeature(__("Customize All Fonts", "newspaperly"), "purple-article-medium.svg");
        $this->AddFeature(__("Customize All Colors", "newspaperly"), "purple-paint-brush.svg");
        $this->AddFeature(__("Importable Demo Content", "newspaperly"), "purple-images.svg");
        $this->AddFeature(__("Elementor Compatible", "newspaperly"), "purple-elementor-logo.svg");
        $this->AddFeature(__("Replace Copyright Text", "newspaperly"), "purple-copyright.svg");
        $this->AddFeature(__("Full-Width Page Template", "newspaperly"), "purple-frame-corners.svg");
        $this->AddFeature(__("Access All Child Themes", "newspaperly"), "purple-images.svg");
        $this->AddFeature(__("Customer Support and Documentation", "newspaperly"), "purple-files.svg");
        $this->AddFeature(__("Multiple Website Support", "newspaperly"), "purple-files.svg");

        $this->AddFeature(__("Sticky Post Feature", "newspaperly"), "gear.svg");
        $this->AddFeature(__("Only Show Upper Widgets On Front Page", "newspaperly"), "gear.svg");
        $this->AddFeature(__("Optimized Mobile Layout", "newspaperly"), "gear.svg");

        $this->AddFeature(__("Remove 'Tag' from Tag Page Title", "newspaperly"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Author' from Author Page Title", "newspaperly"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Category' from Category Page Title", "newspaperly"), "purple-article-medium.svg");
    }

    private function AddFeature($title, $icon)
    {
        $this->FEATURES[] = array(
            "title" => $title,
            "icon" => $icon
        );
    }

    public function GetFeatures()
    {
        return $this->FEATURES;
    }
}
