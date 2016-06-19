<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_b041bbf7fc6a37ed02bf0ede897eba707af88941683354711e3bf9b8c3e8ec00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e365bbbd221ef8c51bcbfa19ff556a9807e5cf15cf9ee9dbe2ec9f3327e167e6 = $this->env->getExtension("native_profiler");
        $__internal_e365bbbd221ef8c51bcbfa19ff556a9807e5cf15cf9ee9dbe2ec9f3327e167e6->enter($__internal_e365bbbd221ef8c51bcbfa19ff556a9807e5cf15cf9ee9dbe2ec9f3327e167e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e365bbbd221ef8c51bcbfa19ff556a9807e5cf15cf9ee9dbe2ec9f3327e167e6->leave($__internal_e365bbbd221ef8c51bcbfa19ff556a9807e5cf15cf9ee9dbe2ec9f3327e167e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
