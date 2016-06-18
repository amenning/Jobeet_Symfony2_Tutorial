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
        $__internal_7db97dfefda61dbaef80b9e50741c34fe75c39a08f2de1c9716bc50e9b76070e = $this->env->getExtension("native_profiler");
        $__internal_7db97dfefda61dbaef80b9e50741c34fe75c39a08f2de1c9716bc50e9b76070e->enter($__internal_7db97dfefda61dbaef80b9e50741c34fe75c39a08f2de1c9716bc50e9b76070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db97dfefda61dbaef80b9e50741c34fe75c39a08f2de1c9716bc50e9b76070e->leave($__internal_7db97dfefda61dbaef80b9e50741c34fe75c39a08f2de1c9716bc50e9b76070e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_76cfaf4297681ef85704f366f02dc413fcbe441a566377e0b12d36b62831f6bf = $this->env->getExtension("native_profiler");
        $__internal_76cfaf4297681ef85704f366f02dc413fcbe441a566377e0b12d36b62831f6bf->enter($__internal_76cfaf4297681ef85704f366f02dc413fcbe441a566377e0b12d36b62831f6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_76cfaf4297681ef85704f366f02dc413fcbe441a566377e0b12d36b62831f6bf->leave($__internal_76cfaf4297681ef85704f366f02dc413fcbe441a566377e0b12d36b62831f6bf_prof);

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
