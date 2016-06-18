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
        $__internal_2a1823d93cf374c2749e5be45ec20f7c6d98e16a6f3ef2d9feb6ac564070e22c = $this->env->getExtension("native_profiler");
        $__internal_2a1823d93cf374c2749e5be45ec20f7c6d98e16a6f3ef2d9feb6ac564070e22c->enter($__internal_2a1823d93cf374c2749e5be45ec20f7c6d98e16a6f3ef2d9feb6ac564070e22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_2a1823d93cf374c2749e5be45ec20f7c6d98e16a6f3ef2d9feb6ac564070e22c->leave($__internal_2a1823d93cf374c2749e5be45ec20f7c6d98e16a6f3ef2d9feb6ac564070e22c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_03c80a02bc5612911c05a6022f9fc59fdf8ad0993df9d00b26b53926ae5ee000 = $this->env->getExtension("native_profiler");
        $__internal_03c80a02bc5612911c05a6022f9fc59fdf8ad0993df9d00b26b53926ae5ee000->enter($__internal_03c80a02bc5612911c05a6022f9fc59fdf8ad0993df9d00b26b53926ae5ee000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_03c80a02bc5612911c05a6022f9fc59fdf8ad0993df9d00b26b53926ae5ee000->leave($__internal_03c80a02bc5612911c05a6022f9fc59fdf8ad0993df9d00b26b53926ae5ee000_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_b147b3fb3d0431d3ffb19bc638f941febaa65c85ddb9101d5d9c802cc23843e2 = $this->env->getExtension("native_profiler");
        $__internal_b147b3fb3d0431d3ffb19bc638f941febaa65c85ddb9101d5d9c802cc23843e2->enter($__internal_b147b3fb3d0431d3ffb19bc638f941febaa65c85ddb9101d5d9c802cc23843e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_b147b3fb3d0431d3ffb19bc638f941febaa65c85ddb9101d5d9c802cc23843e2->leave($__internal_b147b3fb3d0431d3ffb19bc638f941febaa65c85ddb9101d5d9c802cc23843e2_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_5db5e94035955eefcae33b70ee0f2310184fa8d7c7e274393285e5ddabbb008b = $this->env->getExtension("native_profiler");
        $__internal_5db5e94035955eefcae33b70ee0f2310184fa8d7c7e274393285e5ddabbb008b->enter($__internal_5db5e94035955eefcae33b70ee0f2310184fa8d7c7e274393285e5ddabbb008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_5db5e94035955eefcae33b70ee0f2310184fa8d7c7e274393285e5ddabbb008b->leave($__internal_5db5e94035955eefcae33b70ee0f2310184fa8d7c7e274393285e5ddabbb008b_prof);

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
