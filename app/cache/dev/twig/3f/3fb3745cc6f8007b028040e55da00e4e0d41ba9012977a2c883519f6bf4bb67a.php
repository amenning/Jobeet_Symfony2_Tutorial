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
        $__internal_71cc83a53f9df1058457ec3b5f518c2be4d4b18e0d26f63ea31071a3f98d88a5 = $this->env->getExtension("native_profiler");
        $__internal_71cc83a53f9df1058457ec3b5f518c2be4d4b18e0d26f63ea31071a3f98d88a5->enter($__internal_71cc83a53f9df1058457ec3b5f518c2be4d4b18e0d26f63ea31071a3f98d88a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71cc83a53f9df1058457ec3b5f518c2be4d4b18e0d26f63ea31071a3f98d88a5->leave($__internal_71cc83a53f9df1058457ec3b5f518c2be4d4b18e0d26f63ea31071a3f98d88a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_599bad9130478a862e3adc4ed65bd1737798e6c5388bca088f2d4e67622d712c = $this->env->getExtension("native_profiler");
        $__internal_599bad9130478a862e3adc4ed65bd1737798e6c5388bca088f2d4e67622d712c->enter($__internal_599bad9130478a862e3adc4ed65bd1737798e6c5388bca088f2d4e67622d712c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_599bad9130478a862e3adc4ed65bd1737798e6c5388bca088f2d4e67622d712c->leave($__internal_599bad9130478a862e3adc4ed65bd1737798e6c5388bca088f2d4e67622d712c_prof);

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
