<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_0605c7e47a1c43d71c0e919c3020d2bcf83b376dd38bae5c27e7808248afd412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_365448ec9e3302a0f7c0ff70816a97dabcb2b82779b1250a61a393746b693b2d = $this->env->getExtension("native_profiler");
        $__internal_365448ec9e3302a0f7c0ff70816a97dabcb2b82779b1250a61a393746b693b2d->enter($__internal_365448ec9e3302a0f7c0ff70816a97dabcb2b82779b1250a61a393746b693b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_365448ec9e3302a0f7c0ff70816a97dabcb2b82779b1250a61a393746b693b2d->leave($__internal_365448ec9e3302a0f7c0ff70816a97dabcb2b82779b1250a61a393746b693b2d_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_00020d14fa848154dcb9eae9c0d46f47228c65e7e04878e0013674cafe2d7e6e = $this->env->getExtension("native_profiler");
        $__internal_00020d14fa848154dcb9eae9c0d46f47228c65e7e04878e0013674cafe2d7e6e->enter($__internal_00020d14fa848154dcb9eae9c0d46f47228c65e7e04878e0013674cafe2d7e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_00020d14fa848154dcb9eae9c0d46f47228c65e7e04878e0013674cafe2d7e6e->leave($__internal_00020d14fa848154dcb9eae9c0d46f47228c65e7e04878e0013674cafe2d7e6e_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_c54a11a1b0d55e843e6e4121dad60b871d40cc204f1e843a7495bc24d586c0ef = $this->env->getExtension("native_profiler");
        $__internal_c54a11a1b0d55e843e6e4121dad60b871d40cc204f1e843a7495bc24d586c0ef->enter($__internal_c54a11a1b0d55e843e6e4121dad60b871d40cc204f1e843a7495bc24d586c0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_c54a11a1b0d55e843e6e4121dad60b871d40cc204f1e843a7495bc24d586c0ef->leave($__internal_c54a11a1b0d55e843e6e4121dad60b871d40cc204f1e843a7495bc24d586c0ef_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
