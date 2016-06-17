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
        $__internal_1d4a05e9a2767617e8d25b41e82e1ba02523609378b7c52ffab45f3e8beeceb5 = $this->env->getExtension("native_profiler");
        $__internal_1d4a05e9a2767617e8d25b41e82e1ba02523609378b7c52ffab45f3e8beeceb5->enter($__internal_1d4a05e9a2767617e8d25b41e82e1ba02523609378b7c52ffab45f3e8beeceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_1d4a05e9a2767617e8d25b41e82e1ba02523609378b7c52ffab45f3e8beeceb5->leave($__internal_1d4a05e9a2767617e8d25b41e82e1ba02523609378b7c52ffab45f3e8beeceb5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c622e56c3ee9b89b59ad2116a235a5d01434b3d91cf6bd5ad4594fcecfc2f30a = $this->env->getExtension("native_profiler");
        $__internal_c622e56c3ee9b89b59ad2116a235a5d01434b3d91cf6bd5ad4594fcecfc2f30a->enter($__internal_c622e56c3ee9b89b59ad2116a235a5d01434b3d91cf6bd5ad4594fcecfc2f30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_c622e56c3ee9b89b59ad2116a235a5d01434b3d91cf6bd5ad4594fcecfc2f30a->leave($__internal_c622e56c3ee9b89b59ad2116a235a5d01434b3d91cf6bd5ad4594fcecfc2f30a_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_022e1f58b6e8bae104f7fbf29ada5bd77617749f83958f1ef191cff09359132c = $this->env->getExtension("native_profiler");
        $__internal_022e1f58b6e8bae104f7fbf29ada5bd77617749f83958f1ef191cff09359132c->enter($__internal_022e1f58b6e8bae104f7fbf29ada5bd77617749f83958f1ef191cff09359132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_022e1f58b6e8bae104f7fbf29ada5bd77617749f83958f1ef191cff09359132c->leave($__internal_022e1f58b6e8bae104f7fbf29ada5bd77617749f83958f1ef191cff09359132c_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_761afaccb2d396cd3bd45582b56073c9c1632686abc4171b4827fec09e06a40b = $this->env->getExtension("native_profiler");
        $__internal_761afaccb2d396cd3bd45582b56073c9c1632686abc4171b4827fec09e06a40b->enter($__internal_761afaccb2d396cd3bd45582b56073c9c1632686abc4171b4827fec09e06a40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_761afaccb2d396cd3bd45582b56073c9c1632686abc4171b4827fec09e06a40b->leave($__internal_761afaccb2d396cd3bd45582b56073c9c1632686abc4171b4827fec09e06a40b_prof);

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
