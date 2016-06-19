<?php

/* @SonataAdmin/CRUD/show_trans.html.twig */
class __TwigTemplate_8e64363fc452e1e4fe953e02dbf14ae692aa0c732b5813764fefc32ac55ccf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_trans.html.twig", 11);
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
        $__internal_7e04b7f9542fe73bfd240570ceb6b506acd70c2d604b40c2da6185a2df9509da = $this->env->getExtension("native_profiler");
        $__internal_7e04b7f9542fe73bfd240570ceb6b506acd70c2d604b40c2da6185a2df9509da->enter($__internal_7e04b7f9542fe73bfd240570ceb6b506acd70c2d604b40c2da6185a2df9509da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e04b7f9542fe73bfd240570ceb6b506acd70c2d604b40c2da6185a2df9509da->leave($__internal_7e04b7f9542fe73bfd240570ceb6b506acd70c2d604b40c2da6185a2df9509da_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_62c00d23b0d8749f8b395aa36837c32f89c8f915dd6c37c2b31bc25269a04d10 = $this->env->getExtension("native_profiler");
        $__internal_62c00d23b0d8749f8b395aa36837c32f89c8f915dd6c37c2b31bc25269a04d10->enter($__internal_62c00d23b0d8749f8b395aa36837c32f89c8f915dd6c37c2b31bc25269a04d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_62c00d23b0d8749f8b395aa36837c32f89c8f915dd6c37c2b31bc25269a04d10->leave($__internal_62c00d23b0d8749f8b395aa36837c32f89c8f915dd6c37c2b31bc25269a04d10_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     {% if field_description.options.catalogue is not defined %}*/
/*         {% set value = value|trans %}*/
/*     {% else %}*/
/*         {% set value = value|trans({}, field_description.options.catalogue) %}*/
/*     {% endif %}*/
/* */
/*     {% if field_description.options.safe %}*/
/*         {{ value|raw }}*/
/*     {% else %}*/
/*         {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
