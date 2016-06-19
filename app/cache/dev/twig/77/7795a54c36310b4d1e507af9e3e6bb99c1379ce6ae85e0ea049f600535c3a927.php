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
        $__internal_0aedd713b8e0e3240ccf3d4527ebda94826cdfd3d650ce24b4aa54f4b8a5826e = $this->env->getExtension("native_profiler");
        $__internal_0aedd713b8e0e3240ccf3d4527ebda94826cdfd3d650ce24b4aa54f4b8a5826e->enter($__internal_0aedd713b8e0e3240ccf3d4527ebda94826cdfd3d650ce24b4aa54f4b8a5826e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aedd713b8e0e3240ccf3d4527ebda94826cdfd3d650ce24b4aa54f4b8a5826e->leave($__internal_0aedd713b8e0e3240ccf3d4527ebda94826cdfd3d650ce24b4aa54f4b8a5826e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f416d702fef8f876585806d5c300687f712546dbe814c42136aff0dee7cd1404 = $this->env->getExtension("native_profiler");
        $__internal_f416d702fef8f876585806d5c300687f712546dbe814c42136aff0dee7cd1404->enter($__internal_f416d702fef8f876585806d5c300687f712546dbe814c42136aff0dee7cd1404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f416d702fef8f876585806d5c300687f712546dbe814c42136aff0dee7cd1404->leave($__internal_f416d702fef8f876585806d5c300687f712546dbe814c42136aff0dee7cd1404_prof);

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
