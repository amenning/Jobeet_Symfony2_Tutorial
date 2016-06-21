<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_91140407d2e724c99181fa442621bab67496fd239e281972f4aa44921e5d41bc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_649cf5fc8069b793c48a33cdeacb16f96696331dbc5123d667742c61648b3c8b = $this->env->getExtension("native_profiler");
        $__internal_649cf5fc8069b793c48a33cdeacb16f96696331dbc5123d667742c61648b3c8b->enter($__internal_649cf5fc8069b793c48a33cdeacb16f96696331dbc5123d667742c61648b3c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_649cf5fc8069b793c48a33cdeacb16f96696331dbc5123d667742c61648b3c8b->leave($__internal_649cf5fc8069b793c48a33cdeacb16f96696331dbc5123d667742c61648b3c8b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c0a414cfd89a04744ba1c781acc8ca90ae0ccb2f4ec27b44b84f3d359e37b2f1 = $this->env->getExtension("native_profiler");
        $__internal_c0a414cfd89a04744ba1c781acc8ca90ae0ccb2f4ec27b44b84f3d359e37b2f1->enter($__internal_c0a414cfd89a04744ba1c781acc8ca90ae0ccb2f4ec27b44b84f3d359e37b2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c0a414cfd89a04744ba1c781acc8ca90ae0ccb2f4ec27b44b84f3d359e37b2f1->leave($__internal_c0a414cfd89a04744ba1c781acc8ca90ae0ccb2f4ec27b44b84f3d359e37b2f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
