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
        $__internal_2a31a35bf038d0d47b7336df87b6fb387cbbac934e1fa5e801f749e3ace7530e = $this->env->getExtension("native_profiler");
        $__internal_2a31a35bf038d0d47b7336df87b6fb387cbbac934e1fa5e801f749e3ace7530e->enter($__internal_2a31a35bf038d0d47b7336df87b6fb387cbbac934e1fa5e801f749e3ace7530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_2a31a35bf038d0d47b7336df87b6fb387cbbac934e1fa5e801f749e3ace7530e->leave($__internal_2a31a35bf038d0d47b7336df87b6fb387cbbac934e1fa5e801f749e3ace7530e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d61070eac022cb94c672b2ef3b4ac0e87da6d54a70e4651750d483824c7a4738 = $this->env->getExtension("native_profiler");
        $__internal_d61070eac022cb94c672b2ef3b4ac0e87da6d54a70e4651750d483824c7a4738->enter($__internal_d61070eac022cb94c672b2ef3b4ac0e87da6d54a70e4651750d483824c7a4738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_d61070eac022cb94c672b2ef3b4ac0e87da6d54a70e4651750d483824c7a4738->leave($__internal_d61070eac022cb94c672b2ef3b4ac0e87da6d54a70e4651750d483824c7a4738_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_828744a566757a68d510ef1085ebc01812c3981cd5a8a8145aaddeef3c8c2e26 = $this->env->getExtension("native_profiler");
        $__internal_828744a566757a68d510ef1085ebc01812c3981cd5a8a8145aaddeef3c8c2e26->enter($__internal_828744a566757a68d510ef1085ebc01812c3981cd5a8a8145aaddeef3c8c2e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_828744a566757a68d510ef1085ebc01812c3981cd5a8a8145aaddeef3c8c2e26->leave($__internal_828744a566757a68d510ef1085ebc01812c3981cd5a8a8145aaddeef3c8c2e26_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_cf31ebba0ea9c0df9097ca820246624f1f1bae8d9bfcc744f4e2855d504a5114 = $this->env->getExtension("native_profiler");
        $__internal_cf31ebba0ea9c0df9097ca820246624f1f1bae8d9bfcc744f4e2855d504a5114->enter($__internal_cf31ebba0ea9c0df9097ca820246624f1f1bae8d9bfcc744f4e2855d504a5114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_cf31ebba0ea9c0df9097ca820246624f1f1bae8d9bfcc744f4e2855d504a5114->leave($__internal_cf31ebba0ea9c0df9097ca820246624f1f1bae8d9bfcc744f4e2855d504a5114_prof);

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
