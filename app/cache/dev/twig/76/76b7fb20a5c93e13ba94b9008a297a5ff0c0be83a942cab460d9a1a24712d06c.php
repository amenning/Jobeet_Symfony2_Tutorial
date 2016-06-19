<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_8c83b5e7c4b97655a866fe35531bd25c97d460616fb9ffb9b33e53e42cd92349 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cd3172a0e2bd54400b747b27a8af0365a8c1ccee2c4a56be30cfedb1fdda142 = $this->env->getExtension("native_profiler");
        $__internal_4cd3172a0e2bd54400b747b27a8af0365a8c1ccee2c4a56be30cfedb1fdda142->enter($__internal_4cd3172a0e2bd54400b747b27a8af0365a8c1ccee2c4a56be30cfedb1fdda142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd3172a0e2bd54400b747b27a8af0365a8c1ccee2c4a56be30cfedb1fdda142->leave($__internal_4cd3172a0e2bd54400b747b27a8af0365a8c1ccee2c4a56be30cfedb1fdda142_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4775acb88f31020d37fac2ade0bc4ca19fce51c1385fe8868035c09fa8e33c05 = $this->env->getExtension("native_profiler");
        $__internal_4775acb88f31020d37fac2ade0bc4ca19fce51c1385fe8868035c09fa8e33c05->enter($__internal_4775acb88f31020d37fac2ade0bc4ca19fce51c1385fe8868035c09fa8e33c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_4775acb88f31020d37fac2ade0bc4ca19fce51c1385fe8868035c09fa8e33c05->leave($__internal_4775acb88f31020d37fac2ade0bc4ca19fce51c1385fe8868035c09fa8e33c05_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
