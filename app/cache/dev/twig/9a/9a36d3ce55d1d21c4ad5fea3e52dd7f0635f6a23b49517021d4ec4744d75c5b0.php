<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_47ce45a45abe06d1286ca55d1da5329c479a054d69ed6e61369c3d00969471f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_613290a3502de8036b2c6f86d289ecc8e76e678e460b3a71563ec29a4070faee = $this->env->getExtension("native_profiler");
        $__internal_613290a3502de8036b2c6f86d289ecc8e76e678e460b3a71563ec29a4070faee->enter($__internal_613290a3502de8036b2c6f86d289ecc8e76e678e460b3a71563ec29a4070faee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613290a3502de8036b2c6f86d289ecc8e76e678e460b3a71563ec29a4070faee->leave($__internal_613290a3502de8036b2c6f86d289ecc8e76e678e460b3a71563ec29a4070faee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
