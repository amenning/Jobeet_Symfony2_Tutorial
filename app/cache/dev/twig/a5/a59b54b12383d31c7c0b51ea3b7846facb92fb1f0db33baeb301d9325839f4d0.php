<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_dc244da3645c29eac0f04af0cf965d7c747674410489d371d8cc98a0f612e163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0dbcae17d52eb93094b47b6de8f73c512cbc83c3e028198d74436d6b1b87b89 = $this->env->getExtension("native_profiler");
        $__internal_e0dbcae17d52eb93094b47b6de8f73c512cbc83c3e028198d74436d6b1b87b89->enter($__internal_e0dbcae17d52eb93094b47b6de8f73c512cbc83c3e028198d74436d6b1b87b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0dbcae17d52eb93094b47b6de8f73c512cbc83c3e028198d74436d6b1b87b89->leave($__internal_e0dbcae17d52eb93094b47b6de8f73c512cbc83c3e028198d74436d6b1b87b89_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
