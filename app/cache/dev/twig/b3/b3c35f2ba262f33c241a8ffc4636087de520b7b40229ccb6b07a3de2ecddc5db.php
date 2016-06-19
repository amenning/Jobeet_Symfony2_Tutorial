<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_6d29ce521e8e0df802bdd474c52aaba70bd276eaa2011b65c46beff93a759bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6670e206008184e54619b154c1d1aa7b016c63ded4a4baf958e7ec8b643d93b1 = $this->env->getExtension("native_profiler");
        $__internal_6670e206008184e54619b154c1d1aa7b016c63ded4a4baf958e7ec8b643d93b1->enter($__internal_6670e206008184e54619b154c1d1aa7b016c63ded4a4baf958e7ec8b643d93b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6670e206008184e54619b154c1d1aa7b016c63ded4a4baf958e7ec8b643d93b1->leave($__internal_6670e206008184e54619b154c1d1aa7b016c63ded4a4baf958e7ec8b643d93b1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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
