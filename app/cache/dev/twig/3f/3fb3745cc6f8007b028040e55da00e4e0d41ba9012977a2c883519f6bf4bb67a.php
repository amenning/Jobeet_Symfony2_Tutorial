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
        $__internal_4bf1cf3f04cb6c33a385ac987ba52f7ed08c373653aa22e31edb1e231c3e2bcc = $this->env->getExtension("native_profiler");
        $__internal_4bf1cf3f04cb6c33a385ac987ba52f7ed08c373653aa22e31edb1e231c3e2bcc->enter($__internal_4bf1cf3f04cb6c33a385ac987ba52f7ed08c373653aa22e31edb1e231c3e2bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf1cf3f04cb6c33a385ac987ba52f7ed08c373653aa22e31edb1e231c3e2bcc->leave($__internal_4bf1cf3f04cb6c33a385ac987ba52f7ed08c373653aa22e31edb1e231c3e2bcc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b01661a82ab7c96d8ed5019571f97a84ed3a4b22c6d5965cd166cb17918e9b2f = $this->env->getExtension("native_profiler");
        $__internal_b01661a82ab7c96d8ed5019571f97a84ed3a4b22c6d5965cd166cb17918e9b2f->enter($__internal_b01661a82ab7c96d8ed5019571f97a84ed3a4b22c6d5965cd166cb17918e9b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b01661a82ab7c96d8ed5019571f97a84ed3a4b22c6d5965cd166cb17918e9b2f->leave($__internal_b01661a82ab7c96d8ed5019571f97a84ed3a4b22c6d5965cd166cb17918e9b2f_prof);

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
