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
        $__internal_2f072f5194c9223471abfad4ea6a1987d427dfe56dc479e582e44701aafc1e33 = $this->env->getExtension("native_profiler");
        $__internal_2f072f5194c9223471abfad4ea6a1987d427dfe56dc479e582e44701aafc1e33->enter($__internal_2f072f5194c9223471abfad4ea6a1987d427dfe56dc479e582e44701aafc1e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f072f5194c9223471abfad4ea6a1987d427dfe56dc479e582e44701aafc1e33->leave($__internal_2f072f5194c9223471abfad4ea6a1987d427dfe56dc479e582e44701aafc1e33_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_194533b3af7e1bb4bb47a1888005af7793c3bdb8a44f45e650cd04a641cfe207 = $this->env->getExtension("native_profiler");
        $__internal_194533b3af7e1bb4bb47a1888005af7793c3bdb8a44f45e650cd04a641cfe207->enter($__internal_194533b3af7e1bb4bb47a1888005af7793c3bdb8a44f45e650cd04a641cfe207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_194533b3af7e1bb4bb47a1888005af7793c3bdb8a44f45e650cd04a641cfe207->leave($__internal_194533b3af7e1bb4bb47a1888005af7793c3bdb8a44f45e650cd04a641cfe207_prof);

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
