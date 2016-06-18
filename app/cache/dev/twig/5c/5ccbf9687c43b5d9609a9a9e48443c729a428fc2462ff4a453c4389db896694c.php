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
        $__internal_632b4438f787056aa3154887eb6f02bcac1b4c31f308e4aeb2007b3d3107243e = $this->env->getExtension("native_profiler");
        $__internal_632b4438f787056aa3154887eb6f02bcac1b4c31f308e4aeb2007b3d3107243e->enter($__internal_632b4438f787056aa3154887eb6f02bcac1b4c31f308e4aeb2007b3d3107243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632b4438f787056aa3154887eb6f02bcac1b4c31f308e4aeb2007b3d3107243e->leave($__internal_632b4438f787056aa3154887eb6f02bcac1b4c31f308e4aeb2007b3d3107243e_prof);

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
