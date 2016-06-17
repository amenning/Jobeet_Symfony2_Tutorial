<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_d6530b279b499da5f675453ec51f20b7c4a467bea84a89f457561d5a4649b65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_21437ac9187621030c29738be84f582073be4c766d0b5b7d2bc2c36e72ebb2bf = $this->env->getExtension("native_profiler");
        $__internal_21437ac9187621030c29738be84f582073be4c766d0b5b7d2bc2c36e72ebb2bf->enter($__internal_21437ac9187621030c29738be84f582073be4c766d0b5b7d2bc2c36e72ebb2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21437ac9187621030c29738be84f582073be4c766d0b5b7d2bc2c36e72ebb2bf->leave($__internal_21437ac9187621030c29738be84f582073be4c766d0b5b7d2bc2c36e72ebb2bf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8bde5b7d49f258d10972a04b84c843ccc52b45bc07b5413f3861b8f621ca715a = $this->env->getExtension("native_profiler");
        $__internal_8bde5b7d49f258d10972a04b84c843ccc52b45bc07b5413f3861b8f621ca715a->enter($__internal_8bde5b7d49f258d10972a04b84c843ccc52b45bc07b5413f3861b8f621ca715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_8bde5b7d49f258d10972a04b84c843ccc52b45bc07b5413f3861b8f621ca715a->leave($__internal_8bde5b7d49f258d10972a04b84c843ccc52b45bc07b5413f3861b8f621ca715a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
