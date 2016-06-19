<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_a1c5b24d5bae71e9af20299097e6b057749e77daf2bc4fd46c193999c3121102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9b62b936e829b6c195c7925bddec9f8aa554edc6c17d66a83af2124a17471b7 = $this->env->getExtension("native_profiler");
        $__internal_d9b62b936e829b6c195c7925bddec9f8aa554edc6c17d66a83af2124a17471b7->enter($__internal_d9b62b936e829b6c195c7925bddec9f8aa554edc6c17d66a83af2124a17471b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9b62b936e829b6c195c7925bddec9f8aa554edc6c17d66a83af2124a17471b7->leave($__internal_d9b62b936e829b6c195c7925bddec9f8aa554edc6c17d66a83af2124a17471b7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
