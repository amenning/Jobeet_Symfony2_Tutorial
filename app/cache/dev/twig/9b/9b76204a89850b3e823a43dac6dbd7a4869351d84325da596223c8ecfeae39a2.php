<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_476f8cd03a3531e7dba7b6eaafe28db4175e58d0ffb069c3b605415427cf6772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_39c106ea47174579166ea2dbdf692dbaa88235602c9f8612c65c5d3c3c84e2c5 = $this->env->getExtension("native_profiler");
        $__internal_39c106ea47174579166ea2dbdf692dbaa88235602c9f8612c65c5d3c3c84e2c5->enter($__internal_39c106ea47174579166ea2dbdf692dbaa88235602c9f8612c65c5d3c3c84e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c106ea47174579166ea2dbdf692dbaa88235602c9f8612c65c5d3c3c84e2c5->leave($__internal_39c106ea47174579166ea2dbdf692dbaa88235602c9f8612c65c5d3c3c84e2c5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_046fd2a02e0b9b3cd5ed4d60d884c1ddd99661b513de9ce668e72e0cb6a4c381 = $this->env->getExtension("native_profiler");
        $__internal_046fd2a02e0b9b3cd5ed4d60d884c1ddd99661b513de9ce668e72e0cb6a4c381->enter($__internal_046fd2a02e0b9b3cd5ed4d60d884c1ddd99661b513de9ce668e72e0cb6a4c381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_046fd2a02e0b9b3cd5ed4d60d884c1ddd99661b513de9ce668e72e0cb6a4c381->leave($__internal_046fd2a02e0b9b3cd5ed4d60d884c1ddd99661b513de9ce668e72e0cb6a4c381_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
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
