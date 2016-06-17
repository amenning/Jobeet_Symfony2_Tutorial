<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_c67d6c22526434f11e8aa4ffe188ce93593626cc53fae043689df067784da32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_721ea5ad58e2f55a5979cdb7fb96e2088a4afa39bb12eb9e31793105a6f3fd30 = $this->env->getExtension("native_profiler");
        $__internal_721ea5ad58e2f55a5979cdb7fb96e2088a4afa39bb12eb9e31793105a6f3fd30->enter($__internal_721ea5ad58e2f55a5979cdb7fb96e2088a4afa39bb12eb9e31793105a6f3fd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_721ea5ad58e2f55a5979cdb7fb96e2088a4afa39bb12eb9e31793105a6f3fd30->leave($__internal_721ea5ad58e2f55a5979cdb7fb96e2088a4afa39bb12eb9e31793105a6f3fd30_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_917a993eb5dcc2da73ef42741da8174c9752793ef6d7ad808c938a5dfe9c1561 = $this->env->getExtension("native_profiler");
        $__internal_917a993eb5dcc2da73ef42741da8174c9752793ef6d7ad808c938a5dfe9c1561->enter($__internal_917a993eb5dcc2da73ef42741da8174c9752793ef6d7ad808c938a5dfe9c1561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_917a993eb5dcc2da73ef42741da8174c9752793ef6d7ad808c938a5dfe9c1561->leave($__internal_917a993eb5dcc2da73ef42741da8174c9752793ef6d7ad808c938a5dfe9c1561_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_700a11865780911e2b60d1830a8f2662e0a62b94bcf686b36929420a9dc43c4a = $this->env->getExtension("native_profiler");
        $__internal_700a11865780911e2b60d1830a8f2662e0a62b94bcf686b36929420a9dc43c4a->enter($__internal_700a11865780911e2b60d1830a8f2662e0a62b94bcf686b36929420a9dc43c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_700a11865780911e2b60d1830a8f2662e0a62b94bcf686b36929420a9dc43c4a->leave($__internal_700a11865780911e2b60d1830a8f2662e0a62b94bcf686b36929420a9dc43c4a_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_890fb9d081807e53d54ddc032ad8d533a5e0c9b1d7b40ce4698985cf4d32cb1b = $this->env->getExtension("native_profiler");
        $__internal_890fb9d081807e53d54ddc032ad8d533a5e0c9b1d7b40ce4698985cf4d32cb1b->enter($__internal_890fb9d081807e53d54ddc032ad8d533a5e0c9b1d7b40ce4698985cf4d32cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_890fb9d081807e53d54ddc032ad8d533a5e0c9b1d7b40ce4698985cf4d32cb1b->leave($__internal_890fb9d081807e53d54ddc032ad8d533a5e0c9b1d7b40ce4698985cf4d32cb1b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
