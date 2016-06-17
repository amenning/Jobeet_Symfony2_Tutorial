<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_2029330c94f8f55d1f2064e3202dd95f479658bfbec6d5ba9c7d6a46a79cb43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e5b86e711945860e884b17417e427da2221c413e0df2960185a3b13edea29e = $this->env->getExtension("native_profiler");
        $__internal_80e5b86e711945860e884b17417e427da2221c413e0df2960185a3b13edea29e->enter($__internal_80e5b86e711945860e884b17417e427da2221c413e0df2960185a3b13edea29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e5b86e711945860e884b17417e427da2221c413e0df2960185a3b13edea29e->leave($__internal_80e5b86e711945860e884b17417e427da2221c413e0df2960185a3b13edea29e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3481054b1e3d99ef3e95c50b4c4c3ca1e53ff4904068b8ae9d5a968d34ceaabd = $this->env->getExtension("native_profiler");
        $__internal_3481054b1e3d99ef3e95c50b4c4c3ca1e53ff4904068b8ae9d5a968d34ceaabd->enter($__internal_3481054b1e3d99ef3e95c50b4c4c3ca1e53ff4904068b8ae9d5a968d34ceaabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_3481054b1e3d99ef3e95c50b4c4c3ca1e53ff4904068b8ae9d5a968d34ceaabd->leave($__internal_3481054b1e3d99ef3e95c50b4c4c3ca1e53ff4904068b8ae9d5a968d34ceaabd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
