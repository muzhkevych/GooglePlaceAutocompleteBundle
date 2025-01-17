<?php

namespace Cethyworks\GooglePlaceAutocompleteBundle\Command;

use Cethyworks\ContentInjectorBundle\Command\TwigCommand;
use Twig\Environment as TwigEnvironment;
use Twig_Environment;

class GooglePlaceAutocompleteLibraryCommand extends TwigCommand
{
    protected $template = '@CethyworksGooglePlaceAutocompleteBundle/google_place_autocomplete_library.html.twig';

    /**
     * GooglePlaceAutocompleteLibraryCommand constructor.
     *
     * @param TwigEnvironment $twig
     * @param string $apiKey
     */
    public function __construct(TwigEnvironment $twig, $apiKey)
    {
        parent::__construct($twig);
        $this->setGoogleApiKey($apiKey);
    }

    /**
     * @param string $apiKey
     *
     * @return $this
     */
    public function setGoogleApiKey($apiKey)
    {
        $this->data['google_api_key'] = $apiKey;
        return $this;
    }
}
