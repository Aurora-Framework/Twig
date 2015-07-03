<?php

namespace Aurora\Twig;

class Extension extends Twig_Extension
{
   private $Injector;

   public function __construct(ResolverInterface $Injector)
   {
      $this->Injector = $Injector;
   }

   public function getName()
   {
      return 'Aurora';
   }

   public function getGlobals()
   {
      return [
         'HTML' => $this->Injector->make("Aurora\\Helper\\HTML"),
         'String' => $this->Injector->make("Aurora\\Helper\\String"),
         'Text' => $this->Injector->make("Aurora\\Helper\\Text"),
         'Url' => $this->Injector->make("Aurora\\Helper\\Url"),
      ];
   }

}
