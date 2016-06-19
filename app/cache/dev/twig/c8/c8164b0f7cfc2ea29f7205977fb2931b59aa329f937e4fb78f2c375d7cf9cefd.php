<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_28b202cecb16f67682cd5f88b0609cdb357be7d8dc60a3b140ea791ad8711bbc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d53b495ae52c5d1c0624162321dec22696c7bb47141fce9e2e767192862ab01 = $this->env->getExtension("native_profiler");
        $__internal_9d53b495ae52c5d1c0624162321dec22696c7bb47141fce9e2e767192862ab01->enter($__internal_9d53b495ae52c5d1c0624162321dec22696c7bb47141fce9e2e767192862ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d53b495ae52c5d1c0624162321dec22696c7bb47141fce9e2e767192862ab01->leave($__internal_9d53b495ae52c5d1c0624162321dec22696c7bb47141fce9e2e767192862ab01_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c2c894b865b5cbfff342d40660fbc1d1cc40531429e3706b73af1d231ddf4619 = $this->env->getExtension("native_profiler");
        $__internal_c2c894b865b5cbfff342d40660fbc1d1cc40531429e3706b73af1d231ddf4619->enter($__internal_c2c894b865b5cbfff342d40660fbc1d1cc40531429e3706b73af1d231ddf4619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_c2c894b865b5cbfff342d40660fbc1d1cc40531429e3706b73af1d231ddf4619->leave($__internal_c2c894b865b5cbfff342d40660fbc1d1cc40531429e3706b73af1d231ddf4619_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
