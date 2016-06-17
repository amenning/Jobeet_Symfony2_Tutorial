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
        $__internal_777c8daf369f246fe3018077b2dfcd1280d58166f5f2a3ef5728f458ec60fc2a = $this->env->getExtension("native_profiler");
        $__internal_777c8daf369f246fe3018077b2dfcd1280d58166f5f2a3ef5728f458ec60fc2a->enter($__internal_777c8daf369f246fe3018077b2dfcd1280d58166f5f2a3ef5728f458ec60fc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_777c8daf369f246fe3018077b2dfcd1280d58166f5f2a3ef5728f458ec60fc2a->leave($__internal_777c8daf369f246fe3018077b2dfcd1280d58166f5f2a3ef5728f458ec60fc2a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3df8dd35c9f923ecc1ee98151fbfe82a23bbb0f784e64cf851111e311eb9d70 = $this->env->getExtension("native_profiler");
        $__internal_a3df8dd35c9f923ecc1ee98151fbfe82a23bbb0f784e64cf851111e311eb9d70->enter($__internal_a3df8dd35c9f923ecc1ee98151fbfe82a23bbb0f784e64cf851111e311eb9d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_a3df8dd35c9f923ecc1ee98151fbfe82a23bbb0f784e64cf851111e311eb9d70->leave($__internal_a3df8dd35c9f923ecc1ee98151fbfe82a23bbb0f784e64cf851111e311eb9d70_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_dd394eb67326b4217937c4893daf3cdb697e2fcf3b0472ea15ffa63ab35a1790 = $this->env->getExtension("native_profiler");
        $__internal_dd394eb67326b4217937c4893daf3cdb697e2fcf3b0472ea15ffa63ab35a1790->enter($__internal_dd394eb67326b4217937c4893daf3cdb697e2fcf3b0472ea15ffa63ab35a1790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_dd394eb67326b4217937c4893daf3cdb697e2fcf3b0472ea15ffa63ab35a1790->leave($__internal_dd394eb67326b4217937c4893daf3cdb697e2fcf3b0472ea15ffa63ab35a1790_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_21795c0f62cc18bfbe5521fe9cbf5ae59413198e6a0c635f723bb72e08afc34d = $this->env->getExtension("native_profiler");
        $__internal_21795c0f62cc18bfbe5521fe9cbf5ae59413198e6a0c635f723bb72e08afc34d->enter($__internal_21795c0f62cc18bfbe5521fe9cbf5ae59413198e6a0c635f723bb72e08afc34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_21795c0f62cc18bfbe5521fe9cbf5ae59413198e6a0c635f723bb72e08afc34d->leave($__internal_21795c0f62cc18bfbe5521fe9cbf5ae59413198e6a0c635f723bb72e08afc34d_prof);

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
