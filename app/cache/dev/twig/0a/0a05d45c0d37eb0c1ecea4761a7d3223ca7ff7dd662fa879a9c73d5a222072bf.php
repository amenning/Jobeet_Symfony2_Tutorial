<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_b9057f22ddc4880a5bf09fcde84a7b640f2230813683aab639ee3e26b91ee21c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2ae410439e4aeb0819d99998438ad44abec90c07930b23eceb9973d1fbbbd6a = $this->env->getExtension("native_profiler");
        $__internal_a2ae410439e4aeb0819d99998438ad44abec90c07930b23eceb9973d1fbbbd6a->enter($__internal_a2ae410439e4aeb0819d99998438ad44abec90c07930b23eceb9973d1fbbbd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2ae410439e4aeb0819d99998438ad44abec90c07930b23eceb9973d1fbbbd6a->leave($__internal_a2ae410439e4aeb0819d99998438ad44abec90c07930b23eceb9973d1fbbbd6a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
