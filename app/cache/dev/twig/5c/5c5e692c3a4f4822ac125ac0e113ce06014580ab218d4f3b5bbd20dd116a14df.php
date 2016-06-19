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
        $__internal_2d2580fdd3ffac46c1c3718ea146dd96753682e3824cda859c090ba77b569ad8 = $this->env->getExtension("native_profiler");
        $__internal_2d2580fdd3ffac46c1c3718ea146dd96753682e3824cda859c090ba77b569ad8->enter($__internal_2d2580fdd3ffac46c1c3718ea146dd96753682e3824cda859c090ba77b569ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_2d2580fdd3ffac46c1c3718ea146dd96753682e3824cda859c090ba77b569ad8->leave($__internal_2d2580fdd3ffac46c1c3718ea146dd96753682e3824cda859c090ba77b569ad8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aa348420c0170fb1e9547b69b96354b802f4bbd17390d027cb29c97b4a76dae9 = $this->env->getExtension("native_profiler");
        $__internal_aa348420c0170fb1e9547b69b96354b802f4bbd17390d027cb29c97b4a76dae9->enter($__internal_aa348420c0170fb1e9547b69b96354b802f4bbd17390d027cb29c97b4a76dae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_aa348420c0170fb1e9547b69b96354b802f4bbd17390d027cb29c97b4a76dae9->leave($__internal_aa348420c0170fb1e9547b69b96354b802f4bbd17390d027cb29c97b4a76dae9_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_440b690d3620d02b76ba5d3dd36df8b3f87564407608d7781570f63c75167c83 = $this->env->getExtension("native_profiler");
        $__internal_440b690d3620d02b76ba5d3dd36df8b3f87564407608d7781570f63c75167c83->enter($__internal_440b690d3620d02b76ba5d3dd36df8b3f87564407608d7781570f63c75167c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_440b690d3620d02b76ba5d3dd36df8b3f87564407608d7781570f63c75167c83->leave($__internal_440b690d3620d02b76ba5d3dd36df8b3f87564407608d7781570f63c75167c83_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_8a512331a73eb8354b871ec82df554c94ad6958bfe04d9a7135d407523bc22ca = $this->env->getExtension("native_profiler");
        $__internal_8a512331a73eb8354b871ec82df554c94ad6958bfe04d9a7135d407523bc22ca->enter($__internal_8a512331a73eb8354b871ec82df554c94ad6958bfe04d9a7135d407523bc22ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8a512331a73eb8354b871ec82df554c94ad6958bfe04d9a7135d407523bc22ca->leave($__internal_8a512331a73eb8354b871ec82df554c94ad6958bfe04d9a7135d407523bc22ca_prof);

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
