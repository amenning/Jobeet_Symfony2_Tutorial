<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_7244febea242aa970ed3dd9925aa3ecc56dafcc45f7ec0d7292ca6b0c1f6da76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7320dc32910d57dc4cd950e7bf4ef6de6d17ee3ad35cb63a2290f2f9d6ee5c6 = $this->env->getExtension("native_profiler");
        $__internal_a7320dc32910d57dc4cd950e7bf4ef6de6d17ee3ad35cb63a2290f2f9d6ee5c6->enter($__internal_a7320dc32910d57dc4cd950e7bf4ef6de6d17ee3ad35cb63a2290f2f9d6ee5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7320dc32910d57dc4cd950e7bf4ef6de6d17ee3ad35cb63a2290f2f9d6ee5c6->leave($__internal_a7320dc32910d57dc4cd950e7bf4ef6de6d17ee3ad35cb63a2290f2f9d6ee5c6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
