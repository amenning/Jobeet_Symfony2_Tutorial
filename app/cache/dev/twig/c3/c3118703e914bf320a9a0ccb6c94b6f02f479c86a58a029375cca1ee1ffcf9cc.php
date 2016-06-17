<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_bea4252b8a2b6eebc96336d0c6136af30becf50ad1dba0e35831379965218169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d3a0f7edc2f3f0e779a528a89b14e02218910cdeb984175418428c39881c999 = $this->env->getExtension("native_profiler");
        $__internal_0d3a0f7edc2f3f0e779a528a89b14e02218910cdeb984175418428c39881c999->enter($__internal_0d3a0f7edc2f3f0e779a528a89b14e02218910cdeb984175418428c39881c999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d3a0f7edc2f3f0e779a528a89b14e02218910cdeb984175418428c39881c999->leave($__internal_0d3a0f7edc2f3f0e779a528a89b14e02218910cdeb984175418428c39881c999_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b2de1ba384f0a3ee75e47d4cca1068519605e7a1dee6dbbafc592bf7c1796efb = $this->env->getExtension("native_profiler");
        $__internal_b2de1ba384f0a3ee75e47d4cca1068519605e7a1dee6dbbafc592bf7c1796efb->enter($__internal_b2de1ba384f0a3ee75e47d4cca1068519605e7a1dee6dbbafc592bf7c1796efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b2de1ba384f0a3ee75e47d4cca1068519605e7a1dee6dbbafc592bf7c1796efb->leave($__internal_b2de1ba384f0a3ee75e47d4cca1068519605e7a1dee6dbbafc592bf7c1796efb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
