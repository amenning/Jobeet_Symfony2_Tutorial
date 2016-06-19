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
        $__internal_01d4a8d6a1e3dab42ef071f20ed5a8ff6411907f2d5ce0c1b5e9d5b6400b9542 = $this->env->getExtension("native_profiler");
        $__internal_01d4a8d6a1e3dab42ef071f20ed5a8ff6411907f2d5ce0c1b5e9d5b6400b9542->enter($__internal_01d4a8d6a1e3dab42ef071f20ed5a8ff6411907f2d5ce0c1b5e9d5b6400b9542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d4a8d6a1e3dab42ef071f20ed5a8ff6411907f2d5ce0c1b5e9d5b6400b9542->leave($__internal_01d4a8d6a1e3dab42ef071f20ed5a8ff6411907f2d5ce0c1b5e9d5b6400b9542_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e560e600a68f3b0dd5efd1977f1e0b44938b22e8f34c83a6670ebb40c4f32af4 = $this->env->getExtension("native_profiler");
        $__internal_e560e600a68f3b0dd5efd1977f1e0b44938b22e8f34c83a6670ebb40c4f32af4->enter($__internal_e560e600a68f3b0dd5efd1977f1e0b44938b22e8f34c83a6670ebb40c4f32af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_e560e600a68f3b0dd5efd1977f1e0b44938b22e8f34c83a6670ebb40c4f32af4->leave($__internal_e560e600a68f3b0dd5efd1977f1e0b44938b22e8f34c83a6670ebb40c4f32af4_prof);

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
