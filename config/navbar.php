<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om webbsidan")
            ],

            "grid" =>[
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Vertikal Grid layout")
            ],

            "typography" =>[
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Horisontell Grid layout")
            ],

            "analysis" =>[
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys av olika webbplatser")
            ],

            "theme" =>[
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Beskrivning av teman")
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Bild blogg"),
                "mark-if-parent" => true,
            ],

            "images" => [
                "text"  => t("Firgure"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bilder och Firgures"),
                "mark-if-parent" => true,
            ],

            "design-element" => [
                "text"  => t("Design-element"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Design element"),
                "mark-if-parent" => true,
            ],

            "design-principle" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Designprinciper"),
                "mark-if-parent" => true,
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "grid" =>[
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Vertikal Grid layout")
            ],

            "typography" =>[
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Horisontell Grid layout")
            ],

            "analysis" =>[
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys av olika webbplatser")
            ],

            "theme" =>[
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Beskrivning av teman")
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Bild blogg"),
                "mark-if-parent" => true,
            ],

            "images" => [
                "text"  => t("Firgure"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bilder och Firgures"),
                "mark-if-parent" => true,
            ],

            "design-element" => [
                "text"  => t("Design-element"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Design element"),
                "mark-if-parent" => true,
            ],

            "design-principle" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Designprinciper"),
                "mark-if-parent" => true,
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
