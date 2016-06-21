<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_23100e684ca970a641a59c1808e3a3700891aa31a66def1549670873a480b7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa13fade4a00e91f070b2581dc4c4d310afa5f6765a4b3b4adb9f24a632436b = $this->env->getExtension("native_profiler");
        $__internal_6fa13fade4a00e91f070b2581dc4c4d310afa5f6765a4b3b4adb9f24a632436b->enter($__internal_6fa13fade4a00e91f070b2581dc4c4d310afa5f6765a4b3b4adb9f24a632436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa13fade4a00e91f070b2581dc4c4d310afa5f6765a4b3b4adb9f24a632436b->leave($__internal_6fa13fade4a00e91f070b2581dc4c4d310afa5f6765a4b3b4adb9f24a632436b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
