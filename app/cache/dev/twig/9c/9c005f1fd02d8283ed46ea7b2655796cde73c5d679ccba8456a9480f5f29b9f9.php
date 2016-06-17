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
        $__internal_52ff201dbd658c7f494b195f081a60d1f00924966574e2a28d4bca0355a55ade = $this->env->getExtension("native_profiler");
        $__internal_52ff201dbd658c7f494b195f081a60d1f00924966574e2a28d4bca0355a55ade->enter($__internal_52ff201dbd658c7f494b195f081a60d1f00924966574e2a28d4bca0355a55ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_52ff201dbd658c7f494b195f081a60d1f00924966574e2a28d4bca0355a55ade->leave($__internal_52ff201dbd658c7f494b195f081a60d1f00924966574e2a28d4bca0355a55ade_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_105143e1f8e5219bed2b9f0fd5dd8c8ccc62bcbec9b5a13a47a0690d217e5e3a = $this->env->getExtension("native_profiler");
        $__internal_105143e1f8e5219bed2b9f0fd5dd8c8ccc62bcbec9b5a13a47a0690d217e5e3a->enter($__internal_105143e1f8e5219bed2b9f0fd5dd8c8ccc62bcbec9b5a13a47a0690d217e5e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_105143e1f8e5219bed2b9f0fd5dd8c8ccc62bcbec9b5a13a47a0690d217e5e3a->leave($__internal_105143e1f8e5219bed2b9f0fd5dd8c8ccc62bcbec9b5a13a47a0690d217e5e3a_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_4ac0ee42a741f55a4496fc92ab067212a5a1be71960f5497da205b07a31f8ebb = $this->env->getExtension("native_profiler");
        $__internal_4ac0ee42a741f55a4496fc92ab067212a5a1be71960f5497da205b07a31f8ebb->enter($__internal_4ac0ee42a741f55a4496fc92ab067212a5a1be71960f5497da205b07a31f8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_4ac0ee42a741f55a4496fc92ab067212a5a1be71960f5497da205b07a31f8ebb->leave($__internal_4ac0ee42a741f55a4496fc92ab067212a5a1be71960f5497da205b07a31f8ebb_prof);

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
