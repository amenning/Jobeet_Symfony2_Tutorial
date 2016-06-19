<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_d6530b279b499da5f675453ec51f20b7c4a467bea84a89f457561d5a4649b65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_bd635e874b47ddd81636baad43f0ac081073ecae38f8cf787411673b8698cc41 = $this->env->getExtension("native_profiler");
        $__internal_bd635e874b47ddd81636baad43f0ac081073ecae38f8cf787411673b8698cc41->enter($__internal_bd635e874b47ddd81636baad43f0ac081073ecae38f8cf787411673b8698cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd635e874b47ddd81636baad43f0ac081073ecae38f8cf787411673b8698cc41->leave($__internal_bd635e874b47ddd81636baad43f0ac081073ecae38f8cf787411673b8698cc41_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7448116825b193697bf8bd467b77043f1488e90fdbd385bce7f69fe5f8c6a07 = $this->env->getExtension("native_profiler");
        $__internal_b7448116825b193697bf8bd467b77043f1488e90fdbd385bce7f69fe5f8c6a07->enter($__internal_b7448116825b193697bf8bd467b77043f1488e90fdbd385bce7f69fe5f8c6a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b7448116825b193697bf8bd467b77043f1488e90fdbd385bce7f69fe5f8c6a07->leave($__internal_b7448116825b193697bf8bd467b77043f1488e90fdbd385bce7f69fe5f8c6a07_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
