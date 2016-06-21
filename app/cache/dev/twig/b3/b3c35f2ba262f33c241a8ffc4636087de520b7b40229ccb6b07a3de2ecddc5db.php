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
        $__internal_030bace04e57cd8dc70e2b7545fd02a93d5cd55fbc3aca11ef6ad82f7cf6b8d3 = $this->env->getExtension("native_profiler");
        $__internal_030bace04e57cd8dc70e2b7545fd02a93d5cd55fbc3aca11ef6ad82f7cf6b8d3->enter($__internal_030bace04e57cd8dc70e2b7545fd02a93d5cd55fbc3aca11ef6ad82f7cf6b8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_030bace04e57cd8dc70e2b7545fd02a93d5cd55fbc3aca11ef6ad82f7cf6b8d3->leave($__internal_030bace04e57cd8dc70e2b7545fd02a93d5cd55fbc3aca11ef6ad82f7cf6b8d3_prof);

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
