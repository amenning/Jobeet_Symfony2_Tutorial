<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_c8bc51e628f9917a01f311f7e3ec99596b871f8ef388f599d5fcb9770cea4641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08c7a997f8b14ec9454c821fde74cb0b64d332a3b89d8b67beba173a3fd0a6d1 = $this->env->getExtension("native_profiler");
        $__internal_08c7a997f8b14ec9454c821fde74cb0b64d332a3b89d8b67beba173a3fd0a6d1->enter($__internal_08c7a997f8b14ec9454c821fde74cb0b64d332a3b89d8b67beba173a3fd0a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c7a997f8b14ec9454c821fde74cb0b64d332a3b89d8b67beba173a3fd0a6d1->leave($__internal_08c7a997f8b14ec9454c821fde74cb0b64d332a3b89d8b67beba173a3fd0a6d1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
