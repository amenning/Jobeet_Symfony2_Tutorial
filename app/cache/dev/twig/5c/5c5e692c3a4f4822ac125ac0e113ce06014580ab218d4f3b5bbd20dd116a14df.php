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
        $__internal_8e05ae8ce79e786ac6e50f454ab1cfc96a4161e8e310719e2b1ee05e72d5fc27 = $this->env->getExtension("native_profiler");
        $__internal_8e05ae8ce79e786ac6e50f454ab1cfc96a4161e8e310719e2b1ee05e72d5fc27->enter($__internal_8e05ae8ce79e786ac6e50f454ab1cfc96a4161e8e310719e2b1ee05e72d5fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_8e05ae8ce79e786ac6e50f454ab1cfc96a4161e8e310719e2b1ee05e72d5fc27->leave($__internal_8e05ae8ce79e786ac6e50f454ab1cfc96a4161e8e310719e2b1ee05e72d5fc27_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_12827742449a06b0292c7968c8875d7230f5ef13cce9fe6e1d1d1f72ade93edc = $this->env->getExtension("native_profiler");
        $__internal_12827742449a06b0292c7968c8875d7230f5ef13cce9fe6e1d1d1f72ade93edc->enter($__internal_12827742449a06b0292c7968c8875d7230f5ef13cce9fe6e1d1d1f72ade93edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_12827742449a06b0292c7968c8875d7230f5ef13cce9fe6e1d1d1f72ade93edc->leave($__internal_12827742449a06b0292c7968c8875d7230f5ef13cce9fe6e1d1d1f72ade93edc_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_4e43ac9e3d88bef7d9b3a9a1f1728475c56fe7fe4f9ed61c484d8386f20fd2bb = $this->env->getExtension("native_profiler");
        $__internal_4e43ac9e3d88bef7d9b3a9a1f1728475c56fe7fe4f9ed61c484d8386f20fd2bb->enter($__internal_4e43ac9e3d88bef7d9b3a9a1f1728475c56fe7fe4f9ed61c484d8386f20fd2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_4e43ac9e3d88bef7d9b3a9a1f1728475c56fe7fe4f9ed61c484d8386f20fd2bb->leave($__internal_4e43ac9e3d88bef7d9b3a9a1f1728475c56fe7fe4f9ed61c484d8386f20fd2bb_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_5bf87ccee326b7e33cbe5d2e3ea52754356ced3e70f6b5895c8081910511a3b2 = $this->env->getExtension("native_profiler");
        $__internal_5bf87ccee326b7e33cbe5d2e3ea52754356ced3e70f6b5895c8081910511a3b2->enter($__internal_5bf87ccee326b7e33cbe5d2e3ea52754356ced3e70f6b5895c8081910511a3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_5bf87ccee326b7e33cbe5d2e3ea52754356ced3e70f6b5895c8081910511a3b2->leave($__internal_5bf87ccee326b7e33cbe5d2e3ea52754356ced3e70f6b5895c8081910511a3b2_prof);

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
