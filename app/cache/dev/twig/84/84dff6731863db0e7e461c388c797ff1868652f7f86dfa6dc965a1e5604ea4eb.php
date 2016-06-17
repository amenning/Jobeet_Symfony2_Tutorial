<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_ebc7170b174248e3c990b46269ec85a69c188ff7d23f4bc80389d6e3a560652c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef67af560079e662de36360c8ddd4e0a16c26f48e89dbb60441a2daf7e209c08 = $this->env->getExtension("native_profiler");
        $__internal_ef67af560079e662de36360c8ddd4e0a16c26f48e89dbb60441a2daf7e209c08->enter($__internal_ef67af560079e662de36360c8ddd4e0a16c26f48e89dbb60441a2daf7e209c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef67af560079e662de36360c8ddd4e0a16c26f48e89dbb60441a2daf7e209c08->leave($__internal_ef67af560079e662de36360c8ddd4e0a16c26f48e89dbb60441a2daf7e209c08_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_28c47a43970df032d532c1c12d579be723367c9eab358577bf9888f2500d1407 = $this->env->getExtension("native_profiler");
        $__internal_28c47a43970df032d532c1c12d579be723367c9eab358577bf9888f2500d1407->enter($__internal_28c47a43970df032d532c1c12d579be723367c9eab358577bf9888f2500d1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_28c47a43970df032d532c1c12d579be723367c9eab358577bf9888f2500d1407->leave($__internal_28c47a43970df032d532c1c12d579be723367c9eab358577bf9888f2500d1407_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
