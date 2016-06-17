<?php

/* @SonataAdmin/CRUD/list_datetime.html.twig */
class __TwigTemplate_10176a8b068760465724378a3e9e51d13b7a21935db4202a6a76fc7116094a43 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e05c0a36607f509b9f50c7c4db36d0f1c82216d156278464aacac6782c6b35e3 = $this->env->getExtension("native_profiler");
        $__internal_e05c0a36607f509b9f50c7c4db36d0f1c82216d156278464aacac6782c6b35e3->enter($__internal_e05c0a36607f509b9f50c7c4db36d0f1c82216d156278464aacac6782c6b35e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05c0a36607f509b9f50c7c4db36d0f1c82216d156278464aacac6782c6b35e3->leave($__internal_e05c0a36607f509b9f50c7c4db36d0f1c82216d156278464aacac6782c6b35e3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e15b33b6c14b1c1410deb3810d7d45f9fb991c413d78275df89a673a0fe15fab = $this->env->getExtension("native_profiler");
        $__internal_e15b33b6c14b1c1410deb3810d7d45f9fb991c413d78275df89a673a0fe15fab->enter($__internal_e15b33b6c14b1c1410deb3810d7d45f9fb991c413d78275df89a673a0fe15fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array()), (isset($context["timezone"]) ? $context["timezone"] : $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_e15b33b6c14b1c1410deb3810d7d45f9fb991c413d78275df89a673a0fe15fab->leave($__internal_e15b33b6c14b1c1410deb3810d7d45f9fb991c413d78275df89a673a0fe15fab_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  52 => 21,  50 => 20,  47 => 19,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}*/
/*         {{ value|date(field_description.options.format, timezone) }}*/
/*     {%- elseif field_description.options.timezone is defined -%}*/
/*         {{ value|date(null, field_description.options.timezone) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
