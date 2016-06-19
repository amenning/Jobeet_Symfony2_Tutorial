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
        $__internal_0174e070025bec65f5a956c386d2cf1b6b75fe5610b234118b9c65e4fb6b0263 = $this->env->getExtension("native_profiler");
        $__internal_0174e070025bec65f5a956c386d2cf1b6b75fe5610b234118b9c65e4fb6b0263->enter($__internal_0174e070025bec65f5a956c386d2cf1b6b75fe5610b234118b9c65e4fb6b0263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0174e070025bec65f5a956c386d2cf1b6b75fe5610b234118b9c65e4fb6b0263->leave($__internal_0174e070025bec65f5a956c386d2cf1b6b75fe5610b234118b9c65e4fb6b0263_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e489e238f9bc8359e68c186a03ccfb83e8995a182aa0cd1e351070f2d1ac9a81 = $this->env->getExtension("native_profiler");
        $__internal_e489e238f9bc8359e68c186a03ccfb83e8995a182aa0cd1e351070f2d1ac9a81->enter($__internal_e489e238f9bc8359e68c186a03ccfb83e8995a182aa0cd1e351070f2d1ac9a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e489e238f9bc8359e68c186a03ccfb83e8995a182aa0cd1e351070f2d1ac9a81->leave($__internal_e489e238f9bc8359e68c186a03ccfb83e8995a182aa0cd1e351070f2d1ac9a81_prof);

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
