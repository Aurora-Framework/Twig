<?php

namespace Aurora\Twig;

use Twig_Extension;
use Aurora\DI\ResolverInterface;

class Extension extends Twig_Extension
{
    private $Resolver;

    public function __construct(ResolverInterface $Resolver)
    {
        $this->Resolver = $Resolver;
    }

    public function getName()
    {
        return 'Aurora';
    }

    public function getGlobals()
    {
        return [
            'HTML' => $this->Resolver->make("Aurora\\Helper\\HTML"),
            'String' => $this->Resolver->make("Aurora\\Helper\\String"),
            'Text' => $this->Resolver->make("Aurora\\Helper\\Text"),
            'Url' => $this->Resolver->make("Aurora\\Helper\\Url"),
            'Form' => $this->Resolver->make("Aurora\\Helper\\Form"),
        ];
    }

    public function getResolver()
    {
        return $this->Resolver;
    }
}
