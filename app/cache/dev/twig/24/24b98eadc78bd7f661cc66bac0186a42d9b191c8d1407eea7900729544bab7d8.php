<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_68f746366502284c8fd02eb20e0b123be15cfa04fbda3a523e56ebf0333add1d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c11b8be3ffb576cc7f6a1c3fad4bf1a564c41957fdbcc3368b7ef7f17ed90ebf = $this->env->getExtension("native_profiler");
        $__internal_c11b8be3ffb576cc7f6a1c3fad4bf1a564c41957fdbcc3368b7ef7f17ed90ebf->enter($__internal_c11b8be3ffb576cc7f6a1c3fad4bf1a564c41957fdbcc3368b7ef7f17ed90ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11b8be3ffb576cc7f6a1c3fad4bf1a564c41957fdbcc3368b7ef7f17ed90ebf->leave($__internal_c11b8be3ffb576cc7f6a1c3fad4bf1a564c41957fdbcc3368b7ef7f17ed90ebf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8323295ece96aad662f5bf657c21cb3b80fb7b0b4ae2c7b4c924594654a3915c = $this->env->getExtension("native_profiler");
        $__internal_8323295ece96aad662f5bf657c21cb3b80fb7b0b4ae2c7b4c924594654a3915c->enter($__internal_8323295ece96aad662f5bf657c21cb3b80fb7b0b4ae2c7b4c924594654a3915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_8323295ece96aad662f5bf657c21cb3b80fb7b0b4ae2c7b4c924594654a3915c->leave($__internal_8323295ece96aad662f5bf657c21cb3b80fb7b0b4ae2c7b4c924594654a3915c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
