<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_9b1d9322a95dd3ec54701854c9db63e61127d0ffc5df49696564a9b1305fd3bb extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9244418e2391024137a011c2e9a84db284b9a5a5b879ab808992aa6ddcb78f67 = $this->env->getExtension("native_profiler");
        $__internal_9244418e2391024137a011c2e9a84db284b9a5a5b879ab808992aa6ddcb78f67->enter($__internal_9244418e2391024137a011c2e9a84db284b9a5a5b879ab808992aa6ddcb78f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9244418e2391024137a011c2e9a84db284b9a5a5b879ab808992aa6ddcb78f67->leave($__internal_9244418e2391024137a011c2e9a84db284b9a5a5b879ab808992aa6ddcb78f67_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f177d9a923d8e80428dda76aafb74fd7470f2743c69d64c016e292ff4de6f221 = $this->env->getExtension("native_profiler");
        $__internal_f177d9a923d8e80428dda76aafb74fd7470f2743c69d64c016e292ff4de6f221->enter($__internal_f177d9a923d8e80428dda76aafb74fd7470f2743c69d64c016e292ff4de6f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f177d9a923d8e80428dda76aafb74fd7470f2743c69d64c016e292ff4de6f221->leave($__internal_f177d9a923d8e80428dda76aafb74fd7470f2743c69d64c016e292ff4de6f221_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
