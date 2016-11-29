<?php

class FontResizer extends Extension
{
    protected static $font_size_change = 0.1;
    public static function set_font_size_change($v)
    {
        self::$font_size_change = floatval($v);
    }

    protected static $max_font_size = 1.7;
    public static function set_max_font_size($v)
    {
        self::$max_font_size = floatval($v);
    }

    protected static $min_font_size = 0.7;
    public static function set_min_font_size($v)
    {
        self::$min_font_size = floatval($v);
    }

    public static $allowed_actions = array("increasefontsize", "decreasefontsize", "resetfontsize");

    // *** TEMPLATE FUNCTIONS

    public function CurrentFontSizeInPercentages($currentSize = 0)
    {
        Requirements::themedCSS("fontresizer");
        Requirements::javascript("fontresizer/javascript/fontresizer.js");
        Requirements::customScript("fontresizer.setMin(".(self::$min_font_size*100).");fontresizer.setMax(".(self::$max_font_size*100).");");
        if (!$currentSize) {
            $currentSize = $this->currentFontSize();
        }
        return $currentSize * 100;
    }

    public function HasAlteredFont()
    {
        if ($this->currentFontSize() != 1) {
            return true;
        }
        return false;
    }


    // *** ACTIONS

    public function increasefontsize()
    {
        return $this->fontAction(1 * self::$font_size_change);
    }

    public function decreasefontsize()
    {
        return $this->fontAction(-1 * self::$font_size_change);
    }

    public function resetfontsize()
    {
        Session::clear("fontsize");
        return $this->fontAction(0);
    }


    // *** INTERNAL FUNCTIONS

    protected function fontAction($change)
    {
        $currentSize = $this->currentFontSize();
        $currentSize = floatval($currentSize) + $change;
        Session::set("fontsize", $currentSize);
        if (Director::is_ajax()) {
            return $this->CurrentFontSizeInPercentages($currentSize);
        } else {
            Director::redirectBack();
        }
        return array();
    }


    protected function currentFontSize()
    {
        $currentSize = Session::get("fontsize");
        if (!$currentSize) {
            $currentSize = 1;
        }
        if ($currentSize < self::$min_font_size) {
            $currentSize = self::$min_font_size;
        }
        if ($currentSize > self::$max_font_size) {
            $currentSize = self::$max_font_size;
        }
        //make percentage
        return $currentSize;
    }
}
