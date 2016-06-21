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
        $__internal_315d225f889623f2dd8e8aa767539add6c6b56d23ab18b88e9d4ca5d70f12645 = $this->env->getExtension("native_profiler");
        $__internal_315d225f889623f2dd8e8aa767539add6c6b56d23ab18b88e9d4ca5d70f12645->enter($__internal_315d225f889623f2dd8e8aa767539add6c6b56d23ab18b88e9d4ca5d70f12645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315d225f889623f2dd8e8aa767539add6c6b56d23ab18b88e9d4ca5d70f12645->leave($__internal_315d225f889623f2dd8e8aa767539add6c6b56d23ab18b88e9d4ca5d70f12645_prof);

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
