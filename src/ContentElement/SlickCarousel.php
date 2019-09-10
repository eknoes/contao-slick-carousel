<?php
namespace Eknoes\ContaoSlickCarousel\ContentElement;

/**
 * ContentElement PublicationsList
 */
class SlickCarousel extends \ContentElement
{



    /**
     * Compile the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }

    /**
     * Generates the Backend Output
     */
    private function genBeOutput()
    {
        $this->strTemplate = 'be_wildcard';
        $this->Template = new \BackendTemplate($this->strTemplate);
        $this->Template->wildcard = "<i>Carousel</i><br />";
    }

    /**
     * Generates the frontend output
     */
    private function genFeOutput()
    {
        $items = [];
        foreach (explode("<p>----</p>", $this->text) as $item) {
            $items[] = str_replace("<p></p>", "", $item);
        }
        $this->Template = new \FrontendTemplate("ce_slick_carousel");
        $this->Template->items = $items;
        $this->Template->id = $this->id;
    }

}

?>
