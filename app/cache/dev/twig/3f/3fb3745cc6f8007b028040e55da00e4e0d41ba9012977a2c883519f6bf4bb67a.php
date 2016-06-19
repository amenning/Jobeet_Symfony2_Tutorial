<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_b664d3687d7b9c5c64cafe22521b3c291b9308bf39bfd51c3f4cd4e0cfa14b91 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bae5eb115dc9f5cd15accfed0a72d5872640275603406138baf3bcd76938b44 = $this->env->getExtension("native_profiler");
        $__internal_1bae5eb115dc9f5cd15accfed0a72d5872640275603406138baf3bcd76938b44->enter($__internal_1bae5eb115dc9f5cd15accfed0a72d5872640275603406138baf3bcd76938b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bae5eb115dc9f5cd15accfed0a72d5872640275603406138baf3bcd76938b44->leave($__internal_1bae5eb115dc9f5cd15accfed0a72d5872640275603406138baf3bcd76938b44_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5819818006a0d956cc3e76c1a4f974148494b2b98fde1fe46abda42bf97eaa07 = $this->env->getExtension("native_profiler");
        $__internal_5819818006a0d956cc3e76c1a4f974148494b2b98fde1fe46abda42bf97eaa07->enter($__internal_5819818006a0d956cc3e76c1a4f974148494b2b98fde1fe46abda42bf97eaa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5819818006a0d956cc3e76c1a4f974148494b2b98fde1fe46abda42bf97eaa07->leave($__internal_5819818006a0d956cc3e76c1a4f974148494b2b98fde1fe46abda42bf97eaa07_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
