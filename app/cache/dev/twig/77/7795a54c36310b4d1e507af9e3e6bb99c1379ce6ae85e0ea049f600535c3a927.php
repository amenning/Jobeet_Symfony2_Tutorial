<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8992df6e782e041f36ee9c928c45454fc57cdc334953cdbfefb2f452f655baa1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0b7f78f0a7cb2ca629c70331431fe57fc80dc3adcc40d490f25c6a3c88b015 = $this->env->getExtension("native_profiler");
        $__internal_6d0b7f78f0a7cb2ca629c70331431fe57fc80dc3adcc40d490f25c6a3c88b015->enter($__internal_6d0b7f78f0a7cb2ca629c70331431fe57fc80dc3adcc40d490f25c6a3c88b015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0b7f78f0a7cb2ca629c70331431fe57fc80dc3adcc40d490f25c6a3c88b015->leave($__internal_6d0b7f78f0a7cb2ca629c70331431fe57fc80dc3adcc40d490f25c6a3c88b015_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_484cbeda8e2cb57a1fdfb17b24d3c7758a2e8a7b6938069ccafe467dc688651b = $this->env->getExtension("native_profiler");
        $__internal_484cbeda8e2cb57a1fdfb17b24d3c7758a2e8a7b6938069ccafe467dc688651b->enter($__internal_484cbeda8e2cb57a1fdfb17b24d3c7758a2e8a7b6938069ccafe467dc688651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_484cbeda8e2cb57a1fdfb17b24d3c7758a2e8a7b6938069ccafe467dc688651b->leave($__internal_484cbeda8e2cb57a1fdfb17b24d3c7758a2e8a7b6938069ccafe467dc688651b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
