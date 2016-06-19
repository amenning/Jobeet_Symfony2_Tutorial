<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_a5de28ecdb3779c47b97de2dbca834a5c0d801d844d73827f266c4e915424744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5af97c9d4cf6f0a7b41e7f5b1315cd1c5c8e7b25f25c9c7026bfa1736421ce = $this->env->getExtension("native_profiler");
        $__internal_7b5af97c9d4cf6f0a7b41e7f5b1315cd1c5c8e7b25f25c9c7026bfa1736421ce->enter($__internal_7b5af97c9d4cf6f0a7b41e7f5b1315cd1c5c8e7b25f25c9c7026bfa1736421ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_7b5af97c9d4cf6f0a7b41e7f5b1315cd1c5c8e7b25f25c9c7026bfa1736421ce->leave($__internal_7b5af97c9d4cf6f0a7b41e7f5b1315cd1c5c8e7b25f25c9c7026bfa1736421ce_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_5727aac50b027b3c206678f710dfd4b1cfec3caa029841c839b263796dccc74f = $this->env->getExtension("native_profiler");
        $__internal_5727aac50b027b3c206678f710dfd4b1cfec3caa029841c839b263796dccc74f->enter($__internal_5727aac50b027b3c206678f710dfd4b1cfec3caa029841c839b263796dccc74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_5727aac50b027b3c206678f710dfd4b1cfec3caa029841c839b263796dccc74f->leave($__internal_5727aac50b027b3c206678f710dfd4b1cfec3caa029841c839b263796dccc74f_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_8cae219e64de663452e87366d5363dc3a890524aee24e7d2fbd8b2a1bfbd2ecf = $this->env->getExtension("native_profiler");
        $__internal_8cae219e64de663452e87366d5363dc3a890524aee24e7d2fbd8b2a1bfbd2ecf->enter($__internal_8cae219e64de663452e87366d5363dc3a890524aee24e7d2fbd8b2a1bfbd2ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_8cae219e64de663452e87366d5363dc3a890524aee24e7d2fbd8b2a1bfbd2ecf->leave($__internal_8cae219e64de663452e87366d5363dc3a890524aee24e7d2fbd8b2a1bfbd2ecf_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_fb162f6ff94949bdc348e4b43e2290994b0b00212561de99d9c2ebeb42edbf4b = $this->env->getExtension("native_profiler");
        $__internal_fb162f6ff94949bdc348e4b43e2290994b0b00212561de99d9c2ebeb42edbf4b->enter($__internal_fb162f6ff94949bdc348e4b43e2290994b0b00212561de99d9c2ebeb42edbf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_fb162f6ff94949bdc348e4b43e2290994b0b00212561de99d9c2ebeb42edbf4b->leave($__internal_fb162f6ff94949bdc348e4b43e2290994b0b00212561de99d9c2ebeb42edbf4b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
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
/* <div id="sonata-ba-field-container-{{ field_element.vars.id }}" class="sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}">*/
/* */
/*     {% block label %}*/
/*         {% if inline == 'natural' %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*     <div class="sonata-ba-field-error-messages">*/
/*         {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
