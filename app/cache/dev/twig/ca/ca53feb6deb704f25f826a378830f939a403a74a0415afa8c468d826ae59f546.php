<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_e1ec6047346d2b472dffa018dcae9c56ed34a359c869148ebdf2f691b15daa15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_890c248fb6b086a2b2d42817e8bd61dd09a56d05e0ef91de3165e78dad8891bb = $this->env->getExtension("native_profiler");
        $__internal_890c248fb6b086a2b2d42817e8bd61dd09a56d05e0ef91de3165e78dad8891bb->enter($__internal_890c248fb6b086a2b2d42817e8bd61dd09a56d05e0ef91de3165e78dad8891bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890c248fb6b086a2b2d42817e8bd61dd09a56d05e0ef91de3165e78dad8891bb->leave($__internal_890c248fb6b086a2b2d42817e8bd61dd09a56d05e0ef91de3165e78dad8891bb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
