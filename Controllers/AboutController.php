<?php


require_once __DIR__ . "/Controller.php";


class AboutController extends Controller {


    public function about()
    {
        self::renderView("about");
    }
}
