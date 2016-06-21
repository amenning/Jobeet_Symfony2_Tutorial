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
        $__internal_7661f1d64bb7a8056d5b3e447e1f46a2343dc5131b2f1e6824bb0ead35ffb61c = $this->env->getExtension("native_profiler");
        $__internal_7661f1d64bb7a8056d5b3e447e1f46a2343dc5131b2f1e6824bb0ead35ffb61c->enter($__internal_7661f1d64bb7a8056d5b3e447e1f46a2343dc5131b2f1e6824bb0ead35ffb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7661f1d64bb7a8056d5b3e447e1f46a2343dc5131b2f1e6824bb0ead35ffb61c->leave($__internal_7661f1d64bb7a8056d5b3e447e1f46a2343dc5131b2f1e6824bb0ead35ffb61c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7231c2a44091ba671cfd64c437791db1cadeb460ea0a9d0dc060bb03b9699302 = $this->env->getExtension("native_profiler");
        $__internal_7231c2a44091ba671cfd64c437791db1cadeb460ea0a9d0dc060bb03b9699302->enter($__internal_7231c2a44091ba671cfd64c437791db1cadeb460ea0a9d0dc060bb03b9699302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7231c2a44091ba671cfd64c437791db1cadeb460ea0a9d0dc060bb03b9699302->leave($__internal_7231c2a44091ba671cfd64c437791db1cadeb460ea0a9d0dc060bb03b9699302_prof);

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
