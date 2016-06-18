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
        $__internal_94a566ac9113747bc4be38f77e61d904433deb6613c5b77be19377b2d1377d05 = $this->env->getExtension("native_profiler");
        $__internal_94a566ac9113747bc4be38f77e61d904433deb6613c5b77be19377b2d1377d05->enter($__internal_94a566ac9113747bc4be38f77e61d904433deb6613c5b77be19377b2d1377d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a566ac9113747bc4be38f77e61d904433deb6613c5b77be19377b2d1377d05->leave($__internal_94a566ac9113747bc4be38f77e61d904433deb6613c5b77be19377b2d1377d05_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_18279791d4ee5984a92eb1fd9fd61ff2e8596f079156144a4c48beb6f3781da8 = $this->env->getExtension("native_profiler");
        $__internal_18279791d4ee5984a92eb1fd9fd61ff2e8596f079156144a4c48beb6f3781da8->enter($__internal_18279791d4ee5984a92eb1fd9fd61ff2e8596f079156144a4c48beb6f3781da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_18279791d4ee5984a92eb1fd9fd61ff2e8596f079156144a4c48beb6f3781da8->leave($__internal_18279791d4ee5984a92eb1fd9fd61ff2e8596f079156144a4c48beb6f3781da8_prof);

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
