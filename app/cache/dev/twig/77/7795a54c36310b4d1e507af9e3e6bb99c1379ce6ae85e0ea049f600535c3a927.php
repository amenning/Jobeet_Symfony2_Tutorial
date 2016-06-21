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
        $__internal_1028511fc0e1b69fa8e5e6605a50c466bb8d78ec70679921974e68086b4b02bd = $this->env->getExtension("native_profiler");
        $__internal_1028511fc0e1b69fa8e5e6605a50c466bb8d78ec70679921974e68086b4b02bd->enter($__internal_1028511fc0e1b69fa8e5e6605a50c466bb8d78ec70679921974e68086b4b02bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1028511fc0e1b69fa8e5e6605a50c466bb8d78ec70679921974e68086b4b02bd->leave($__internal_1028511fc0e1b69fa8e5e6605a50c466bb8d78ec70679921974e68086b4b02bd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c25386f2055ae9f4e3e1fd7b02a3d1b4a67027bdd7c5eb95d671c6234be7a8c7 = $this->env->getExtension("native_profiler");
        $__internal_c25386f2055ae9f4e3e1fd7b02a3d1b4a67027bdd7c5eb95d671c6234be7a8c7->enter($__internal_c25386f2055ae9f4e3e1fd7b02a3d1b4a67027bdd7c5eb95d671c6234be7a8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c25386f2055ae9f4e3e1fd7b02a3d1b4a67027bdd7c5eb95d671c6234be7a8c7->leave($__internal_c25386f2055ae9f4e3e1fd7b02a3d1b4a67027bdd7c5eb95d671c6234be7a8c7_prof);

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
