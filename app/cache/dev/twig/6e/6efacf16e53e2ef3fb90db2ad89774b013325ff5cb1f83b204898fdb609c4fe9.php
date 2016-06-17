<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_c82b19f1aed39f9a7e46ad31a2c2b38f49dced28e0bf1266b9b1610312e6f34f extends Twig_Template
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
        $__internal_672a51778e40a82e6c427ae1fa5f71b07166b09ef656dea14631745c25775df1 = $this->env->getExtension("native_profiler");
        $__internal_672a51778e40a82e6c427ae1fa5f71b07166b09ef656dea14631745c25775df1->enter($__internal_672a51778e40a82e6c427ae1fa5f71b07166b09ef656dea14631745c25775df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_672a51778e40a82e6c427ae1fa5f71b07166b09ef656dea14631745c25775df1->leave($__internal_672a51778e40a82e6c427ae1fa5f71b07166b09ef656dea14631745c25775df1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_004057b6d115301708091aae3ae634b8dc96e530ffae861d51cba71987205dc8 = $this->env->getExtension("native_profiler");
        $__internal_004057b6d115301708091aae3ae634b8dc96e530ffae861d51cba71987205dc8->enter($__internal_004057b6d115301708091aae3ae634b8dc96e530ffae861d51cba71987205dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_004057b6d115301708091aae3ae634b8dc96e530ffae861d51cba71987205dc8->leave($__internal_004057b6d115301708091aae3ae634b8dc96e530ffae861d51cba71987205dc8_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_bce14c675baa40a94438b524f9a7c415133ae0a49c858656f0f3282286bc8867 = $this->env->getExtension("native_profiler");
        $__internal_bce14c675baa40a94438b524f9a7c415133ae0a49c858656f0f3282286bc8867->enter($__internal_bce14c675baa40a94438b524f9a7c415133ae0a49c858656f0f3282286bc8867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_bce14c675baa40a94438b524f9a7c415133ae0a49c858656f0f3282286bc8867->leave($__internal_bce14c675baa40a94438b524f9a7c415133ae0a49c858656f0f3282286bc8867_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_61926894cf2a8548fc8c8eecf5ea0133f8d536ef4f3b36556f29db37b9eb6cef = $this->env->getExtension("native_profiler");
        $__internal_61926894cf2a8548fc8c8eecf5ea0133f8d536ef4f3b36556f29db37b9eb6cef->enter($__internal_61926894cf2a8548fc8c8eecf5ea0133f8d536ef4f3b36556f29db37b9eb6cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_61926894cf2a8548fc8c8eecf5ea0133f8d536ef4f3b36556f29db37b9eb6cef->leave($__internal_61926894cf2a8548fc8c8eecf5ea0133f8d536ef4f3b36556f29db37b9eb6cef_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
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
