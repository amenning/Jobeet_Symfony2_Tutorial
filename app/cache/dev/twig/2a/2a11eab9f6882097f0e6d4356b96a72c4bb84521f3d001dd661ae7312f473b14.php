<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_6108c787f76676800635c3688911817a90cb01f64fce4bca50d6475eca0ed662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_415e43b535025908fb5499ee1d2a354bb8b27f166e52f8b4dbe06b7a80b18e40 = $this->env->getExtension("native_profiler");
        $__internal_415e43b535025908fb5499ee1d2a354bb8b27f166e52f8b4dbe06b7a80b18e40->enter($__internal_415e43b535025908fb5499ee1d2a354bb8b27f166e52f8b4dbe06b7a80b18e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_415e43b535025908fb5499ee1d2a354bb8b27f166e52f8b4dbe06b7a80b18e40->leave($__internal_415e43b535025908fb5499ee1d2a354bb8b27f166e52f8b4dbe06b7a80b18e40_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c5ca3a928700e6b8016d75d3cc8086e88f97540b947b048d42d628af2afd007e = $this->env->getExtension("native_profiler");
        $__internal_c5ca3a928700e6b8016d75d3cc8086e88f97540b947b048d42d628af2afd007e->enter($__internal_c5ca3a928700e6b8016d75d3cc8086e88f97540b947b048d42d628af2afd007e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c5ca3a928700e6b8016d75d3cc8086e88f97540b947b048d42d628af2afd007e->leave($__internal_c5ca3a928700e6b8016d75d3cc8086e88f97540b947b048d42d628af2afd007e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
