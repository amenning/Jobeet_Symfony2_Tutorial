<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_22e11150d6bb6cfebb7d101a9b5a3ec7ec06954cd2e4ebb8bdcb6e81528ae8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d1be8e0a5fd956e03242042439b1498802827fb47f48697c712b570145b4b6 = $this->env->getExtension("native_profiler");
        $__internal_28d1be8e0a5fd956e03242042439b1498802827fb47f48697c712b570145b4b6->enter($__internal_28d1be8e0a5fd956e03242042439b1498802827fb47f48697c712b570145b4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d1be8e0a5fd956e03242042439b1498802827fb47f48697c712b570145b4b6->leave($__internal_28d1be8e0a5fd956e03242042439b1498802827fb47f48697c712b570145b4b6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9a776e3cdff6fa9bc4c3e3acc77cfe44a35613fd05e6dc0288bc9deb4ee91150 = $this->env->getExtension("native_profiler");
        $__internal_9a776e3cdff6fa9bc4c3e3acc77cfe44a35613fd05e6dc0288bc9deb4ee91150->enter($__internal_9a776e3cdff6fa9bc4c3e3acc77cfe44a35613fd05e6dc0288bc9deb4ee91150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9a776e3cdff6fa9bc4c3e3acc77cfe44a35613fd05e6dc0288bc9deb4ee91150->leave($__internal_9a776e3cdff6fa9bc4c3e3acc77cfe44a35613fd05e6dc0288bc9deb4ee91150_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
